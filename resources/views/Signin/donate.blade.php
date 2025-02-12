<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate to Needy</title>
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
        <div class="header">🌟 Donate to Needy</div>
        <div class="form-container">
            <h2>✨ Make a Difference with Your Donation</h2>
            <p>Choose a cause and donate securely. Your small contribution can change a life!</p>
            <form action="{{ route('donate.store') }}" method="POST">
                @csrf
                <label for="name">👤 Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter recipient's name" required>
                
                <label for="email">📧 Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
                <label for="amount">💰 Donation Amount (₹)</label>
                <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
                
                <label for="cause">🎯 Select Cause</label>
                <select id="cause" name="cause" required>
                    <option value="" disabled selected>🔽 Choose a cause</option>
                    <option value="education">📚 Education</option>
                    <option value="medical">🏥 Medical</option>
                    <option value="animal">🐾 Animal Welfare</option>
                    <option value="personal">🏠 Personal Help</option>
                </select>
                
                <button type="submit">🙏 Donate Now</button>
                <a href="{{ url('/') }}" class="btn-back">🏠 Back to Home</a>
            </form>
        </div>
    </div>
</body>
</html>
