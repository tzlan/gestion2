<?php

namespace App\Http\Controllers;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;


class ControllerOffre extends Controller
{
    public function lister_offres(){
        $offres = Offre::all();//Fonction qui liste les offres
        return view('offres/lister_offres',[
            'offres'=> $offres,
        ]);
    }
    public function formulaire(){
        return view('offres/inscription_offres');
    }
    public function inscription_offre(){


        request()->validate([
            'id' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'start' => ['required'],
            'end' => ['required'],


        ]);

        $offre = Offre::create([
            'id' => request('id'),
            'name' => request('name'),
            'description' => request('description'),
            'start' => request('start'),
            'end' => request('end'),


        ]);

        return view('prise_en_compte_offre_creation');

    }
}