<?php

namespace App\Services;

class AesService
{
    public function encryption($password)
    {
        $privateKey = "oPysK(2sp)yske#&";
        $iv = $privateKey;
        $data = $password;
        $str_padded = $data;
        if (strlen($str_padded) % 16) {
            $str_padded = str_pad($str_padded, strlen($str_padded) + 16 - strlen($str_padded) % 16, "\0");
        }
        $encrypted = openssl_encrypt($str_padded, 'aes-128-cbc', $privateKey, OPENSSL_NO_PADDING, $iv);
        $encrypted = bin2hex(base64_encode($encrypted));
        return $encrypted;
    }
    public function encryptionC($password)
    {
        $privateKey = "oPysK(2sp)yske#&";
        $iv = $privateKey;
        $data = $password;
        $str_padded = $data;
        if (strlen($str_padded) % 16) {
            $str_padded = str_pad($str_padded, strlen($str_padded) + 16 - strlen($str_padded) % 16, "\0");
        }
        $encrypted = openssl_encrypt($str_padded, 'aes-128-cbc', $privateKey, OPENSSL_NO_PADDING, $iv);
        $encrypted = bin2hex($encrypted);
        return $encrypted;
    }

    public function decryption($str)
    {
        $privateKey = "oPysK(2sp)yske#&";
        $iv = $privateKey;
        $data = hex2bin($str);
        $decrypted = openssl_decrypt(base64_decode($data), 'aes-128-cbc', $privateKey, OPENSSL_NO_PADDING, $iv);
        return rtrim($decrypted);
    }
}

    
