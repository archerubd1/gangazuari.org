<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['donation_id'])) {
    $donationId = intval($_POST['donation_id']);
    $stmt = $coni->prepare("UPDATE donations SET status = 'Success' WHERE donation_id = ?");
    $stmt->bind_param("i", $donationId);
    $stmt->execute();
    $stmt->close();
}
?>
