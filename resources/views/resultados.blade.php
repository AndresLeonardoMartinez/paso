<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css')}}">
        <script src="{{ asset('/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="{{ asset('/js/datos.js')}}"></script>
        <title>PASO</title>

    </head>
    <body>
        <div class="container">
            <div >
              <center> <h1> PASO - Resultados</h1></center>
            </div>
            <canvas id="myChart" width="300" height="150"></canvas>
            </div>
            

                
        </div>
        
    </body>
</html>
