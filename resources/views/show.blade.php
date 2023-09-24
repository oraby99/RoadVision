<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class=" w-50" >
                <img style="width: 50%" src="{{ $reports->imageDetected }}" />
            </div>
            <div class="w-50">
                <video style="width: 50%" width="200" height="300" controls>
                    <source src="{{ $reports->video }}" type="video/mp4">
                    <source src="{{ $reports->video }}" type="video/ogg">
                  Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</body>
</html>
    {{-- {{$reports->lat }}
    {{$reports->id}}
    {{$reports->lat}}
    {{$reports->long}}
    {{$reports->severityLevel}}
    {{$reports->request}}
    {{$reports->description}} --}}


