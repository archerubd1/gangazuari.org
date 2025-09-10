<?php
$donationId = $_GET['donation_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dummy Payment Gateway - Gangazuari</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Dummy Payment Gateway</h2>
    <form id="dummyPaymentForm" class="p-4 border rounded shadow bg-light">
      <div class="form-group">
        <label for="dummy_payment_method">Select Payment Option</label>
        <select class="form-control" id="dummy_payment_method" required>
          <option value="">Select a payment option</option>
          <option value="dummy_upi">UPI ID: dummy@upi</option>
          <option value="dummy_card">Card Number: 4111 1111 1111 1111</option>
          <option value="dummy_bank">Bank Account: 1234567890</option>
        </select>
      </div>

      <div class="form-group">
        <label for="dummy_payment_details">Enter Payment Details</label>
        <input type="text" class="form-control" id="dummy_payment_details" placeholder="e.g., UPI transaction ID or dummy card CVV" required>
      </div>

      <button type="submit" class="btn btn-success btn-block">Complete Payment</button>
    </form>
  </div>

  <script>
    document.getElementById('dummyPaymentForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const method = document.getElementById('dummy_payment_method').value;
      const details = document.getElementById('dummy_payment_details').value;

      if (!method || !details) {
        Swal.fire('Error', 'Please fill all fields', 'error');
        return;
      }

      // Simulate processing and updating payment status
      fetch('payment-success.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'donation_id=<?= $donationId ?>'
      })
      .then(response => {
        return response.text();
      })
      .then(data => {
        Swal.fire({
          icon: 'success',
          title: 'Thank You!',
          text: 'Your donation has been successfully processed. A receipt will be sent to your email.',
          confirmButtonText: 'Return to Donate Us Page'
        }).then(() => {
          window.location.href = 'donate.php';
        });
      })
      .catch(err => {
        Swal.fire('Error', 'An error occurred during payment processing', 'error');
      });
    });
  </script>
</body>
</html>
