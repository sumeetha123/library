<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AllauthorsController extends Controller
{
    //
    public function getAllAuthor()
    {
        $authors = DB::table('authors')->get();
        return view('authorslist', compact('authors'));
    }

    public function addAuthor()
    {
        return view('add-author');
    }
    public function addAuthorSubmit(Request $request)
    {
        
        DB::table('authors')->insert([
            'Authors_Name' => $request->Authors_Name,
            'Books_Name' => $request->Books_Name,
            'Year' => $request->Year,
            'Category' => $request->Category,
            'Description' => $request->Description

        ]);

        return redirect('/authors');
    
    }


    public function deleteAuthor($S_No)
    {
        DB::table('authors')->where('S_No', $S_No)->delete();
        return redirect('authors');
    }


    public function getAuthorsByS_No($S_No)
    {
        $author = DB::table('authors')->where('S_No', $S_No)->first();
        return view('edit-author', compact('author'));
    }

    public function UpdateAuthor(Request $request)
    {
        $S_No=$request->S_No;
        DB::table('authors')->where('S_No', $S_No)->update([ 
            'Books_Name' => $request->Books_Name,
            'Authors_Name' => $request->Authors_Name,
            'Year' => $request->Year,
            'Category' => $request->Category,
            'Description' => $request->Description
        ]);
        return redirect('/authors');
    }
}
