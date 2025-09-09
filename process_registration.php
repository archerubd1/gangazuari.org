<?php
session_start();
include_once('config.php'); // uses $coni (mysqli) from your config

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $program_id    = isset($_POST['program_id']) ? intval($_POST['program_id']) : 0;
    $program_type  = isset($_POST['program_type']) ? trim($_POST['program_type']) : '';
    $program_title = isset($_POST['program_title']) ? trim($_POST['program_title']) : '';
    $name          = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email         = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $phone         = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $participant_type = isset($_POST['participant_type']) ? trim($_POST['participant_type']) : '';
    $expectations  = isset($_POST['expectations']) ? trim($_POST['expectations']) : '';
    $contribution  = isset($_POST['contribution']) ? trim($_POST['contribution']) : '';


$base_url = $is_localhost ? 'http://localhost/gangazuari.org' : 'https://gangazuari.org';


    $errors = [];
    if (empty($name)) $errors[] = "Name is required.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
    if (empty($phone)) $errors[] = "Phone number is required.";
    if (empty($participant_type)) $errors[] = "Please select participant type.";
    if (empty($expectations)) $errors[] = "Please describe your expectations.";
    if (empty($contribution)) $errors[] = "Please describe your contribution.";

    // Helper function to show SweetAlert and exit
    function sweetAlert($title, $text, $icon, $redirect = null) {
        echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>$title</title>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head><body>
        <script>
        Swal.fire({
            title: '$title',
            html: '$text',
            icon: '$icon',
            confirmButtonText: 'OK'
        }).then(() => { " . ($redirect ? "window.location.href='$redirect';" : "window.history.back();") . " });
        </script></body></html>";
        exit();
    }

    if (count($errors) > 0) {
        sweetAlert('Validation Error', implode("<br>", $errors), 'warning');
    }

    $sql = "INSERT INTO program_registrations 
        (program_id, program_type, program_title, name, email, phone, participant_type, expectations, contribution, status, created_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending', NOW())";

    if ($stmt = mysqli_prepare($coni, $sql)) {
        mysqli_stmt_bind_param($stmt, "issssssss",
            $program_id, $program_type, $program_title, $name, $email, $phone, $participant_type, $expectations, $contribution
        );

        if (mysqli_stmt_execute($stmt)) {
            sweetAlert('🎉 Thank you!', "You are registered for <strong>$program_title</strong>. We will contact you shortly.", 'success', $base_url);
        } else {
            sweetAlert('Database Error', mysqli_error($coni), 'error');
        }

        mysqli_stmt_close($stmt);
    } else {
        sweetAlert('Database Error', mysqli_error($coni), 'error');
    }

} else {
    sweetAlert('Invalid Request', 'Please submit the form properly.', 'error');
}
?>
