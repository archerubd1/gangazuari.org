<?php
session_start();
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name           = trim($_POST['name']);
    $email          = trim($_POST['email']);
    $kyc_type       = trim($_POST['kyc_type']);
    $kyc_number     = trim($_POST['kyc_number']);
    $cause          = trim($_POST['cause']);
    $amount         = floatval($_POST['amount']);
    $payment_method = trim($_POST['payment_method']);

    // Basic validation
    if (empty($name) || empty($email) || empty($cause) || empty($amount) || empty($payment_method)) {
        die('All fields except KYC are required.');
    }

    // Insert with initial status 'Pending'
    $stmt = $coni->prepare("INSERT INTO donations (name, email, kyc_type, kyc_number, cause, amount, payment_method, status) VALUES (?, ?, ?, ?, ?, ?, ?, 'Pending')");
    $stmt->bind_param("ssssssd", $name, $email, $kyc_type, $kyc_number, $cause, $amount, $payment_method);

    if ($stmt->execute()) {
        $donationId = $stmt->insert_id;
        $stmt->close();
        $coni->close();

        // Redirect to dummy payment gateway page
        header("Location: dummy-payment-gateway.php?donation_id=$donationId");
        exit;
    } else {
        echo "Failed to process donation.";
    }
} else {
    header("Location: donate.php");
    exit;
}
?>
