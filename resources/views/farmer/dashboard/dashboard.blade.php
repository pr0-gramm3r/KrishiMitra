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
            <img src="{{ asset('asset/icons/icon.png') }}" alt="">
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
                <p>Ai-Powered tools and real-time information to help farmers grow better, and earn more.</p>
                <div class="btn">
                    <a id="get-started" href="#" >Get Started <i class="fas fa-arrow-right"></i></a>
                    <a id="explore" href="#">Explore Features <i class="fas fa-search"></i></a>
                </div>
            </div>
            <div class="trust-card">
                <div class="emblem">
                    <img src="{{ asset('asset/icons/icon.png') }}" alt="Loading...">
                </div>
                <div class="desc">
                    <p>Trusted by</p>
                    <h3>2.5 Lakh +</h3>
                    <p>Farmers across India</p>
                </div>
            </div>
        </div>
        <div class="center">
            <div class="left">
                <img src="{{ asset('asset/card_icons/plant.png') }}" alt="Plant image">
                <div class="details">
                    <h3>Namaste, Ramesh! 👋</h3>
                    <p>Here's What's happening on your farm today.</p>
                </div>
            </div>
            <div class="right"><img src="{{ asset('asset/card_icons/grid.png') }}" alt=""> Dashboard Overview</div>
        </div>
        <div class="contents">
            <div class="weather-card">
                <div class="top">
                        <img src="{{ asset('asset/google_weather_icons/partly_cloudy.png') }}" alt="sun behind cloud">
                    <div class="right">
                        <h3>Weather Forecast</h3>
                        <p>New Delhi, India</p>
                    </div>
                </div>
                <div class="middle">
                    <div class="left">
                        <p class="celcius">32°c</p>
                        <p>Partly Cloudy</p>
                    </div>
                    <div class="right">
                        <img src="{{ asset('asset/google_weather_icons/partly_cloudy.png') }}" alt="season's clouds">
                    </div>
                </div>
                <div class="bottom">
                    <div class="upper">
                        <div class="humidity">
                            <p>Humidity</p>
                            <h4>62%</h4>
                        </div>
                        <div class="windSpeed">
                            <p>Wind Speed</p>
                            <h4>18 km/h</h4>
                        </div>
                        <div class="rainChance">
                            <p>Rain Chance</p>
                            <h4>10%</h4>
                        </div>
                    </div>
                    <div class="lower">
                        
                        <div class="sun">
                            <p>Sun</p>
                            <img src="{{ asset('asset/google_weather_icons/partly_cloudy.png') }}" alt="">
                            <p>32°/24°</p>
                        </div>
                        
                        <div class="mon">
                            <p>Mon</p>
                            <img src="{{ asset('asset/google_weather_icons/mostly_cloudy.png') }}" alt="">
                            <p>32°/24°</p>
                        </div>
                        
                        <div class="tue">
                            <p>Tue</p>
                            <img src="{{ asset('asset/google_weather_icons/thunderstorms.png') }}" alt="">
                            <p>32°/24°</p>
                        </div>
                        
                        <div class="wed">
                            <p>Wed</p>
                            <img src="{{ asset('asset/google_weather_icons/heavy_rain.png') }}" alt="">
                            <p>32°/24°</p>
                        </div>
                        
                        <div class="thu">
                            <p>Thu</p>
                            <img src="{{ asset('asset/google_weather_icons/sunny_with_rain.png') }}" alt="">
                            <p>32°/24°</p>
                        </div>
                        
                        <div class="fri">
                            <p>Fri</p>
                            <img src="{{ asset('asset/google_weather_icons/mostly_clear.png') }}" alt="">
                            <p>32°/24°</p>
                        </div>
                        
                        <div class="sat">
                            <p>Sat</p>
                            <img src="{{ asset('asset/google_weather_icons/mostly_clear_day.png') }}" alt="">
                            <p>32°/24°</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crop-doctor">
                <div class="top">
                    <img src="{{ asset('asset/card_icons/plant_health.png') }}" alt="Plant Health+">
                    <div class="right">
                        <h3>Crop Health Scanner</h3>
                        <p>Scan your crop leaf</p>
                    </div>
                </div>
                <div class="middle">
                    <div class="icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h4>Upload Leaf Image</h4>
                    <p>JPG, PNG up to 5MB</p>
                </div>
                <div class="down">
                    <h4>View Diagnosis History</h4>
                </div>
            </div>
            <div class="mandi-prices">
                <div class="top">
                    <img src="{{ asset('asset/card_icons/mandi-live.jpg') }}" alt="mandi live">
                    <div class="right">
                        <h3>Live Mandi Prices</h3>
                        <p>Today's Prices</p>
                    </div>
                </div>
                <div class="middle">
                    <div class="wheat row-data up-border">
                        <div class="row-data">
                            <h4>Wheat</h4>
                            <p>(गेहूं)</p>
                        </div>    
                        <div class="row-data">
                            <h4>₹2,125</h4>
                            <p>/quintal</p>
                        </div>
                        <div class="mandi-percentage profit">
                            <i class="fas fa-sort-up"></i>
                            2.3%
                        </div>
                    </div>
                    <div class="paddy row-data up-border">
                       <div class="row-data">
                            <h4>Paddy</h4>
                            <p>(धान)</p>
                        </div>    
                        <div class="row-data">
                            <h4>₹1,860</h4>
                            <p>/quintal</p>
                        </div>
                        <div class="mandi-percentage profit">
                            <i class="fas fa-sort-up"></i>
                            1.8%
                        </div>
                    </div>
                    <div class="cotton row-data up-border">
                        <div class="row-data">
                            <h4>Cotton</h4>
                            <p>(कपास)</p>
                        </div>    
                        <div class="row-data">
                            <h4>₹6,540</h4>
                            <p>/quintal</p>
                        </div>
                        <div class="mandi-percentage loss" style="align-items:center ">
                            <i class="fas fa-sort-down" ></i>
                            1.2%
                        </div>
                    </div>
                    <div class="mustard row-data up-border">
                        <div class="row-data">
                            <h4>Mustard</h4>
                            <p>(सरसों)</p>
                        </div>    
                        <div class="row-data">
                            <h4>₹5,125</h4>
                            <p>/quintal</p>
                        </div>
                        <div class="mandi-percentage profit">
                            <i class="fas fa-sort-up"></i>
                            0.7%
                        </div>
                    </div>
                </div>
                <div class="down">
                    <h4>View All Prices</h4>
                </div>
            </div>
            <div class="government-alerts">
                <div class="top">
                    <i class="far fa-bell"></i>
                    <div class="right">
                        <h3>Government Alerts</h3>
                        <p>Stay Updated</p>
                    </div>
                </div>
                <div class="middle">
                    <div class="kisan-yojana">
                        <h4>PM Kisan Yojana</h4>
                        <p>₹2000 installment released <br>15 June 2024</p>
                    </div>

                    <div class="insurance">
                        <h4>Crop Insurance Scheme</h4>
                        <p>Last date to apply: 30 June 2024</p>
                    </div>

                    <div class="soil-health-card">
                        <h4>Soil Health Card</h4>
                        <p>Free soil testing camp in your area</p>
                    </div>

                </div>
                <div class="down"></div>
            </div>
        </div>
    </home>

    <script src="{{ asset('farmer/dashboard.js') }}"></script>
</body>
</html>