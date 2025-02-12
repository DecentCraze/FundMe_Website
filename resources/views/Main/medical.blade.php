<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Campaigns</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background: linear-gradient(to right, #f8ffae, #43c6ac);
        }
        .header {
            background: linear-gradient(135deg, #ff758c, #ff7eb3);
            color: white;
            padding: 20px;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
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
            font-size: 26px;
            color: #d9534f;
        }
        .content p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }
        .btn-back {
            padding: 12px 24px;
            margin-top: 20px;
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s ease;
            display: inline-block;
        }
        .btn-back:hover {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
        }
        .example-campaigns {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }
        .campaign-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            width: 320px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .campaign-card:hover {
            transform: translateY(-5px);
        }
        .btn-donate {
            display: inline-block;
            padding: 10px 15px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .btn-donate:hover {
            background: linear-gradient(135deg, #0056b3, #007bff);
        }
    </style>
</head>
<body>
    <div class="header">🌟 Cry for Help</div>
    <div class="content">
        <h2>🏥 Medical Campaign</h2>
        <p>Start a campaign to support medical causes. Your donations save lives.</p>

        <h2>🌍 Featured Campaigns</h2>
        <div class="example-campaigns">
            <div class="campaign-card">
                <h3>🎗️ Indian Cancer Society</h3>
                <p>Non-profit organization raising awareness and funding treatment for cancer patients in India.</p>
                <a href="#" class="btn-donate">₹14,012,000 raised of ₹∞ goal</a>
            </div>
            <div class="campaign-card">
                <h3>🏥 National Cooperative Development Corporation (NCDC)</h3>
                <p>Providing financial aid for medical development projects across India.</p>
                <a href="#" class="btn-donate">₹5,621 raised of ₹∞ goal</a>
            </div>
        </div>
        <p>💡 Many lives have been transformed through your generosity...</p>
        <p>❝ A wise person keeps money in their head, not in their heart. ❞</p>
        <a href="{{ url('/') }}" class="btn-back">🏠 Back to Home</a>
    </div>
</body>
</html>
