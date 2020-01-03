<?php

namespace App\Http\Controllers;

use App\Services\AesService;
use Illuminate\Http\Request;

class AesController extends Controller
{
    public function Decrypt(Request $request)
    {
        $code = $request['code'];
        $AesService = new AesService();
        $code = $AesService->decryption($code);
        return $code;
    }

    public function Encrypt(Request $request)
    {
        $code = $request['code'];
        $AesService = new AesService();
        $code = $AesService->encryption($code);
        return $code;
    }
}
