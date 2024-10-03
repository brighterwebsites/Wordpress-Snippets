// Email credentials
$hostname = 'YOURHOSTNAME';  //{ventraip.email:993/imap/ssl}INBOX
$username = 'EMAILADDRESS'; //
$password = 'PASSWORD';

// Connect to the mailbox
$inbox = imap_open($hostname, $username, $password) or die('Cannot connect to mailbox: ' . imap_last_error());

// Search for new emails with specific subject line
$emails = imap_search($inbox, 'UNSEEN SUBJECT "Support Request"');


//Implementing Multiple Filters:
// To process emails based on multiple criteria, use logical operators in the imap_search query:
// $emails = imap_search($inbox, 'UNSEEN FROM "sender@example.com" SUBJECT "Specific Subject Line"');


if ($emails) {
    // Sort emails from newest to oldest
    rsort($emails);

    foreach ($emails as $email_number) {
        // Fetch the email overview and body
        $overview = imap_fetch_overview($inbox, $email_number, 0);
        $message = imap_fetchbody($inbox, $email_number, 1);

        $subject = $overview[0]->subject;
        $from = $overview[0]->from;

        // Create the ticket post
        $post_data = array(
            'post_title'    => $subject,
            'post_content'  => $message,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_type'     => 'ticket',  //Change to CPT SLUG
        );

        // Insert the post into WordPress
        wp_insert_post($post_data);

        // Mark the email as seen
        imap_setflag_full($inbox, $email_number, "\\Seen");
    }
}

// Close the mailbox
imap_close($inbox);
