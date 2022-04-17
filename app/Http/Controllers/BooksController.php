<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BooksModel;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $books = BooksModel::all();
        // return view('/verticalnav1.bookslist')->with('books', $books);
        // return view('/verticalnav1.bookslist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $books = new BooksModel;
        // $books->Books_Name = $request->Books_Name;
        // $books->Authors_Name = $request->Authors_Name;
        // $books->Year = $request->Year;
        // $books->Category = $request->Category;
        // $books->Description = $request->Description;
        // $books->saved();
        // return redirect('books');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $S_NO
     * @return \Illuminate\Http\Response
     */
    public function destroy($S_NO)
    {
//         //
//         $books = BooksModel::find($S_NO);
//         $books ->delete();
//         return redirect('/books'); 
    }
}
