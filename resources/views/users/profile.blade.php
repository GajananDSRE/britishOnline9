<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Britishonline9</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">    
    <link rel="" sizes="180x180" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="{{ asset('css/user/style.css') }}">
</head>
<body class="profile-body">
    <div class="modal">
        <img src="" alt="">
        <div class="close"></div>
    </div>
    
    <div class="container">
        <div class="profile-card">
            <div class="header">
                <div class="main">
                    <div class="image">
                        <div class="hover">
                            <i class="fas fa-camera fa-2x"></i>
                        </div>
                    </div>
                    <h3 class="name">Kaka11</h3>
                    <h3 class="sub-name">@Kaaaaaka1</h3>
                </div>
            </div>

            <div class="content">
                <div class="left">
                    <div class="about-container">
                        <h3 class="title">Wallet Amount</h3>
                        <p class="text">$100,000</p>
                    </div>
                    <div class="icons-container">
                        <p class="text">Your Id's</p>
                        <a href="www.bullexch.com" class="icon">
                            <img src="{{asset('images/bullexch.png')}}" alt="" srcset="">
                        </a>
                        <a href="www.betdaily.site" class="icon">
                            <img src="{{asset('images/betdaily.png')}}" alt="" srcset="">
                        </a>
                        <a href="www.britishonline9.com" class="icon">
                            <img src="{{asset('images/logo.png')}}" alt="" srcset="">
                        </a>
                        <a href="#" class="icon">
                             <img src="{{asset('images/RD-LOGO.png')}}" alt="" srcset="">
                        </a>
                    </div>
                    <div class="buttons-wrap justify-content-between">
                        <div class="follow-wrap">
                            <a href="Logout" class="follow" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            {{ Form::open(array('url' => 'logout','id'=>'logout-form','style'=>'display:none'))}}
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>