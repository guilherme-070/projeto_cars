<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modelo;
use App\Models\Marca;
use App\Models\Estado;
use App\Models\Color;
use App\Models\Carro;

class HomeController extends Controller
{
    public function graph(){

        $carro = Marca::with('modelo')->orderBy('name')->get();
        //$color= Color::with('color')->orderBy('name')->get();


           $data= [
            ["MARCA", "NÚMERO DE MODELOS"],
           ];
           $cont =1;
           foreach($carro as $item){
                $data[$cont] = [
                    $item->name, count($item->modelo)
                ];
                $cont++;
           }
           $data = json_encode($data);



           /*$datacolors= [
            ["MARCA", "NÚMERO DE MODELOS"],
           ];
           $cont =1;
           foreach($color as $item){
                $datacolors[$cont] = [
                    $item->name, count($item->carro)
                ];
                $cont++;
           }
           $datacolors = json_encode($datacolors);*/



        return view('home', compact(['data']));

    }
}
