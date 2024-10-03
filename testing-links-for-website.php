<?php
// Creates an admin page in wp dashboard with links to useful tesing resources for clients or durring development 

// Add a custom admin menu page
function add_testing_and_links_menu() {
    add_menu_page(
        'Testing and Links', // Page title
        'Testing and Links', // Menu title
        'manage_options', // Capability required to access the menu
        'testing_and_links', // Menu slug
        'render_testing_and_links_page', // Callback function to display the page content
        'dashicons-admin-links', // Icon for the menu page (you can change this)
        80 // Position in the admin menu
    );
}
add_action('admin_menu', 'add_testing_and_links_menu');

// Callback function to render the page content
function render_testing_and_links_page() {
    ?>
    <div class="wrap">
        <h1>Testing and Links</h1>
        <p>Main Heading on the page is Testing and links</p>

        <h2>Labrika - <a href="https://labrika.com/dashboard" target="_blank">https://labrika.com/dashboard</a></h2>

        <h2>Cloudflare: <a href="https://dash.cloudflare.com/2b031d0e442b2f8cf5513eca21974cfd/<?php echo site_url(); ?>" target="_blank"><?php echo site_url(); ?></a></h2>

        <h2>Google Services</h2>

        <ul>
            <li>Search Console: <a href="https://search.google.com/search-console?utm_source=about-page&resource_id=sc-domain:<?php echo site_url(); ?>" target="_blank"><?php echo site_url(); ?></a></li>
            <li>Recapture (New): <a href="https://www.google.com/recaptcha/admin/create" target="_blank">https://www.google.com/recaptcha/admin/create</a></li>
            <li>GA4: <a href="https://analytics.google.com/analytics/web" target="_blank">https://analytics.google.com/analytics/web</a></li>
            <li>Google Analytics 4 Query Explorer: <a href="https://ga-dev-tools.google/ga4/query-explorer/" target="_blank">https://ga-dev-tools.google/ga4/query-explorer/</a></li>
            <li>Google Tag Manager: <a href="https://tagmanager.google.com/#/home" target="_blank">https://tagmanager.google.com/#/home</a></li>
            <li>Google APIs: <a href="https://console.cloud.google.com/apis/credentials?project=seoweb-304513&pli=1" target="_blank">https://console.cloud.google.com/apis/credentials?project=seoweb-304513&pli=1</a></li>
            <li>Test your structured data: <a href="https://developers.google.com/search/docs/appearance/structured-data" target="_blank">https://developers.google.com/search/docs/appearance/structured-data</a></li>
            <li>Structured Data Markup Helper: <a href="https://www.google.com/webmasters/markup-helper/" target="_blank">https://www.google.com/webmasters/markup-helper/</a></li>
            <li>PageSpeed Insights: <a href="https://pagespeed.web.dev/" target="_blank">https://pagespeed.web.dev/</a></li>
        </ul>




    <h1>Useful Links</h1>
    <ul>
        <li><a href="https://safeweb.norton.com/site_dispute" target="_blank">Norton SafeWeb Site Dispute</a></li>
        <li><a href="https://www.google.com/business/" target="_blank">Google Free Business Profile</a></li>
        <li><a href="https://gtmetrix.com/?audit" target="_blank">GTmetrix</a></li>
        <li>Free Website Accessibility Checker: <a href="https://accessibleweb.com/website-accessibility-checker/" target="_blank">AccessibleWeb</a></li>
        <li><a href="https://www.latlong.net/" target="_blank">LatLong</a></li>
        <li><a href="https://shortpixel.com/login" target="_blank">ShortPixel</a></li>
        <li><a href="https://www.bing.com/webmasters/about" target="_blank">Bing Webmaster</a></li>
        <li><a href="https://webmaster.yandex.com/welcome/" target="_blank">Yandex Webmaster</a></li>
        <li><a href="https://sitelookup.mcafee.com/" target="_blank">McAfee SiteLookup</a></li>
        <li><a href="https://archive.org/advancedsearch.php" target="_blank">Internet Archive Advanced Search</a></li>
        <li><a href="https://ipinfo.io/login" target="_blank">IPinfo.io</a></li>
    </ul>


        <!-- Add more links as needed -->

    </div>
    <?php
}
