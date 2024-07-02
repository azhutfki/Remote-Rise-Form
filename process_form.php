<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $contact = htmlspecialchars($_POST['contact']);
    $country = htmlspecialchars($_POST['country']);
    $age = htmlspecialchars($_POST['age']);
    $language = htmlspecialchars($_POST['language']);
    $education = htmlspecialchars($_POST['education']);

    $to = 'brittaniaocho@gmail.com';
    $subject = 'New Job Application';
    $message = "Full Name: $fullname\nContact Info: $contact\nCountry: $country\nAge: $age\nLanguage Proficiency: $language\nLevel of Education: $education";
    $headers = 'From: noreply@yourdomain.com' . "\r\n" .
               'Reply-To: noreply@yourdomain.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Application submitted successfully.';
    } else {
        echo 'Failed to send application.';
    }
} else {
    echo 'Invalid request method.';
}
?>
