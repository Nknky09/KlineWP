<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secret = "6Lfim8MpAAAAAN-DODYGKFHOaWz2bfuAydS68NyM"; // Your secret key
    $response = $_POST["g-recaptcha-response"]; // The response from reCAPTCHA
    $remoteip = $_SERVER["REMOTE_ADDR"];
    $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
    $result = json_decode($url, TRUE);

    if ($result['success'] == 1) {
        // Verified - process the rest of your form here
    } else {
        // reCAPTCHA failed
        echo "You are a robot! Stop the spam.";
    }
}
?>
