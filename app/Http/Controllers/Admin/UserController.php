<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Sesuaikan dengan model pengguna Anda

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        // Misalnya, Anda ingin mengambil daftar pengguna dan mengembalikannya dalam format JSON
        $user = User::all();
        return response()->json(['user' => $user]);
    }
}