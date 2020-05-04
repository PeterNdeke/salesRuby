<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Author;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books  = Book::orderBy('id', 'DESC')->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author = Author::all();
        return view('books.add', compact('author'));
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
        $this->validate($request,[
            'author_name' => 'required',
            'book_title'   => 'required',
            'no_of_pages'  => 'required'

        ]);

        $model = new Book();
        $model->author_id = $request->author_name;
        $model->book_title = $request->book_title;
        $model->booK_no_pages = $request->no_of_pages;
        $model->save();
        return redirect('/books')->with([
            'flash_message' => 'Book Created Successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)

    {
        $book = Book::find($book->id);
        $author = Author::all();

        return view('books.edit', compact('book','author'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
        $this->validate($request,[
            'author_name' => 'required',
            'book_title'   => 'required',
            'no_of_pages'  => 'required'

        ]);

        $model = Book::findOrFail($book->id);

        $model->author_id = $request->author_name;
        $model->book_title = $request->book_title;
        $model->booK_no_pages = $request->no_of_pages;
        $model->update();

        return redirect('/books')->with([
            'flash_message' => 'Book Updated Succcesfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
