<?php
include 'config.php'; // your DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize input
    $name    = trim(mysqli_real_escape_string($coni, $_POST["name"]));
    $email   = trim(mysqli_real_escape_string($coni, $_POST["email"]));
    $subject = trim(mysqli_real_escape_string($coni, $_POST["subject"]));
    $message = trim(mysqli_real_escape_string($coni, $_POST["message"]));

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $msg = "All fields are required.";
        $type = "warning";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "Invalid email address.";
        $type = "error";
    } else {
        // Insert into database
        $sql = "INSERT INTO contacts (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $coni->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            $msg = "Thank you, $name! Your message has been received.";
            $type = "success";
        } else {
            $msg = "Sorry, something went wrong. Please try again.";
            $type = "error";
        }

        $stmt->close();
    }

    $coni->close();

    // Output SweetAlert and redirect
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Status</title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<script>
Swal.fire({
    icon: '{$type}',
    title: '{$msg}',
    showConfirmButton: true,
    confirmButtonText: 'OK'
}).then(() => {
    window.location.href = 'contact.php';
});
</script>
</body>
</html>
HTML;

    exit();
} else {
    // Invalid request
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Invalid Request</title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<script>
Swal.fire({
    icon: 'error',
    title: 'Invalid request.',
    showConfirmButton: true,
    confirmButtonText: 'OK'
}).then(() => {
    window.location.href = 'contact.php';
});
</script>
</body>
</html>
HTML;

    exit();
}
?>
