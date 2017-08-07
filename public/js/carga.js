var votos_UnidadCiudadana ;
var votos_Cambiemos;
var votos_Massa ;
var votos_Cumplir ;
var votos_FIT ;
var votos_Validos;
var votos_nulos ;
var votos_blancos;


$( document ).ready(function() {

// console.log("hola");
// $("fsp").keyup(function() {
//     var value = $( this ).val();
// }).keyup();


//     $("#Validos").val(suma);

// });

$('#myform').submit(function() {
    var validos=0;
    validos+=parseInt($("#Massa_literas").val());
    validos+=parseInt($("#PartidoFederal").val());
    validos+=parseInt($("#tpba").val());
    validos+=parseInt($("#fsp").val());
    validos+=parseInt($("#Vamos").val());
    validos+=parseInt($("#UFP").val());
    validos+=parseInt($("#MTS").val());
    validos+=parseInt($("#Cambiemos").val());
    validos+=parseInt($("#FIT").val());
    validos+=parseInt($("#Cumplir").val());
    validos+=parseInt($("#UnidadCiudadana2").val());
    validos+=parseInt($("#Massa_salaberry").val());
    validos+=parseInt($("#UnidadCiudadana4").val());
    validos+=parseInt($("#Nulos").val());
    validos+=parseInt($("#Blancos").val());
    validos+=parseInt($("#fsp").val());
    console.log(validos);
    $("#Validos").val(validos);
    return true; // return false to cancel form action
});


});