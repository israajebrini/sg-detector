<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classify algorithm</title>
    <link rel="stylesheet" href="{{asset('css/inner.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.css" integrity="sha512-+VDbDxc9zesADd49pfvz7CgsOl2xREI/7gnzcdyA9XjuTxLXrdpuz21VVIqc5HPfZji2CypSbxx1lgD7BgBK5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
{{--    <div class="image-container">--}}
{{--        <img id="image" src="{{ url('storage/'.$image->path) }}"  style="display: block;max-width: 100% ; border: 20px solid #4CAF50">--}}
{{--    </div>--}}
{{--    <button id="send" >Send</button>--}}

    <input type="file" name="image" id="image" onchange="readURL(this);"/>
    <div class="image_container">
        <img id="blah" src="#" alt="your image" />
    </div>
    <div id="cropped_result"></div>        // Cropped image to display (only if u want)
    <button id="crop_button">Crop</button> // Will trigger crop event

{{--    <form action="{{route('save_image')}}" method="post" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <fieldset style="display: flex;--}}
{{--            justify-content: center;--}}
{{--            border: solid 2px #4CAF50">--}}
{{--            <div class="input">--}}
{{--                <label style="padding-bottom: 40px;" for="image">upload your image:</label>--}}
{{--                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">--}}
{{--            </div>--}}
{{--        </fieldset>--}}
{{--        <div class="startButton">--}}
{{--            <button type="submit" class="startBtn">Upload</button>--}}
{{--        </div>--}}
{{--    </form>--}}
</div>

</body>
<script src="https://unpkg.com/jquery@3/dist/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap@4/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.js" integrity="sha512-ZK6m9vADamSl5fxBPtXw6ho6A4TuX89HUbcfvxa2v2NYNT/7l8yFGJ3JlXyMN4hlNbz0il4k6DvqbIW5CCwqkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result)
            };
            reader.readAsDataURL(input.files[0]);
            setTimeout(initCropper, 1000);
        }
    }
    function initCropper(){
        var image = document.getElementById('blah');
        var cropper = new Cropper(image, {
            aspectRatio: 1 / 1,
            crop: function(e) {
                console.log(e.detail.x);
                console.log(e.detail.y);
            }
        });

        // On crop button clicked
        document.getElementById('crop_button').addEventListener('click', function(){
            var imgurl =  cropper.getCroppedCanvas().toDataURL();
            var img = document.createElement("img");
            img.src = imgurl;
            document.getElementById("cropped_result").appendChild(img);



                cropper.getCroppedCanvas().toBlob(function (blob) {
                      var formData = new FormData();
                      formData.append('croppedImage', blob);
                      // Use `jQuery.ajax` method
                      $.ajax('http://206.81.20.227/posts', {
                        method: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function () {
                          console.log('Upload success');
                        },
                        error: function () {
                          console.log('Upload error');
                        }
                      });
                });

        })
    }
    // window.addEventListener('DOMContentLoaded', function () {
    //     var image = document.getElementById('image');
    //     var cropper = new Cropper(image, {
    //         aspectRatio: 1,
    //         viewMode: 3,
    //     });
    //     if (cropper) {
    //         canvas = cropper.getCroppedCanvas({
    //             width: 160,
    //             height: 160,
    //         });
    //
    //     }
    //
    //     document.getElementById('send').addEventListener('click', function () {
    //         initialAvatarURL = avatar.src;
    //         avatar.src = canvas.toDataURL();
    //
    //         canvas.toBlob(function (blob) {
    //             var formData = new FormData();
    //
    //             formData.append('avatar', blob, 'avatar.jpg');
    //             $.ajax('http://206.81.20.227/posts', {
    //                 method: 'POST',
    //                 data: formData,
    //                 processData: false,
    //                 contentType: false,
    //
    //                 xhr: function () {
    //                     var xhr = new XMLHttpRequest();
    //
    //                     xhr.upload.onprogress = function (e) {
    //                         var percent = '0';
    //                         var percentage = '0%';
    //
    //                         if (e.lengthComputable) {
    //                             percent = Math.round((e.loaded / e.total) * 100);
    //                             percentage = percent + '%';
    //                             $progressBar.width(percentage).attr('aria-valuenow', percent).text(percentage);
    //                         }
    //                     };
    //
    //                     return xhr;
    //                 },
    //
    //                 success: function () {
    //                     $alert.show().addClass('alert-success').text('Upload success');
    //                 },
    //                 error: function () {
    //                     avatar.src = initialAvatarURL;
    //                     $alert.show().addClass('alert-warning').text('Upload error');
    //                 },
    //
    //                 complete: function () {
    //                     $progress.hide();
    //                 },
    //             });
    //         });
    //     });
    //
    //
    //     });
</script>
</html>

