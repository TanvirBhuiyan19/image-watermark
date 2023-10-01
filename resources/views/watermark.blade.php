<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <style>
        .animate-charcter {
            /* text-transform: uppercase; */
            background-image: linear-gradient(-225deg,
                    #231557 0%,
                    #44107a 29%,
                    #ff1361 67%,
                    #fff800 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
            /* display: inline-block; */
            /* font-size: 190px; */
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }
    </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>

<body style="background-color: #ebebeb;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h2 style=" margin-top: 180px; text-align:center;" class="animate-charcter">Upload upto 20,000 images.
                        <span style="color: red;">Have fun!!</span>
                    </h2>
                    <div class="card-body" style="margin-top: 20px; border: 1px solid grey; padding: 50px; background-color: #fcfffa;">
                        <form action="{{ url('post-watermark') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" accept="image/*" name="image[]" multiple>
                            <br>
                            {{-- <button type="submit" class="btn btn-success">submit</button> --}}
                            <input type="submit" value="submit" class="btn btn-success">
                            <br>
                            <h3 id="hide-buttons" style="display: none; color:red;">You are only allowed to upload a maximum of 3 files!</h3>
                        </form>
                        {{-- <script>
                            var hideBtn = document.getElementById("hide-buttons");
                            $(function(){
                               $("input[type = 'submit']").click(function(){
                                  var $fileUpload = $("input[type='file']");
                                  if (parseInt($fileUpload.get(0).files.length) > 20000){
                                     alert("You are only allowed to upload a maximum of 3 files");
                                     hideBtn.style.display="block";
                                  }
                               });
                            });
                         </script> --}}
                    </div>
                </div>
                <small>Developed with ❤️ By - Tanvir Bhuiyan </small>
            </div>

        </div>
    </div>
</body>

</html>
