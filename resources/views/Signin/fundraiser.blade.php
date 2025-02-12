<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start a Fundraiser</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #f8ffae, #43c6ac);
        }
        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            position: relative;
        }
        .header {
            background: linear-gradient(135deg, #ff758c, #ff7eb3);
            color: white;
            padding: 20px;
            font-size: 26px;
            font-weight: bold;
            border-radius: 10px 10px 0 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        h2 {
            margin: 20px 0;
            font-size: 24px;
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }
        .form-container {
            max-width: 500px;
            margin: auto;
            background: #f8f8f8;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container input,
        .form-container select,
        .form-container textarea,
        .form-container button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .form-container select {
            appearance: none;
            background: white;
            cursor: pointer;
        }
        .form-container select:hover {
            background: #f0f0f0;
        }
        .form-container button {
            background: linear-gradient(135deg, #43c6ac, #191654);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .form-container button:hover {
            background: linear-gradient(135deg, #191654, #43c6ac);
        }
        .form-container label {
            display: block;
            text-align: left;
            font-size: 16px;
            margin-bottom: 5px;
            margin-top: 15px;
            font-weight: 500;
            color: #333;
        }
        .form-container input[type="file"] {
            padding: 5px;
            background: #fff;
        }
        .btn-back {
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
            font-size: 16px;
            width: auto;
            transition: background 0.3s ease;
        }
        .btn-back:hover {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
        }
        @media (max-width: 600px) {
            .form-container { width: 90%; }
        }
    </style>
</head>
<body>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="header">🚀 Start Your Fundraiser Today!</div>
        <div class="form-container">
            <h2>✨ Create Your Fundraising Campaign</h2>
            <p>Start your journey towards making a difference. Choose a cause and share your story!</p>

            <!-- Form starts here -->
            <form action="{{ route('fundraiser.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="name">👤 Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">📧 Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="adhar">🆔 Aadhar Number</label>
                <input type="text" id="adhar" name="adhar" placeholder="Enter your Aadhar number" required>

                <!-- Fancier Dropdown with Icons -->
                <label for="cause">🎯 Select a Cause</label>
                <select id="cause" name="cause" required>
                    <option value="" disabled selected>🔽 Choose a cause</option>
                    <option value="personal">🏠 Personal</option>
                    <option value="education">📚 Education</option>
                    <option value="animal">🐾 Animal</option>
                </select>

                <label for="reason">📝 Reason for Campaign</label>
                <textarea id="reason" name="reason" placeholder="Describe why you need funds" required></textarea>

                <label for="maxAmount">💰 Maximum Goal Amount (₹)</label>
                <input type="number" id="maxAmount" name="maxAmount" placeholder="Enter maximum goal" required>

                <label for="days">📅 Campaign Duration (Days)</label>
                <input type="number" id="days" name="days" placeholder="Enter number of days" required>

                <label for="imageVideo">📷 Upload Your Image or Video</label>
                <input type="file" id="imageVideo" name="imageVideo" accept="image/*,video/*" required>

                <label for="message">💌 Message to Donors</label>
                <textarea id="message" name="message" placeholder="Write a message for potential donors" required></textarea>

                <button type="submit">🚀 Launch Campaign</button>
<a href="{{ url('/') }}" class="btn-back">🏠 Back to Home</a>

            </form>
            <!-- Form ends here -->
        </div>
    </div>
</body>
</html>
