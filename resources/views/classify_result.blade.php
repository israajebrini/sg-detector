<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="{{asset('css/result.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="hero-bg">
    <header>
        <h1><a href="main.html">Stress Granules detector</a></h1>
        <p>by Yakeen & Israa</p>

    </header>
</div>

<div class="middle">
    <div class="data-container">
        <a href="{{asset('data/imageData.csv')}}" class="btn"><i class="fa fa-download"></i> Download classified data </a>
    </div>
</div>
<div class="results">
    <div class="image-container">
        <img src="{{asset('images/markedImage.jpg')}}">
    </div>
</div>



</body>

</html>
