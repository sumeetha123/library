<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AllnewspapersController extends Controller
{
    //
    public function getAllNewspaper()
    {
        $newspapers = DB::table('newspapers')->get();
        return view('allnewspaper', compact('newspapers'));
    }


    public function addNewspaper()
    {
        return view('add-newspaper');
    }

    public function addNewspaperSubmit(Request $request)
    {
        
        DB::table('newspapers')->insert([
            'Name' => $request->Name,
            'Newspaper_Name' => $request->Newspaper_Name,
            'Reg_Id' => $request->Reg_Id,
            'Date' => $request->Date,
            'Category' => $request->Category
        ]);

        return redirect('/newspapers'); 
     
    }

    //update function
    public function getNewspaperByS_No($S_No)
    {
        $newspaper = DB::table('newspapers')->where('S_No', $S_No)->first();
        return view('edit-newspaper', compact('newspaper'));
    }

    public function UpdateNewspaper(Request $request)
    {
        $S_No=$request->S_No;
        DB::table('newspapers')->where('S_No', $S_No)->update([ 
            'Name' => $request->Name,
            'Newspaper_Name' => $request->Newspaper_Name,
            'Reg_Id' => $request->Reg_Id,
            'Date' => $request->Date,
            'Category' => $request->Category

        ]);
        return redirect('/newspapers');
    }


     //delete function
     public function deleteNewspapers($S_No)
     {
         DB::table('newspapers')->where('S_No', $S_No)->delete();
         return redirect('newspapers'); 
     }

  
}
