<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Offre;

class offreController extends Controller
{
    public function index(){
        /*$users = DB::table('Offres')->get();
        return view('listCards', ['users' => $users]);*/

        $contacts = Offre::all();
        return view('index', compact('contacts'));
    }
}
