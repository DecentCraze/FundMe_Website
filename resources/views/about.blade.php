<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Cry for Help</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f4f4f4;
        }
        .header {
            background-color: rgb(148, 220, 238);
            color: white;
            padding: 15px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 36px;
        }
        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content h2 {
            font-size: 28px;
            color: #d9534f;
        }
        .content p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }
        .btn-back {
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            font-size: 16px;
        }
        .btn-back:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Cry for Help</h1>
        <p>Your donations make a difference!</p>
    </div>

    <div class="content">
        <h2>About Us</h2>
        <p>Welcome to Cry for Help! We are a non-profit organization dedicated to helping individuals and communities in need. Our mission is to connect people who want to make a difference with those who require assistance. Every donation counts and helps us bring hope to those in challenging situations.</p>
        
        <p>Our platform makes it easy for anyone to contribute to meaningful causes, whether it be for education, medical aid, animal welfare, or other important causes. We believe that no act of kindness is too small, and together, we can make a significant impact.</p>

        <p>Join us in making the world a better place. Together, we can help those in need and change lives for the better.</p>
        
        <!-- Back to Home Button -->
        <a href="{{ url('/') }}" class="btn-back">Back to Home</a>
    </div>

</body>
</html>
