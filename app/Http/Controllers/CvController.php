<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Http\Requests\CvRequest;


class CvController extends Controller
{
    //lister les cvs
    public function index()
    {
      $listcv = Cv::all();
      return view('cvs.index',['cvx'=>$listcv ]);
    }
    // Afficher le formulaire de creation de cv
    public function create()
        {
        return view('cvs.create');
    }
    // enregister un cv
    public function store(CvRequest $request)
    {
       $cv = new Cv();
       $cv -> titre = $request->input('titre');
       $cv -> presentation = $request->input('presentation');
       $cv ->save();
  return redirect('cvs');
    }
    // permet de recuperer un cv puis de le mettre dans un le formulaire
    public function edit($id)
    {
        $cvs = Cv::find($id);
        return view('cvs.edit',['cv'=>$cvs]);

    }
    // permet de modifier un cv
    public function update(CvRequest $request ,$id)
    {
        $cv = Cv::find($id);
        $cv -> titre = $request->input('titre');
        $cv -> presentation = $request->input('presentation');
        $cv ->save();
        return redirect('cvs');
    }
// permet d supprimer un cv
    public function destroy(CvRequest $request ,$id)


    {
        $cv = CV::find($id);
        $cv->delete();
        return redirect('cvs');
        
    }
    
}
