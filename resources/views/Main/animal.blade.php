<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Campaigns</title>
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
        .example-campaigns {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }
        .campaign-card {
            background-color: #e9ecef;
            border-radius: 8px;
            padding: 15px;
            margin: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-donate {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn-donate:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Cry for Help</h1>
        <p>Your donations make a difference!</p>
    </div>
    <div class="content">
        <h2>🐾 Animal Campaigns</h2>
        <p>Help provide medical care, rescue, and protection for animals in need.</p>

        <h2>🌟 Featured Campaigns</h2>
        <div class="example-campaigns">
            @foreach($exampleCampaigns as $campaign)
            <div class="campaign-card">
                <h3>{{ $campaign->title }}</h3>
                <p>{{ $campaign->description }}</p>
                <a href="#" class="btn-donate">₹{{ $campaign->amount_raised }} raised of ₹{{ $campaign->goal }}</a>
            </div>
            @endforeach

        </div>
        <p>💡 Every little help makes a big difference...</p>
        <p>💖 "Wealth consists not only of money but also of good deeds."</p>
        <a href="{{ url('/') }}" class="btn-back">🏠 Back to Home</a>
    </div>
</body>
</html>
