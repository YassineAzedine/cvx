<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
class CvController extends Controller
{
    //lister les cvs
    public function index()
    {
        return view('home');
    }
    // Afficher le formulaire de creation de cv
    public function create()
    {
        return view('cvs.create');
    }
    // enregister un cv
    public function store(Request $request)
    {
        $cv = new Cv();
        $cv->titre = $request->input('titre');
        $cv->presentation= $request->input('presentation');
    $cv->save();

    }
    // permet de recuperer un cv puis de le mettre dans un le formulaire
    public function edit()
    {
        return view('home');
    }
    // permet de modifier un cv
    public function update()
    {
        return view('home');
    }
// permet d supprimer un cv
    public function destroy()
    {
        return view('home');
    }
    
}
