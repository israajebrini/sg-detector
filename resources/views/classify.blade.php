<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classify</title>
    <link rel="stylesheet" href="{{asset('css/inner.css')}}">
</head>

<body>
<div class="hero-bg">
    <header>
        <h1><a href="route('/')">Stress Granules detector</a></h1>
        <p>by Yakeen & Israa</p>


    </header>
</div>

<div class="description">
    <h2>Classify</h2>
    <p1>In order to classify suspicted points list. Do as follow:</p1>
    <p2>Enter the image you want to classify and the Excel taple which includes
        the x,y coordinates of the points suspicted as SGs. then click "Classify"</p2>
    <p3>After classefing you'r image, we will circle the points that where classified as SGs and the image will pop
    </p3>
    <p4>And a taple of the coordinates of the suspicted points with zeroes for the points that are not SGs,
        and ones for the SGs will be converted.</p4>
</div>

<div class="TrainOrClassify">

    <form action="{{route('start_classify')}}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <div class="input">
                <label for="image">Import image here</label>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
            </div>
            <div class="input">
                <label for="data">Import data here</label>
                <input type="file" name="data" id="data" accept=".csv">
            </div>

        </fieldset>
        <div class="startButton">
            <button type="submit" class="startBtn">Start classifying</button>
        </div>
    </form>
</div>

</body>

</html>
