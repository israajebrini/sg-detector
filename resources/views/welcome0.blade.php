<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" > 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                background: center  url(../images/pg.png);
                font-family: 'Nunito', sans-serif;
                margin: 0;
                color: white;
                text-decoration: none;
            }
        a{
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .hero-bg{
            color:white;
            text-align: center;
            padding-bottom: 2em;

        }
        header{
            /* padding: 0.5em  ; */
            font-size: larger;
        }
        .hero-bg a{
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .description {
            margin: 3em 3em 3em 3em ;
            text-align: center;
            font-weight: bold;

        }
        .button {
            margin: 2em;
            /* box-sizing: ; */
        }
        .startButton{
            text-align: center;
            margin: 4em 0em 0em -2em;

        }
        .startBtn {
            color: rgb(67, 199, 85);
            text-decoration: none;
            font-weight: bold;
            font-size: 150%;
        }

        .TrainOrClassify a3{
            margin: 0em 0em 0em 21.5em ;
            padding-bottom: 6em;


        }
        .TrainOrClassify a4{
            margin: 0em 0em 0em 16.5em ;
            padding-bottom: 6em;

        }

        .TrainOrClassify a1{
            color: white;
            border: 2px solid #4CAF50; /* Green */
            margin: 0em 3em 0em 0em;
            border-radius: 4px;
            font-size: 24px;
            padding: 32px 32px;
        }
        .TrainOrClassify a2{
            color: white;
            border: 2px solid #4CAF50; /* Green */
            border-radius: 4px;
            font-size: 24px;
            padding: 32px 32px;
        }
        .choice{
            margin: 2em;
            font-size: 180%;
            text-align: center;

        }
        /* text inside the box - to be deleted when adding image and table */
        .choice a1{

            margin: 0em 10em 0em 0em ;
        }
        .choice a2{

            margin: 0em 0em 0em 0em ;
        }

        /* text desscrition of the boxes */
        .results a3{
            margin: 0em 0em 0em 25em ;
        }
        .results a4{
            margin: 0em 0em 0em 20em ;
            padding-bottom: 6em;

        }

        .results a1{
            border: 2px solid #4CAF50; /* Green */
            margin: 0em 3em 0em 0em;
            border-radius: 4px;
            font-size: 24px;
            padding: 32px 32px;
        }
        .results a2{
            border: 2px solid #4CAF50; /* Green */
            /* margin: 5em 6em ; */
            border-radius: 4px;
            font-size: 24px;
            padding: 32px 32px;
        }

        fieldset{
            display: flex !important;
            justify-content: center !important;
            border: solid 2px #4CAF50 !important;

        }

        .input{
            display: flex;
            flex-direction: column;
            margin: 40px;
        }
        </style>
    
        <!-- <link rel="stylesheet" href="{{asset('css/inner.css')}}"> -->

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
                        <a2><a href="{{route('data.collection')}}">Collect Data</a></a2>
                        <a2><a href="{{route('classifyByUser')}}">Classify By User</a></a2>

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
