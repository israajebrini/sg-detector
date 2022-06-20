<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
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
        .startButton a {
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
        .TrainOrClassify .input{
            margin: 3em 10em 0em 16em;
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
        .results .input{
            margin: 3em 10em 0em 16em;
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
    <h2>Train SVM algorithm</h2>
    <p1>In order to train the SVM algorithm. Do as follow:</p1>
    <p2>Enter 10 images or more with one Excel taple for each image includes
        the x,y coordinates of the points suspicted as SGs. then click "Start training"</p2>
    <p3>An image will pop, if the image includes a SG click "SG", if not click "Not an SG"</p3>
    <p4>After classefing the images, a network will be trained and then used by you to classify other images you
        import.</p4>
</div>

<div class="TrainOrClassify">
{{--    <form action="{{route('start_classify')}}"--}}
{{--          class="dropzone"--}}
{{--          id="my-awesome-dropzone" method="post" >--}}
{{--        @csrf--}}
{{--        <fieldset style="display: flex;--}}
{{--            justify-content: center;--}}
{{--            border: solid 2px #4CAF50">--}}
{{--            <div class="input">--}}
{{--                <label style="padding-bottom: 40px;" for="image">Import image here</label>--}}
{{--                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">--}}
{{--            </div>--}}
{{--            <div class="input">--}}
{{--                <label  style="padding-bottom: 40px;" for="data">Import data here</label>--}}
{{--                <input type="file" name="data" id="data" accept=".csv">--}}
{{--            </div>--}}
{{--        </fieldset>--}}
{{--        <div class="startButton">--}}
{{--            <button type="submit" class="startBtn">Start training</button>--}}
{{--        </div>--}}
{{--    </form>--}}
    <form action="{{route('start_training')}}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset style="display: flex;
            justify-content: center;
            border: solid 2px #4CAF50">
            <div class="input">
                <label style="padding-bottom: 40px;" for="image">Import images here</label>
                <input type="file" name="images" id="images" accept=".jpg, .jpeg, .png" multiple>
            </div>
            <div class="input">
                <label  style="padding-bottom: 40px;" for="data">Import datas here</label>
                <input type="file" name="datas" id="datas" accept=".csv" multiple>
            </div>
        </fieldset>
        <div class="startButton">
            <button type="submit" class="startBtn">Start training</button>
        </div>
    </form>
</div>
</body>

</html>
