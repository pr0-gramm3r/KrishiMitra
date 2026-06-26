<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        <link rel="stylesheet" href="{{ asset('root/root.css') }}">
        <link rel="stylesheet" href="{{ asset('farmer/dashboard.css') }}">
        
        <title>Dashbard</title>

</head>
<body>
    <navbar>
        <div class="logo">
            <img src="{{ asset('asset/icon.png') }}" alt="">
            <h3>KrishiMitra</h3>
            <p>AI</p>
        </div>
        <div class="head-links">
            <div class="home">Home</div>
            <div class="cropDoctor">Crop Doctor</div>
            <div class="weather">Weather</div>
            <div class="mandiPrice">Mandi Price</div>
            <div class="governmentSchemes">Government Schemes</div>
        </div>
        <div class="account-utilities">
            <div class="lang">
                <p class = "eng active"><i class="fas fa-globe"></i>Eng</p>
                <p class = "hin">हिं</p>
            </div>
            <div class="account">
                <p style="display: none"><i class="far fa-user"></i> Account</p>
                <a id="login" href="{{ route('login') }}" >
                    <p><i class="fas fa-sign-in-alt"></i> Login</p>
                </a>
            </div>
        </div>
    </navbar>
    <home>
        <div class="top">
            <div class="bg">
                <img id="farming-land" src="{{ asset('asset/usable-bg/plain-field.jpg.jpeg') }}" alt="no Image loaded">
            </div>
            <img id="farmer" src="{{ asset('asset/usable-bg/farmer-removebg-preview.png') }}" alt="no Image loaded">
            <div class="moto">
                <h1 id="up">Smart Farming</h1>
                <h1 id="down">for Every Village</h1>
                <p>Ai-Powered tools and real-time information to help farmers grow better,<br> and earn more.</p>
                <div class="btn">
                    <a id="get-started" href="#" >Get Started <i class="fas fa-arrow-right"></i></a>
                    <a id="explore" href="#">Explore Features <i class="fas fa-search"></i></a>
                </div>
            </div>
            <div class="trust-card">
                <div class="emblem">
                    <img src="{{ asset('asset/icon.png') }}" alt="Loading...">
                </div>
                <div class="desc">
                    <p>Trusted by</p>
                    <h3>2.5 Lakh +</h3>
                    <p>Farmers across India</p>
                </div>
            </div>
        </div>
        <div class="contents"></div>
    </home>

    <script src="{{ asset('farmer/dashboard.js') }}"></script>
</body>
</html>