<?php

namespace App\Http\Controllers;

use App\Models\ANNONCE;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    //

    public function getAll() {
        return ANNONCE::all();
    }

    public function getAnnonceByID(ANNONCE $annonce) {
        return $annonce;
    }

    public function getAllValidated() {
        return ANNONCE::where('ETAT',2)->get();
    }

    public function search(Request $request) {
        $request->validate([
            'search' => 'required | string',
        ]);

        return ANNONCE::where('NOM', 'like', '%' . $request->search . '%')->get();
    }

    public function create(Request $request) {

        $request->validate([
            'id_user' => 'required | numeric',
            'type' => 'required | string',
            'nom' => 'required | string',
            'localisation' => 'required | string',
            'description' => 'required | string',
            'nb_personne' => 'required | numeric',
            'price' => 'required | numeric',
            'date_debut' => 'required | date',
            'date_fin' => 'required | date',
        ]);
        $lastAnnonce = ANNONCE::orderBy('ID_ANNONCE','desc')->first();

        $annonce = new ANNONCE();
        $annonce->ID_USER = $request->id_user;
        $annonce->Type = $request->type;
        $annonce->NOM = $request->nom;
        $annonce->LOCALISATION = $request->localisation;
        $annonce->DESCRIPTION = $request->description;
        $annonce->NB_PERSONNE = $request->nb_personne;
        $annonce->PRIX = $request->price;
        $annonce->DATE_DEBUT_ANNONCE = $request->date_debut;
        $annonce->ID_ANNONCE = $lastAnnonce->ID_ANNONCE +1;
        $annonce->DATE_FIN_ANNONCE = $request->date_fin;
        $annonce->save();
        return true;
    }

    public function deleteById(ANNONCE $annonce) {
        return $annonce->delete();
    }

    public function updateById(ANNONCE $annonce, Request $request) {
        $request->validate([
            'id_user' => 'numeric',
            'type' => 'string',
            'nom' => 'string',
            'localisation' => 'string',
            'description' => 'string',
            'nb_personne' => 'numeric',
            'price' => 'numeric',
            'date_debut' => 'date',
            'date_fin' => 'date',
        ]);

        if (isset($request->id_user)) {
            $annonce->ID_USER = $request->id_user;
        }

        if (isset($request->type)) {
            $annonce->Type = $request->type;
        }

        if (isset($request->nom)) {
            $annonce->NOM = $request->nom;
        }

        if (isset($request->localisation)) {
            $annonce->LOCALISATION = $request->localisation;
        }

        if (isset($request->description)) {
            $annonce->DESCRIPTION = $request->description;
        }

        if (isset($request->nb_personne)) {
            $annonce->NB_PERSONNE = $request->nb_personne;
        }

        if (isset($request->price)) {
            $annonce->PRIX = $request->price;
        }

        if (isset($request->date_debut)) {
            $annonce->DATE_DEBUT_ANNONCE = $request->date_debut;
        }

        if (isset($request->date_fin)) {
            $annonce->DATE_FIN_ANNONCE = $request->date_fin;
        }
        $annonce->save();

        return true;
    }


}
