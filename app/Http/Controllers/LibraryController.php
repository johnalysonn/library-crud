<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index(){
        $books = Book::all();

        return view('home', ['books' => $books]);
    }
    public function create(){
        return view('book/formCreateBook');
    }
    public function store(Request $request, Book $book){
        $book -> title = $request -> title;
        $book -> author = $request -> author;

        $book -> save();

        return redirect() -> route('home');
    }
    public function destroy($id){
        $book = Book::findOrFail($id);
        $book -> delete();

        return redirect()->route('home');
    }
    public function edit($id){
        $book = Book::findOrFail($id);

        return view('book/formUpdateBook', ['book' => $book]);
    }
    public function update($id, Request $request){
        $book = Book::findOrFail($id);

        $book -> title = $request -> title;
        $book -> author = $request -> author;

        $book -> update();
        
        return redirect()->route('home');
    }
}
