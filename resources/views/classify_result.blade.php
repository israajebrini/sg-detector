<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="{{asset('css/result.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .num-of-sgs{
            padding-bottom: 5px;

        }
        .middle{
            display: flex;
            justify-content: center;

        }
    </style>

</head>

<body>
<div class="hero-bg">
    <header>
        <h1><a href="{{route('home')}}">Stress Granules detector</a></h1>
        <p>by Yakeen & Israa</p>

    </header>
</div>

<div class="middle">
    <div class="row num-of-sgs">
        <h3>Found: {{$num_of_sgs}} SGs in you'r image.</h3>
    </div>
    <div class="row data-container">
        <a href="{{asset('images/imageData.csv')}}" class="btn" download><i class="fa fa-download"></i> Download classified data </a>
    </div>
</div>
<div class="results">
    <div class="image-container">
        <img src="{{asset('images/markedImage.jpg')}}" style="width: 50% ; border: 20px solid #4CAF50">
    </div>
</div>



</body>

</html>
