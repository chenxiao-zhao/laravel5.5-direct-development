<?php

namespace App\Dao;


use Illuminate\Support\Facades\DB;

class Mongodb
{
    public static function connectionMongodb($tables)
    {
        return $users = DB::connection('mongodb')->collection($tables);
    }

}