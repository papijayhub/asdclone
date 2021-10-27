<?php
namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;

use App\Models\Book;

class BookControllerAPI extends Controller{

    public function index(){

        $books = Book::all();

        return response()->json(['books',$books]);
    }

}