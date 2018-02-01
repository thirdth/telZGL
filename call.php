<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once 'SDK/twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;

    /* Make a call using Twilio. You can run this file 3 different ways:
     *
     * 1. Save it as call.php and at the command line, run
     *        php call.php
     *
     * 2. Upload it to a web host and load mywebhost.com/call.php
     *    in a web browser.
     *
     * 3. Download a local server like WAMP, MAMP or XAMPP. Point the web root
     *    directory to the folder containing this file, and load
     *    localhost:8888/call.php in a web browser.
     */

    // Step 1: Get the Twilio-PHP library from twilio.com/docs/libraries/php,
    // following the instructions to install it with Composer.
    require_once "vendor/autoload.php";
    use Twilio\Rest\Client;

    // Step 3: Instantiate a new Twilio Rest Client
    $client = new Client($TWsid, $TWtoken);

    try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            // Step 4: Change the 'To' number below to whatever number you'd like
            // to call.
            "+16159457818",

            // Step 5: Change the 'From' number below to be a valid Twilio number
            // that you've purchased or verified with Twilio.
            "+16158100182",

            // Step 6: Set the URL Twilio will request when the call is answered.
            array("url" => "http://demo.twilio.com/welcome/voice/")
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
