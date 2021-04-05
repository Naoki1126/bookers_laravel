<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function welcome()
    {
        return view('book/welcome');
    }

    public function store(Request $request)
    {
        \Debugbar::info($request);
        $book = new Book();
        $book->title = $request->title;
        $book->body = $request->body;
        $book->save();

        return redirect("/book");
    }

    public function index()
    {
        $books = Book::all();
        $newbook = new Book();
        return view('book/index', compact('books','newbook'));
    }

    public function show($id)
    {
        $book = Book::find($id);
        \Debugbar::info($book);
        return view('book/show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        \Debugbar::info($book);
        return view('book/edit', compact('book'));
    }
    public function update( $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->body = $request->body;
        $book->save();

        return redirect("/book/{$id}");
    }

    public function destroy(Request $request)
    {
        $book = Book::find($request->id);
        $book->delete();
        return redirect("/book");
    }

}
