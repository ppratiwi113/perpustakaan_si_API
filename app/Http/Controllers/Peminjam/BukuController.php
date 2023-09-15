<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JSONResponse
     */
    public function __invoke(Request $request)
    {
                // Misalnya, Anda ingin mengambil daftar pengguna dan mengembalikannya dalam format JSON
                $buku = Buku::all();
                return response()->json($buku);
    }
}