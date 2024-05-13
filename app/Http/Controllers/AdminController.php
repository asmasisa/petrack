<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinaire;

class AdminController extends Controller
{
    // Afficher les demandes d'inscription en attente
    public function Adminveto()
    {
        return view('PagesAdmin.Adminveto.Adminveto');
    }
    public function createcompte()
    {
        $vetos = veto::orderBy('created_at','DESC')->get ();
        return view('PagesAdmin.Adminveto.Adminveto', [
            'vetos' => $vetos
        ]);
    }
   
 // AdminController.php

// Méthode pour approuver une inscription de vétérinaire
public function approve($id)
{
    $vetos = veto::findOrFail($id);
    // Ajoutez la logique pour marquer le vétérinaire comme approuvé
    $vetos->approved = true;
    $veto->save();

    return redirect()->back()->with('success', 'Inscription approuvée avec succès.');
}

// Méthode pour supprimer une inscription de vétérinaire
public function destroy($id)
{
    $vetos = veto::findOrFail($id);
    $vetos->delete();

    return redirect()->back()->with('success', 'Inscription supprimée avec succès.');
}

   
}

