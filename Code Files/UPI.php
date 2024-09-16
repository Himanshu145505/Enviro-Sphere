<!DOCTYPE html>
<html>
<head>
    <title>UPI Payment</title>
    <style>


/*         other stylings */
        p {
            color: #666;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

/*         Imp message styling */
        .note {
            color: #999;
            font-size: 0.9em;
            margin-top: 20px;
        }
/*         Back to home page button */
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

/*         back to homepage button hover */
        .cta-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
<!--         UPI Payment Heading -->
        <h1>UPI Payment</h1>
        <div class="qr-code">
<!--             QR Image  -->
            <img src="Cont/UPIqr.jpeg" alt="QR Code">
        </div>
<!--         Headings and Notes -->
        <p>Scan the QR code above or use the UPI ID for payment.</p>
        <p><strong>UPI ID:</strong> enviro_sphere@yesbank</p>
        <p class="note">Note: Please ensure that you are making the payment to the correct UPI ID.</p>
<!--         Redirection to Homepage -->
        <a href="UHome.php" class="cta-button">Back to Home</a>
    </div>
</body>
</html>
