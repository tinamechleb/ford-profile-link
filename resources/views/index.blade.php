<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ford</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('styles.css')}}" rel="stylesheet">

    </head>
    <body class="antialiased m-0">
        <div style="position: absolute;top: 5%;left:0;z-index: 10;flex-direction: column;" class="d-grid justify-content-center w-100">
            <img src="ford-logo.png" class="w-100" style="max-width: 150px;justify-self:center;"/>
            <p class="text-align-center my-4 blue-text font-weight-bold">@fordmynaghi</p>
            <div style="margin-bottom: 100px;">
                <div class="link-container">
                    <p>Official Website</p>
                </div>
                <div class="link-container">
                    <p>Official Website</p>
                </div>
                <div class="link-container">
                    <p>Official Website</p>
                </div>
                <div class="link-container">
                    <p>Official Website</p>
                </div>
                <div class="link-container">
                    <p>Official Website</p>
                </div>
                <div class="link-container">
                    <p>Official Website</p>
                </div>
                <div class="link-container">
                    <p>Official Website</p>
                </div>
                <div class="link-container">
                    <p>Official Website</p>
                </div>
                <div class="link-container">
                    <p>Official Website</p>
                </div>
                <div class="link-container">
                    <p>Official Website</p>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <img src="footer.png"/>
        </div>
            <div style="position: fixed;"> 
            <div class="slider-container" style="z-index: 9; position: relative; height: 100%">
                <div><img src="{{asset('background-01.png')}}" style="height: 100%; width: 100vw;object-fit: cover;"/></div>
                <div><img src="{{asset('background-01.png')}}" style="height: 100vh; width: 100vw;object-fit: cover;"/></div>
                <div><img src="{{asset('background-01.png')}}" style="height: 100vh; width: 100vw;object-fit: cover;"/></div>
            </div>
</div>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>
