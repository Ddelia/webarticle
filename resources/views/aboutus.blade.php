<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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

            .top-left{
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-left links">
                    @auth
                    @else
                        <a href="{{ route('welcome') }}">Home</a>
                    @endauth
                </div>
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    About Us
                </div>

                <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada proin libero nunc consequat. Donec enim diam vulputate ut pharetra sit amet. Accumsan lacus vel facilisis volutpat est velit egestas dui. Semper quis lectus nulla at volutpat diam ut venenatis tellus. Euismod elementum nisi quis eleifend. Massa sed elementum tempus egestas sed sed risus pretium. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat est. Velit aliquet sagittis id consectetur. Fringilla ut morbi tincidunt augue interdum. Quam viverra orci sagittis eu volutpat odio. Risus viverra adipiscing at in tellus integer feugiat. Scelerisque mauris pellentesque pulvinar pellentesque. Quis risus sed vulputate odio ut enim blandit. Feugiat scelerisque varius morbi enim.

Pharetra massa massa ultricies mi quis hendrerit dolor. Suspendisse potenti nullam ac tortor vitae purus. Elit sed vulputate mi sit amet mauris commodo quis imperdiet. Magna eget est lorem ipsum dolor sit amet consectetur. Commodo viverra maecenas accumsan lacus vel facilisis volutpat est. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Ultrices eros in cursus turpis massa tincidunt. Sociis natoque penatibus et magnis dis. Risus feugiat in ante metus dictum. Tincidunt tortor aliquam nulla facilisi cras fermentum. Quisque id diam vel quam. Pretium nibh ipsum consequat nisl vel pretium. Ut morbi tincidunt augue interdum velit euismod in pellentesque. Mauris pharetra et ultrices neque ornare aenean euismod elementum nisi. Tellus integer feugiat scelerisque varius morbi enim nunc faucibus.

Sit amet mauris commodo quis imperdiet massa. Mauris augue neque gravida in fermentum et. Gravida arcu ac tortor dignissim. Fames ac turpis egestas sed tempus urna et. Blandit massa enim nec dui. Non blandit massa enim nec. Ultrices neque ornare aenean euismod elementum nisi quis. Lacus suspendisse faucibus interdum posuere. Sed ullamcorper morbi tincidunt ornare massa eget. Natoque penatibus et magnis dis. Ipsum nunc aliquet bibendum enim. Elementum tempus egestas sed sed risus pretium quam vulputate. Vel orci porta non pulvinar.

Gravida cum sociis natoque penatibus et magnis dis parturient. Congue mauris rhoncus aenean vel elit scelerisque mauris. Eu nisl nunc mi ipsum faucibus vitae aliquet nec. Curabitur vitae nunc sed velit dignissim sodales ut eu sem. Augue mauris augue neque gravida in fermentum. Sollicitudin tempor id eu nisl nunc mi ipsum. Volutpat consequat mauris nunc congue nisi vitae suscipit. Dictum fusce ut placerat orci nulla. Fermentum dui faucibus in ornare quam viverra. Quis auctor elit sed vulputate mi sit amet mauris commodo. Mauris rhoncus aenean vel elit. Vestibulum mattis ullamcorper velit sed.

Fringilla ut morbi tincidunt augue. Fermentum iaculis eu non diam phasellus vestibulum lorem sed. Donec ac odio tempor orci dapibus. Enim praesent elementum facilisis leo vel fringilla. Est placerat in egestas erat imperdiet sed euismod nisi. Id semper risus in hendrerit gravida rutrum quisque non tellus. Habitasse platea dictumst vestibulum rhoncus est pellentesque. Varius quam quisque id diam vel quam elementum pulvinar etiam. Sed faucibus turpis in eu mi. Adipiscing at in tellus integer feugiat. Et sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Vitae auctor eu augue ut lectus arcu. Eget mauris pharetra et ultrices neque ornare. Morbi tristique senectus et netus et malesuada fames ac.
                </div>
            </div>
        </div>
    </body>
</html>
