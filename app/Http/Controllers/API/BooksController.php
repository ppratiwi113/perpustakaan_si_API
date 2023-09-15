<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function getAllBuku()
    {
        return response()->json([
            'message'=>'success',
            'data'   => Buku::all()
        ], 200);
    }

    // public function index()
    // {
    //     $buku = Buku::all();
    //     return response()->json(['data' => $buku]);
    // }
}