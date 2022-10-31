<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classify algorithm</title>
    <link rel="stylesheet" href="{{asset('css/inner.css')}}">
</head>

<body>
<div class="hero-bg">
    <header>
        <h1><a href="{{route('home')}}">Stress Granules detector</a></h1>
        <p>by Yakeen & Israa</p>


    </header>
</div>

<div class="description">
    <h2>description + user guide </h2>
</div>

<div class="TrainOrClassify">

    <form action="{{route('save_image')}}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset style="display: flex;
            justify-content: center;
            border: solid 2px #4CAF50">
            <div class="input">
                <label style="padding-bottom: 40px;" for="image">upload your image:</label>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
            </div>
        </fieldset>
        <div class="startButton">
            <button type="submit" class="startBtn">Upload</button>
        </div>
    </form>
</div>

</body>

</html>

