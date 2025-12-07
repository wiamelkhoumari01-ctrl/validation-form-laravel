<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicevalidcontroller extends Controller
{
    public function validation(Request $req)
    {

        // Validation
        $req->validate([
            "cin" => ["required", "min:5"],
            "nom" => ["required", "between:3,20"],
            "prenom" => ["required", "between:3,15"],
            "email" => ["required", "email"],
            "mdp" => ["required", "min:5", "confirmed"],
            "age" => ["required", "integer", "between:18,30"],
            "date" => ["required", "date", "after:today +3 days", "before:today +10 days"],
            'cv' => ['required','file', 'mimes:pdf,docx', 'max:100'],
            "photo" => ['required','file', 'mimes:jpeg,png', 'max:102400'],
        ]);

        // Récupération des fichiers
        $cv = $req->file('cv');
        $photo = $req->file('photo');

        $cin = $req->cin;
        $nom = $req->nom;
        $prenom = $req->prenom;


        // Infos avant déplacement
        $cvType = $cv->getClientMimeType();
        $cvSize = $cv->getSize();

        $photoType = $photo->getClientMimeType();
        $photoSize = $photo->getSize();


        // Noms des fichiers
        $cvName = "cv_{$cin}_{$nom}_{$prenom}." . $cv->getClientOriginalExtension();
        $photoName = "photo_{$cin}_{$nom}_{$prenom}." . $photo->getClientOriginalExtension();


        // Déplacement des fichiers
        $destination = base_path('storage/app/documents');

        if (!file_exists($destination)) {
            mkdir($destination, 0777, true);
        }

        $cv->move($destination, $cvName);
        $photo->move($destination, $photoName);

        
        return view('afficheexercice', [
            'cin' => $cin,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $req->email,
            'password' => $req->mdp,
            'age' => $req->age,
            'date_entretien' => $req->date,

            'cv_name' => $cvName,
            'cv_type' => $cvType,
            'cv_size' => $cvSize,

            'photo_name' => $photoName,
            'photo_type' => $photoType,
            'photo_size' => $photoSize,
        ]);
    }
}
