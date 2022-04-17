<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllbooksController extends Controller
{
    //
    public function getAllBook()
    {
        $books = DB::table('books')->get();
        return view('/verticalnav1.bookslist', compact('books'));
    }

    public function addBook()
    {
        return view('add-book');
    }
    public function addBookSubmit(Request $request)
    {
        
        DB::table('books')->insert([
            'Books_Name' => $request->Books_Name,
            'Authors_Name' => $request->Authors_Name,
            'Year' => $request->Year,
            'Category' => $request->Category,
            'Description' => $request->Description

        ]);

        return redirect('/books'); 
    
    }



    public function getBookByS_No($S_No)
    {
        $book = DB::table('books')->where('S_No', $S_No)->first();
        return view('edit-book', compact('book'));
    }


    // public function getBookByS_No_POST($S_No)
    // {
    //     return 'post request';
    // }

    public function UpdateBook(Request $request)
    {
        $S_No=$request->S_No;
        DB::table('books')->where('S_No', $S_No)->update([ 
            'Books_Name' => $request->Books_Name,
            'Authors_Name' => $request->Authors_Name,
            'Year' => $request->Year,
            'Category' => $request->Category,
            'Description' => $request->Description
        ]);
        return redirect('/books');
    }


    public function deleteBook($S_No)
    {
        DB::table('books')->where('S_No', $S_No)->delete();
        return redirect('books');
    }

}

