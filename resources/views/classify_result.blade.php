<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="{{asset('css/result.css')}}">
</head>

<body>
<div class="hero-bg">
    <header>
        <h1><a href="main.html">Stress Granules detector</a></h1>
        <p>by Yakeen & Israa</p>

    </header>
</div>

<form class="description" action="">
{{--    <h2>Found: {{numOfSGs}} SGs in you'r image.</h2>--}}
</form>
<div class="results">
    <div class="image-container">
        <img src="{{asset('images/markedImage.jpg')}}">
    </div>
</div>



</body>

</html>
