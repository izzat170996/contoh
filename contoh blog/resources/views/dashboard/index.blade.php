<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
<div class="container">

<div class="col-md-12">
    <div class="row ">
        <div class="col-md-4 ">

            <div class="card text-center bg-primary text-white ">
                <div class="card-header ">
                    Users
                </div>
                <div class="card-body" >
                    <p class="card-text">{{$nbusers}}</p>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="col-md-4 ">

            <div class="card text-center bg-success text-white ">
                <div class="card-header ">
                    Posts
                </div>
                <div class="card-body" >
                    <p class="card-text">{{$nbposts}}</p>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="col-md-4 ">

            <div class="card text-center bg-info text-white ">
                <div class="card-header ">
                    Categories
                </div>
                <div class="card-body" >
                    <p class="card-text">{{$nbcategory}}</p>
                </div>
            </div>
        </div>
        {{--  --}}
</div>

</div>
</body>
</html>

