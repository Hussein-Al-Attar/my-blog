<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @include('css.welcome')
    </head>
    <body >
        <div >
            @if (Route::has('login'))
                <div class="nav">
                    @auth
                        <a class="item" href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                        <a class="item" href="{{ route('login') }}" >Log in</a>

                        @if (Route::has('register'))
                            <a class="item" href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="box">
            <div class="container">
              <div class="title">القانون مؤلف</div>
              <div class="content">
                يتمتع بحماية هذا القانون مؤلفو المصنفات المبتكرة في الآداب والفنون
                والعلوم اياً كان نوع هذه المصنفات او طريقة التعبير عنها او اهميتها
                والغرض من تصنيفها.
              </div>
            </div>
            <div class="container">
              <div class="title">القانون مؤلف</div>
              <div class="content">
                يتمتع بحماية هذا القانون مؤلفو المصنفات المبتكرة في الآداب والفنون
                والعلوم اياً كان نوع هذه المصنفات او طريقة التعبير عنها او اهميتها
                والغرض من تصنيفها.
              </div>
            </div>

            <div class="container">
              <div class="title">القانون مؤلف</div>
              <div class="content">
                يتمتع بحماية هذا القانون مؤلفو المصنفات المبتكرة في الآداب والفنون
                والعلوم اياً كان نوع هذه المصنفات او طريقة التعبير عنها او اهميتها
                والغرض من تصنيفها.
              </div>
            </div>
            <div class=" container">
              <div class="title">القانون مؤلف</div>
              <div class="content">
                يتمتع بحماية هذا القانون مؤلفو المصنفات المبتكرة في الآداب والفنون
                والعلوم اياً كان نوع هذه المصنفات او طريقة التعبير عنها او اهميتها
                والغرض من تصنيفها.
              </div>
            </div>
          </div>
    </body>
</html>
