<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AllmagazinesController extends Controller
{
    //
    public function getAllMagazine()
    {
        $magazines = DB::table('magazines')->get();
        return view('allmagazines', compact('magazines'));
    }

    public function addMagazine()
    {
        return view('add-magazines');
    }
    public function addMagazineSubmit(Request $request)
    {
        
        DB::table('magazines')->insert([
            'Name' => $request->Name,
            'Magazines_Name' => $request->Magazines_Name,
            'Magazines_Id' => $request->Magazines_Id,
            'Category' => $request->Category,
            'Date' => $request->Date
        ]);

        return redirect('/magazines'); 
     
    }

    //delete function
    public function deleteMagazines($S_No)
    {
        DB::table('magazines')->where('S_No', $S_No)->delete();
        return redirect('magazines'); 
    }

    //update function
    public function getMagazinesByS_No($S_No)
    {
        $magazine = DB::table('magazines')->where('S_No', $S_No)->first();
        return view('edit-magazines', compact('magazine'));
    }

    public function UpdateMagazine(Request $request)
    {
        $S_No=$request->S_No;
        DB::table('magazines')->where('S_No', $S_No)->update([ 
            'Name' => $request->Name,
            'Magazines_Name' => $request->Magazines_Name,
            'Magazines_Id' => $request->Magazines_Id,
            'Date' => $request->Date,
            'Category' => $request->Category

        ]);
        return redirect('/magazines');
    }
}
