<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YevgeniyaVentura</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 85vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }
            @media screen and (max-width: 1000px) {

                .content{
                    font-size: 50%;
                    height: 85vh;
                    margin-top:100px;
                }
            }

            .title {
                font-size: 70px;
            }
            @media screen and (max-width: 1000px) {

                .title{
                    font-size: 40px;
                    top: 110px;
                }
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .links__text{
               color: black;
            }
            @media screen and (max-width: 1000px) {

                .links__text{
                    font-size: 15px;
                    top: 110px;
                }
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/home') }}">Payment</a>
                        <a href="{{ url('/') }}">Contact</a>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    @else
                        <a href="{{ url('/home') }}">Payment</a>
                        <a href="{{ url('/') }}">Contact</a>
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Yevgeniya Ventura, Mental Health Counselor/Therapist, NCC
                </div>

                <div class="links">
                    <div class="links__text">
                        <p>Here are two things I think are important about therapy: </p> <p>
                                1)People can find relief  for symptoms like worry,loneliness, sadness, hopelessness, and craving; and </p> <p>
                                2) People can build psychological strength. Psychological strength allows people to have more fulfilling relationships, </p> <p>
                                use their capacities more effectively, and bring more flexibility and creativity to problems in living. </p> <p>
                        Psychological strength is developed over time by talking, examining the obstacles to talking, and using what happens in the session  </p> <p>
                                as a way to understand what goes on in the outside world. </p> <p>
                        I work with problems related to trauma, addictions, anxiety, depression, anger, and persistent problems in relating to others.  </p> <p>
                                I work with individuals, couples, and groups. I have specialized experience in working with partners/families of combat veterans and people in early recovery. </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
