<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\Vetos;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class VetoController extends Controller
{
    // Afficher le formulaire d'inscription
    public function createcompte()
    {
        $vetos = veto::orderBy('created_at','DESC')->get ();
        return view('PagesAdmin.Adminveto.Adminveto', [
            'vetos' => $vetos
        ]);
    }
    public function create(){
        return view('PagesAdmin.Adminveto.Adminveto');
    }


    // Traiter les données du formulaire d'inscription
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'numtel' => 'required|string|max:13',
            'nom_cabinet' => 'required|string|min:3',
            'heure_travail' => 'required|string',
            'frais_consultation' => 'required|numeric',
            'localisation' => 'required|string',
            'description' => 'required|string',
            'Image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]); 
         // Définir des messages de validation personnalisés
         $messages = [
            'required' => 'Le champ :attribute est requis.',
            'min' => 'Le champ :attribute doit avoir au moins :min caractères.',
            'image' => 'Le fichier :attribute doit être une image.',
            'max' => 'Le fichier :attribute ne doit pas dépasser :max kilo-octets.',
        ];

               // Insertion dans la BDD
               $veto = new Vetos();
               $veto->nom = $request->nom;
               $veto->prenom = $request->prenom;
               $veto->numtel = $request->numtel;
               $veto->nom_cabinet = $request->nom_cabinet;
               $veto->heure_travail = $request->heure_travail;
               $veto->frais_consultation = $request->frais_consultation;
               $veto->localisation = $request->localisation;
               $veto->description = $request->description;
        // Gérer l'upload de l'image si présent
       // Assurez-vous que $veto->image est un tableau avant de l'utiliser
if ($request->hasFile('Image')) {
    // Initialiser $veto->image comme un tableau si ce n'est pas déjà fait
    if ($request->hasFile('Image')) {
        $image = $request->file('Image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/Vetos'), $imageName);
        $veto->Image = $imageName;
    }
        
        $veto->save();

        return redirect()->route('veto.create')->with('success', 'Votre inscription a été soumise avec succès.');
    } }}

