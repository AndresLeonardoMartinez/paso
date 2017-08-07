<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;
use Illuminate\Support\Facades\DB;


class mesaController extends Controller
{
    	
    public function nuevo (Request $request){
    	//$mesa = new Mesa;
    	Mesa::create(request()->all());

    	return redirect('/');
	}

	public function all (){
		$votos_unidadCiudadana4=Mesa::sum('UnidadCiudadana4');
		$votos_unidadCiudadana2=Mesa::sum('UnidadCiudadana2');
		$votos_Cambiemos=Mesa::sum('Cambiemos');
		$votos_Massa_Salaberry=Mesa::sum('Massa_salaberry');
		$votos_Massa_Literas=Mesa::sum('Massa_literas');
		$votos_Cumplir=Mesa::sum('Cumplir');
		$votos_Fit=Mesa::sum('FIT');
		$votos_MTS=Mesa::sum('MTS');
		$votos_UFP=Mesa::sum('UFP');
		$votos_Vamos=Mesa::sum('Vamos');
		$votos_tpba=Mesa::sum("tpba");
		$votos_PF=Mesa::sum('PartidoFederal');
		$votos_fsp=Mesa::sum("fsp");

		$votos_Validos=Mesa::sum('Validos');
		$votos_Blancos=Mesa::sum('Blancos');
		$votos_Nulos=Mesa::sum('Nulos');

		$arreglo=array(
			'UnidadCiudadana4' => $votos_unidadCiudadana4,
			'UnidadCiudadana2' => $votos_unidadCiudadana2,
			'Cambiemos' => $votos_Cambiemos,
			'Massa_salaberry' => $votos_Massa_Salaberry,
			"Massa_literas" => $votos_Massa_Literas,
			'Cumplir' => $votos_Cumplir,
			'FIT' => $votos_Fit,
			"MTS" => $votos_MTS,
			"UFP"=>$votos_UFP,
			"Vamos"=>$votos_Vamos,
			"tpba"=>$votos_tpba,
			"PartidoFederal"=>$votos_PF,
			"fps"=>$votos_fsp,

			'Validos' => $votos_Validos,
			'Blancos' => $votos_Blancos,
			'Nulos' => $votos_Nulos

			);

		return $arreglo;
		//return 'hola';
		//return $votos_unidadCiudadana;
}
}