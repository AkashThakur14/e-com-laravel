<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm</title>
   <!-- jQuery (should be included first) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

<!-- Popper.js (should be included before Bootstrap JS) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Bootstrap JS (should be included after jQuery and Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</head>
<body>
{{View::make('header')}}

@yield('content')

{{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .custom-row{
        width: 100%;
    }
    .custom-col{
        margin: auto;
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-product{
        height: 600px;
    }
    .slider-text{
        background: #6977bb66;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
       margin: 30px;
    }
</style>
</html>
