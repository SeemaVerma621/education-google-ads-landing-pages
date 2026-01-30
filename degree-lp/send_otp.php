<?php
session_start();

if (isset($_POST['email']) && isset($_POST['phone'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $otp = rand(100000, 999999); // Generate a 6-digit OTP
    $_SESSION['otp'] = $otp; // Store OTP in session

    // Send OTP via email or SMS (use your own implementation here)
    mail($email, "Your OTP Code", "Your OTP code is $otp");

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
