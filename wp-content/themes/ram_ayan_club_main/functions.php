<?php
function mytheme_enqueue_scripts() {

    // Main Template CSS
    wp_enqueue_style( 'gotur', get_template_directory_uri() . '/assets/css/gotur.css' );

    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Just+Another+Hand&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap', array(), null );

    // CSS Vendors
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/assets/vendors/bootstrap-select/bootstrap-select.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendors/animate/animate.min.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendors/fontawesome/css/all.min.css' );
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.css'  );
    wp_enqueue_style( 'jarallax', get_template_directory_uri() . '/assets/vendors/jarallax/jarallax.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css'  );
    wp_enqueue_style( 'nouislider', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.min.css' );
    wp_enqueue_style( 'nouislider-pips', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.pips.css'  );
    wp_enqueue_style( 'gotur-icons', get_template_directory_uri() . '/assets/vendors/gotur-icons/style.css'  );
    wp_enqueue_style( 'daterangepicker', get_template_directory_uri() . '/assets/vendors/daterangepicker-master/daterangepicker.css' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/css/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/vendors/owl-carousel/css/owl.theme.default.min.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/vendors/slick-carousel/slick.css' );

    // JS Vendors
    wp_enqueue_script( 'jquery' ); // WP ke built-in jQuery ko use karo

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-select', get_template_directory_uri() . '/assets/vendors/bootstrap-select/bootstrap-select.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/vendors/jarallax/jarallax.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.js', array('jquery'), null, true );
    wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/vendors/jquery-appear/jquery.appear.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'circle-progress', get_template_directory_uri() . '/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendors/jquery-validate/jquery.validate.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'nouislider', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'wnumb', get_template_directory_uri() . '/assets/vendors/wnumb/wNumb.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/js/owl.carousel.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/vendors/slick-carousel/slick.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array('jquery'), null, true );
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/vendors/imagesloaded/imagesloaded.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/vendors/isotope/isotope.js', array('jquery'), null, true );
    wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/vendors/countdown/countdown.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'moment', get_template_directory_uri() . '/assets/vendors/daterangepicker-master/moment.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'daterangepicker', get_template_directory_uri() . '/assets/vendors/daterangepicker-master/daterangepicker.js', array('jquery'), null, true );
    wp_enqueue_script( 'circleType', get_template_directory_uri() . '/assets/vendors/jquery-circleType/jquery.circleType.js', array('jquery'), null, true );
    wp_enqueue_script( 'lettering', get_template_directory_uri() . '/assets/vendors/jquery-lettering/jquery.lettering.min.js', array('jquery'), null, true );

    // GSAP
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/assets/vendors/gsap/gsap.js', array(), null, true );
    wp_enqueue_script( 'scrollTrigger', get_template_directory_uri() . '/assets/vendors/gsap/scrollTrigger.min.js', array('gsap'), null, true );
    wp_enqueue_script( 'splittext', get_template_directory_uri() . '/assets/vendors/gsap/splittext.min.js', array('gsap'), null, true );
    wp_enqueue_script( 'gotur-gsap', get_template_directory_uri() . '/assets/vendors/gsap/gotur-gsap.js', array('gsap'), null, true );

    // Template main JS
    wp_enqueue_script( 'gotur-js', get_template_directory_uri() . '/assets/js/gotur.js', array('jquery'), null, true );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


// WordPress form submit handler

// Handle form submission
function handle_booking_form_submission() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'booking_form_submit') {

        // Nonce check (security)
        if (!isset($_POST['booking_form_nonce']) || !wp_verify_nonce($_POST['booking_form_nonce'], 'booking_form_action')) {
            wp_die('Security check failed.');
        }

        global $wpdb;
        $table = $wpdb->prefix . "bookings"; // WordPress table name

        // Sanitize user inputs
        $yourName         = sanitize_text_field($_POST['yourName']);
        $phoneNumber      = sanitize_text_field($_POST['phoneNumber']);
        $startDestination = sanitize_text_field($_POST['startDestination']);
        $endDestination   = sanitize_text_field($_POST['endDestination']);
        $passenger        = sanitize_text_field($_POST['passenger']);
        $car              = sanitize_text_field($_POST['car']);
        $startDate        = sanitize_text_field($_POST['startDate']);
        $endDate          = sanitize_text_field($_POST['endDate']);

        // Insert into DB
        $inserted = $wpdb->insert(
            $table,
            array(
                'yourName'        => $yourName,
                'phoneNumber'     => $phoneNumber,
                'startDestination'=> $startDestination,
                'endDestination'  => $endDestination,
                'passenger'       => $passenger,
                'car'             => $car,
                'start_date'      => $startDate,
                'end_date'        => $endDate,
            ),
            array('%s','%s','%s','%s','%s','%s','%s','%s')
        );

       if ($inserted) {
    set_transient('booking_message', [
        'type' => 'success',
        'title' => 'Booking Successful!',
        'text'  => 'Your booking was submitted successfully. We will contact you soon.'
    ], 30);
} else {
    set_transient('booking_message', [
        'type' => 'error',
        'title' => 'Booking Failed!',
        'text'  => 'Something went wrong. Please try again later.'
    ], 30);
}

wp_safe_redirect($_POST['_wp_http_referer']); // same page reload
exit;
    }
}
add_action('init', 'handle_booking_form_submission');

// Load SweetAlert2 library
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', [], null, true);
});

// Show popup after form submit
add_action('wp_footer', function () {
    $message = get_transient('booking_message');
    if ($message) {
        delete_transient('booking_message'); ?>
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: '<?php echo esc_js($message['type']); ?>', 
                title: '<?php echo esc_js($message['title']); ?>',
                text: '<?php echo esc_js($message['text']); ?>'
            });
        });
        </script>
    <?php }
});
