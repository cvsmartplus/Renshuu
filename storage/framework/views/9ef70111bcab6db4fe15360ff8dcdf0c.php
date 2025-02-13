<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Akun Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #2c3e50;
        }
        p {
            color: #555;
            font-size: 16px;
        }
        .otp-code {
            font-size: 24px;
            font-weight: bold;
            color: #e74c3c;
            margin: 10px 0;
        }
        .btn {
            display: inline-block;
            background: #3498db;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
        .btn:hover {
            background: #2980b9;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Verifikasi Akun Anda</h1>
        <p>Halo, <strong><?php echo e($user); ?></strong></p>
        <p>Terima kasih telah bergabung dengan platform kami! Untuk mengaktifkan akun Anda, silakan gunakan kode OTP berikut:</p>
        
        <p class="otp-code"><?php echo e($otp); ?></p>

        <p>Atau klik tombol di bawah ini untuk langsung melakukan verifikasi:</p>
        
        <a href="<?php echo e(route('otp.verify')); ?>" class="btn">Verifikasi Sekarang</a>

        <p>Jika tombol di atas tidak berfungsi, Anda juga bisa menyalin dan menempel tautan berikut ini di browser:</p>
        <p><a href="<?php echo e(route('otp.verify')); ?>"><?php echo e(route('otp.verify')); ?></a></p>

        <p class="footer">Jika Anda tidak merasa mendaftar di platform kami, abaikan email ini.</p>
    </div>

</body>
</html>
<?php /**PATH D:\laragon\www\Renshuu\resources\views/emails/OTPPage.blade.php ENDPATH**/ ?>