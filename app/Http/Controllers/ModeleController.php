<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;
use Illuminate\Support\Facades\DB;

class ModeleController extends Controller
{
    //
    public function index(Request $request){
        $rows = [];
        $modeles = [];

        $toDisplay = 2;

        $n_page = $request->input('page');

        DB::beginTransaction();
            $rows = DB::select('select count(*) from modele');
            $modeles = DB::select('select * from modele order by id asc limit ? offset ?', [$toDisplay,$n_page*$toDisplay]);
        DB::commit();


        return view ('entity.form', ['data'=>array(
            'count'=>$rows[0]->count/$toDisplay
            //'modeles'=>$modeles
        )]);
    }

    //fetch paginate data for modal modele

    public function getModele(Request $request){
        $rows = [];
        $modeles = [];

        $toDisplay = 3;

        $n_page = $request->input('page');

        DB::beginTransaction();
            $rows = DB::select('select count(*) from modele');
            $modeles = DB::select('select * from modele order by id asc limit ? offset ?', [$toDisplay,$n_page*$toDisplay]);
        DB::commit();


        return ['data'=>array(
            'count'=>$rows[0]->count/$toDisplay,
            'modeles'=>$modeles
        )];
    }
}
