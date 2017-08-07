  var  votos_Quiroga ;
  var  votos_Lopez  ;
  var  votos_Cambiemos;
  var  votos_Massa_Literas;
  var  votos_Massa_salaberry;
  var  votos_Cumplir ;
  var  votos_FIT;
  var  votos_MTS;
  var  votos_UFP;
  var  votos_Vamos;
   var votos_tpba;
   var votos_pf;
    var votos_fps;

   
var votos_Validos;
var votos_nulos ;
var votos_blancos;

$(function() {
    $.ajax({
        url: "/mesas/all",
        context: document.body,
        success: function (data) {
            pedido = data;
            parsearMesas(data);
        }
    });
});

function parsearMesas(data){
	votos_Quiroga = data['UnidadCiudadana2'];
    votos_Lopez  = data['UnidadCiudadana4'];
	votos_Cambiemos = data['Cambiemos'];
	votos_Massa_Literas = data['Massa_literas'];
    votos_Massa_salaberry = data['Massa_salaberry'];
	votos_Cumplir = data['Cumplir'];
	votos_FIT = data['FIT'];
    votos_MTS=data["MTS"];
    votos_UFP=data["UFP"];
    votos_Vamos=data["Vamos"];
    votos_tpba=data["tpba"];
    votos_pf=["PartidoFederal"];
    votos_fps=["fps"];

	votos_Validos = data['validos'];
	votos_nulos = data['nulos'];
	votos_blancos = data['blancos'];
	grafico();
}

function grafico(){

new Chart(document.getElementById("myChart"), {
    type: 'bar',
    data: {
      labels: ["Quiroga", "Lopez", "Cambiemos", "Literas", "Salaberry","Feliu","FIT","Vamos"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f"],
          data: [votos_Quiroga,votos_Lopez,votos_Cambiemos,votos_Massa_Literas,votos_Massa_salaberry,
          votos_Cumplir,votos_FIT,votos_Vamos]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Votos'
      }
    }
}); 

}


