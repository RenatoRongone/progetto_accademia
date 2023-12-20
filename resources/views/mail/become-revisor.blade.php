<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-start py-5">
            <div class="col-12 col-md-6 flex-column align-items-center">
                <img src="media/logo/logo_black.png" alt="logo Presto.it" />
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <h5 class="textMyBlack pb-1">{{ Auth::user()->name }}</h5>
                <h5 class="textMyBlack pb-1">{{ Auth::user()->surname }}</h5>
                <h5 class="textMyBlack pb-1">{{ Auth::user()->gender }}</h5>
                <h5 class="textMyBlack pb-3">{{ Auth::user()->birth }}</h5>
                <h5 class="textMyBlack pb-1">{{ Auth::user()->telephone }}</h5>
                <h5 class="textMyBlack pb-3">{{ Auth::user()->email }}</h5>
                <h5 class="textMyBlack">{{ Auth::user()->inquiry }}</h5>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-12 col-md-6">
                <!-- Buttons for mail revisor (check CSS class names for revisor buttons) -->
                <a href="{{route('make_revisor')}}" class="text-decoration-none btn btnRevisorApprove d-inline">Rendi Revisor</a>
                <a href="{{route('remove_revisor')}}" class="text-decoration-none btn btnRevisorReject d-inline">Rimuovi Revisor</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</body>
</html>