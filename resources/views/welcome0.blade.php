<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" > 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('css/inner.css')}}">

    </head>
    <body class="antialiased">
        <div class="hero-bg">
            <section class="top">
                <header>
                    <h1>Stress Granules detector</h1>
                    <p>by Yakeen & Israa</p>

                </header>
                <p1>In order to collect data from you're own images click "Collect Data".</p1>
                <p2>To classify a set of points click "Classify"</p2>
                <div class="choice">
                    <form action=""></form>
                    <nav>
                        <!-- <a1><a href="{{route('welcome')}}">Detect Stress Granules</a></a1> -->
                        <a1><a href="{{route('classify')}}">Classify</a></a1>
                        <!-- <a2><a href="{{route('data.collection')}}">Collect Data</a></a2> -->
                        <a2><a href="{{route('classifyByUser')}}">Collect Data</a></a2>

                    </nav>
                </div>
            </section>
        </div>
        <div class="description">
            <h2>About the site:</h2>
            <p>Recent researches have shown that stress granules' appearances rate, may have an effect on Parkinson's disease.
                In order to study this effect, images of brain cells were taken and uploaded to an application that gave a list of points, which are perceived as SG's by the application.
                However, the lists include approximatly 90% points that aren't SGs.
                This application takes those points and train a classification algorithm to classify them correctly as SGs or not.
                We aim to upgrade the app to classify more types of points. and to collect another types of data.</p>
        </div>
    </body>
</html>
