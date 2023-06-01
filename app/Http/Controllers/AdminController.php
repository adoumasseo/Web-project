<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function inscription()
    {
        $inscriptions = User::whereNull('matricule')->get();
        //dd($inscriptions);
        return view('admin.inscription' , ["inscriptions" => $inscriptions]);
    }
    public function bulletin()
    {
        return view('admin.bulletin-etudiant');
    }
    public function liste(Classe $classe)
    {
        $eleves = $classe->users()->get();
        return view('admin.liste-eleves' , ["eleves" => $eleves]);
    }
    public function delib()
    {
        return view('admin.delib');
    }
    public function notes()
    {
        $classes = Classe::all();
        return view('admin.notes' , ["classes" => $classes]);
    }
    public function prof()
    {
        return view('admin.prof');
    }

    // fonction a supprimer

    public function test()
    {
        dd(Classe::all());
    }
}
