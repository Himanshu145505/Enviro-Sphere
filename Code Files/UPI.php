<!DOCTYPE html>
<html>
<head>
    <title>UPI Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .qr-code {
            margin-bottom: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        p {
            color: #666;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .note {
            color: #999;
            font-size: 0.9em;
            margin-top: 20px;
        }
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>UPI Payment</h1>
        <div class="qr-code">
            <img src="Cont/UPIqr.jpeg" alt="QR Code">
        </div>
        <p>Scan the QR code above or use the UPI ID for payment.</p>
        <p><strong>UPI ID:</strong> enviro_sphere@yesbank</p>
        <p class="note">Note: Please ensure that you are making the payment to the correct UPI ID.</p>
        <a href="UHome.php" class="cta-button">Back to Home</a>
    </div>
</body>
</html>
