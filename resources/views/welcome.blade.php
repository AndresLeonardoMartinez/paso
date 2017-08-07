<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css')}}">
        <script src="{{ asset('/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('/js/carga.js')}}"></script>

        <title>PASO</title>

    </head>
     

    <body>
        <div class="container">
            <div >
               <center><h1> PASO - Carga de datos</h1></center>
            </div>
            <form id="myform" method="POST" action="/cargar">
                {{csrf_field()}}
                <div class ="row">

                    <div class="form-group col-lg-6 col-md-6">
                        <label>Mesa</label>
                        <input type="number" class="form-control" id="Mesa" name="Mesa" placeholder="mesa">
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label>Escuela</label>
                        <input type="text"  class="form-control" id="Escuela" name="Escuela" placeholder="Escuela">
                    </div>
                </div>


                <div class ="row">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="form-group col-lg-3 col-md-3 " style="visibility: hidden;">
                        <label>Votos Validos</label>
                        <input type="number" class="form-control" id="Validos" name="Validos"  readonly value="0" ">
                    </div>
                    <div class="form-group col-lg-3 col-md-3">
                        <label>Votos Blancos</label>
                        <input type="number" class="form-control" id="Blancos" name="Blancos"  value="0">
                    </div>
                    <div class="form-group col-lg-3 col-md-3">
                        <label>Votos Nulos</label>
                        <input type="number" class="form-control" id="Nulos" name="Nulos" value="0">
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                </div>
                
                <div class ="row">


                <div class="form-group col-lg-3 col-md-3">
                    <img src="/img/uc1.png" alt="Unidad Ciudadana" height="120" width="220" class="col-lg-10 col-md-10">
                    <input type="number" class="form-control  col-lg-1 col-md-1" id=
                    "UnidadCiudadana4" name="UnidadCiudadana4" placeholder="votos" value="0">
                </div>

                 <div class="form-group col-lg-2 col-md-2">
                    <img src="/img/1pais_Salaberry.jpg" height="120" width="220" class="col-lg-10 col-md-10">
                    <input type="number" class="form-control  col-lg-1 col-md-1" id=
                    "Massa_salaberry" name="Massa_salaberry" placeholder="votos" value="0">
                </div>

                 <div class="form-group col-lg-3 col-md-3">
                        <img src="/img/uc2.png" alt="Unidad Ciudadana" height="120" width="220" class="col-lg-10 col-md-10">
                        <input type="number" class="form-control  col-lg-1 col-md-1" id=
                        "UnidadCiudadana2" name="UnidadCiudadana2" placeholder="votos" value="0">
                    </div>

                <div class="form-group col-lg-2 col-md-2">
                    <img src="/img/cumplir.gif" height="120" width="220" class="col-lg-10 col-md-10">
                    <input type="number" class="form-control  col-lg-1 col-md-1" id=
                    "Cumplir" name="Cumplir" placeholder="votos" value="0">
                </div>

                <div class="form-group col-lg-2 col-md-2">
                    <img src="/img/FIT.jpg" height="120" width="220" class="col-lg-10 col-md-10">
                    <input type="number" class="form-control  col-lg-1 col-md-1" id=
                    "FIT" name="FIT" placeholder="votos" value="0">
                </div>
                <div class ="row">
                    <div class="form-group col-lg-3 col-md-3">
                    <img src="/img/cambiemos.png" height="120" width="220" class="col-lg-10 col-md-10">
                    <input type="number" class="form-control  col-lg-1 col-md-1" id=
                    "Cambiemos" name="Cambiemos" placeholder="votos" value="0">
                </div>
                    <div class="form-group col-lg-2 col-md-2">
                        <img src="/img/mts.png"  height="120" width="220" class="col-lg-10 col-md-10">
                        <input type="number" class="form-control  col-lg-1 col-md-1" id=
                        "MTS" name="MTS" placeholder="votos" value="0">
                    </div>
                    <div class="form-group col-lg-3 col-md-3">
                        <img src="/img/UFP.jpg"  height="120" width="220" class="col-lg-10 col-md-10">
                        <input type="number" class="form-control  col-lg-1 col-md-1" id=
                        "UFP" name="UFP" placeholder="votos" value="0">
                    </div>
                    <div class="form-group col-lg-2 col-md-2">
                        <img src="/img/ayude.jpg"  height="120" width="220" class="col-lg-10 col-md-10">
                        <input type="number" class="form-control  col-lg-1 col-md-1" id=
                        "Vamos" name="Vamos" placeholder="votos" value="0">
                    </div>
                    
                    <div class="form-group col-lg-2 col-md-2">
                        <img src="/img/frente-socialista-y-popular.jpg" height="120" width="220" class="col-lg-10 col-md-10">
                        <input type="number" class="form-control  col-lg-1 col-md-1" id=
                        "fsp" name="fsp" placeholder="votos" value="0">
                    </div>
                </div>
                    
               
                </div> 
                <div class ="row">
                    <div class="form-group col-lg-3 col-md-3">
                            <img src="/img/tpba.jpg" height="120" width="220" class="col-lg-10 col-md-10">
                            <input type="number" class="form-control  col-lg-1 col-md-1" id=
                            "tpba" name="tpba" placeholder="votos" value="0">
                    </div>
                    <div class="form-group col-lg-3 col-md-3">
                            <img src="/img/partidoFederal.jpg" height="120" width="220" class="col-lg-10 col-md-10">
                            <input type="number" class="form-control  col-lg-1 col-md-1" id=
                            "PartidoFederal" name="PartidoFederal" placeholder="votos" value="0">
                    </div>
                    <div class="form-group col-lg-2 col-md-2">
                            <img src="/img/1pais_Literas.jpg" height="120" width="200" class="col-lg-10 col-md-10">
                            <input type="number" class="form-control  col-lg-1 col-md-1" id=
                            "Massa_literas" name="Massa_literas" placeholder="votos" value="0">
                    </div>
                    
                    <div class="col-lg-2 col-md-2">
                    <input class="btn btn-danger" style="margin-top:60px;" type="reset" value="Reset">

                    <button type="submit" class="btn btn-success" style="margin-top:60px;">Enviar</button>
                    </div>
                </div>
            </form>

                
        </div>
        
    </body>
</html>
