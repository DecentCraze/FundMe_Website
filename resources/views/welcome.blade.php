<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cry for Help</title>
    <style>
        body { 
            font-family:"Lucida Console", "Courier New", monospace;
            margin: 0; 
            padding: 0; 
            text-align: center; 
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
        }

        .header { 
            background-color: rgb(148, 220, 238); 
            color: green; 
            padding: 15px; 
            display: flex; 
            justify-content: center;  /* Center horizontally */
            align-items: center;     /* Center vertically */
            text-align: center;
        }

        .header h3 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            position: absolute;
            right: 20px;
            top: 15px;
        }

        .nav-links a { 
            color: magenta; 
            text-decoration: none; 
            font-size: 14px;
            text-transform: uppercase;
            margin-left: 20px;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        .banner { 
            background-color: rgb(243, 204, 96); 
            padding: 20px; 
        }

        .banner h2 { 
            color: #d9534f; 
        }   

        .btn { 
            padding: 10px 20px; 
            margin: 10px; 
            border: none; 
            cursor: pointer; 
        }

        .btn-primary { 
            background-color: #000; 
            color: white; 
        }

        .btn-secondary { 
            background-color: white; 
            border: 1px solid #000; 
        }

        .categories { 
            display: flex; 
            flex-wrap: wrap; 
            justify-content: center; 
            gap: 20px; 
            margin-top: 20px; 
        }

        .category { 
            text-align: center; 
        }

        .quote { 
            margin-top: 30px; 
            font-style: italic; 
            color: #555; 
        }

        .contact { 
            margin-top: 50px; 
            padding: 20px; 
            background-color: rgb(164, 235, 174); 
        }

        .contact h2 { 
            color: #333; 
        }

        .contact form { 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
        }

        .contact input, .contact textarea { 
            width: 90%; 
            max-width: 400px; 
            padding: 10px; 
            margin: 5px 0; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }

        .contact button { 
            padding: 10px 20px; 
            margin-top: 10px; 
            border: none; 
            background-color: #28a745; 
            color: white; 
            cursor: pointer; 
        }

        .running-text { 
            width: 100%; 
            white-space: nowrap; 
            overflow: hidden; 
            background: #000; 
            color: white; 
            padding: 10px 0; 
        }

        .running-text marquee { 
            font-size: 18px; 
        }

        /* Styling the links to look like buttons */
        a.btn-link {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color:rgb(253, 87, 114); /* Green color */
            color: white;
            font-weight: bold;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        a.btn-link:hover {
            background-color:rgb(124, 247, 151); /* Darker green for hover effect */
        }

        html {
            scroll-behavior: smooth;  /* Enable smooth scrolling */
        }

        @media (max-width: 600px) {
            .header { 
                flex-direction: column;
                padding: 10px;
            }

            .nav-links { 
                position: static;
                margin-top: 10px;
            }

            .nav-links a {
                display: block;
                margin: 5px 0;
            }

            .categories { 
                flex-direction: column; 
                align-items: center; 
            }

            .quote {
                font-size: 16px;
            }

            .banner h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Cry for Help</h1>
        <div class="nav-links">
            <a href="{{url('/about')}}">About</a>
            <a href="{{url('/login')}}">login</a>
            <a href="{{ url('/signup') }}">Signup</a> <!-- Added link to contact page -->
        </div>
    </div>
    
    <div class="running-text">
        <marquee>Join us in making a difference! Every donation helps those in need. Act now!</marquee>
    </div>
    
    <div class="banner">
        <h2>Your Donation Saves Lives</h2>
        <p>Help impacted people and communities.</p>
        <!-- Styled link to Donation Page -->
        <a href="{{ url('/donate') }}" class="btn-link">Go to Donation Page</a>
        <a href="{{ url('/fundraiser') }}" class="btn-link">Start a Campaign</a>
    </div>
    
    <h1>Successful Fundraising Start Here</h1>
    <div class="categories">
        <button class="btn btn-secondary" onclick="location.href='{{url('/personal')}}'">Personal</button>
        <button class="btn btn-secondary" onclick="location.href='{{url('/education')}}'">Education</button>
        <button class="btn btn-secondary" onclick="location.href='{{url('/medical')}}'">Medical</button>
        <button class="btn btn-secondary" onclick="location.href='{{url('/animal')}}'">Animal</button>
    </div>
    
    <p class="quote">“No one has ever become poor by giving.” – Anne Frank</p>
    
    <!-- Add id to Contact Section for anchor link to work -->
    <div id="contact" class="contact">
    <h2>Contact Us</h2>
    <form action="{{ route('contact.submit') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Email">
    <textarea name="message" placeholder="Your Message"></textarea>
    <button type="submit">Submit</button>
</form>

    </div>
</body>
</html>
