<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Flash;
Use Response;
use App\Http\Controllers\Controller;

use App\Models\Book;

class BookControllerAPI extends Controller{

    //  public $succesStatus = 200;
    public function index(){

        $books = Book::all();
        
        // return response()->json(['books',$books]);
        
        if(count($books)> 0){
            return json_encode($books, 200);
            // return response()-json($books, $this->$succesStatus);
        }else{
            return json_encode(['Error' => 'There is no data on the database'], 404);
            // return response()-json(['Error' => 'There is no data on database'], 404);
        }
    }

}