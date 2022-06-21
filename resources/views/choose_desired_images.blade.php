<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@269&display=swap');
        body {
            background-color: black;
            font-family: 'Montserrat', sans-serif;
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
            /* background-color: hsl(187, 47%, 46%); */
            background: center  url(../images/800wm.jpeg);
            color:white;
            text-align: center;
            padding-bottom: 2em;

        }
        header{
            padding: 0.5em  ;
            font-size: larger;
        }
        .hero-bg a{
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* .hero-bg div {
            margin: 3 3em 3em 3em ;
        } */
        .description {
            margin: 3em 3em 3em 3em ;
            text-align: center;

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
        /* .train .lables{
            margin: 0em 20em 0em 10em;
            text-align: center;
        } */

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
        .images-container{
            display: flex;
            flex-direction: row;
        }

    </style>
</head>

<body>
<div class="hero-bg">
    <header>
        <h1><a href="main.html">Stress Granules detector</a></h1>
        <p>by Yakeen & Israa</p>

    </header>
</div>

<div class="description">
    <h2>click the images in which appears the SGs</h2>
</div>
<div class="startButton">
    <div class="images-container">
{{--        @foreach($img_arr as $img)--}}
{{--        <div class="img-container">--}}
{{--            <img src="{{asset($img)}}">--}}
{{--        </div>--}}
{{--         @endfor--}}
    </div>

        <ul>
            <a href="algorithmsResults.html">Finished</a>
        </ul>

</div>

</body>

</html>
