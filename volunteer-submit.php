<?php
session_start();
include_once('config.php');  // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $name         = trim($_POST['name']);
    $email        = trim($_POST['email']);
    $phone        = trim($_POST['phone']);
    $interest     = trim($_POST['interest']);
    $skills       = trim($_POST['skills']);
    $availability = trim($_POST['availability']);
    $motivation   = trim($_POST['motivation']);

    if (empty($name) || empty($email) || empty($phone) || empty($interest) || empty($skills) || empty($availability) || empty($motivation)) {
        die('All fields are required.');
    }

    // Prepare and execute INSERT statement
    $stmt = $coni->prepare("INSERT INTO volunteers (name, email, phone, interest, skills, availability, motivation) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $interest, $skills, $availability, $motivation);

    $isSuccess = $stmt->execute();
    $stmt->close();
    $coni->close();
} else {
    header("Location: volunteer.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volunteer Submission</title>

    <!-- SweetAlert CSS & JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<script>
document.addEventListener('DOMContentLoaded', function () {
    <?php if ($isSuccess): ?>
        Swal.fire({
            icon: 'success',
            title: 'Thank You!',
            text: 'Your volunteer form has been submitted successfully. We will get back to you soon.',
            confirmButtonText: 'Go to Home'
        }).then(() => {
            window.location.href = 'volunteer.php';
        });
    <?php else: ?>
        Swal.fire({
            icon: 'error',
            title: 'Submission Failed',
            text: 'Oops! Something went wrong. Please try again later.',
            confirmButtonText: 'Back to Form'
        }).then(() => {
            window.location.href = 'volunteer-form.php';
        });
    <?php endif; ?>
});
</script>

</body>
</html>
