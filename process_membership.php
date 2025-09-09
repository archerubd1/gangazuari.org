<?php
include 'config.php'; // your DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $full_name       = trim(mysqli_real_escape_string($coni, $_POST['full_name']));
    $email           = trim(mysqli_real_escape_string($coni, $_POST['email']));
    $phone           = trim(mysqli_real_escape_string($coni, $_POST['phone']));
    $membership_type = trim(mysqli_real_escape_string($coni, $_POST['membership']));
    $interest        = trim(mysqli_real_escape_string($coni, $_POST['interest']));
    $motivation      = trim(mysqli_real_escape_string($coni, $_POST['motivation']));

    // Check if email already exists
    $check_sql = "SELECT id FROM member_applicants WHERE email = ? LIMIT 1";
    $stmt = $coni->prepare($check_sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $msg = "This email is already registered.";
        $type = "warning";
        $stmt->close();
    } else {
        $stmt->close();
        // Insert into database
        $insert_sql = "INSERT INTO member_applicants 
            (full_name, email, phone, membership_type, interest, motivation) 
            VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $coni->prepare($insert_sql);
        $stmt->bind_param("ssssss", $full_name, $email, $phone, $membership_type, $interest, $motivation);

        if ($stmt->execute()) {
            $msg = "Thank you! Your membership application has been submitted successfully.";
            $type = "success";
        } else {
            $msg = "Error submitting your application. Please try again.";
            $type = "error";
        }
        $stmt->close();
    }

    $coni->close();

    // Output SweetAlert HTML
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Membership Status</title>
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
    window.location.href = 'membership.php';
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
    window.location.href = 'membership.php';
});
</script>
</body>
</html>
HTML;

    exit();
}
?>
