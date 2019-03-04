<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Book;
class TestController extends Controller
{
    public function getdetails(){
        $author = Author::all()->toArray();
        $author_book = Book::find(2)->authors->toArray();
        print_r($author_book);
            
        
    }


}

