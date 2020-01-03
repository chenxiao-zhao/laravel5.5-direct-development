<?php

namespace App\Dao;

use App\Models\User;

class UserDao
{
    public static function insert_user($array)
    {
        return User::create($array);
    }

    public static function get_user_by_name($name)
    {
        return User::where('name', '=', $name)->first();
    }

    public static function get_user_by_email($email)
    {
        return User::where('email', '=', $email)->first();
    }

    public static function update_by_name($name, $array)
    {
        return User::where('name', '=', $name)->update($array);
    }

    public static function update_by_id($id, $array)
    {
        return User::where('id', '=', $id)->update($array);
    }

    public static function update_by_email($email, $array)
    {
        return User::where('email', '=', $email)->update($array);
    }

    public static function delete_by_id($id){
        return User::find( $id)->delete();
    }

    public static function query_account_list($array, $user_permission, $user_id)
    {
        $limit = isset($array['limit']) ? $array['limit'] : 10;
        $page = isset($array['page']) ? $array['page'] : 1;
        $query = User::orderBy('created_at')->where('permission', '!=', null);
        if ($user_permission == 1) {
            $query->where('id', '=', $user_id);
        }

        $sum = $query->count();

        if ($sum > 0) {
            $totalPage = ($sum % $limit) == 0 ? intval($sum / $limit) : intval($sum / $limit) + 1;
            $page = $totalPage > $page ? $page : $totalPage;
            $min = ($page - 1) * $limit;
            $rows = $query->skip($min)->take($limit)->get();
        } else {
            $totalPage = $page = 0;
            $rows = array();
        }
        $resultData = array();
        $resultData['data'] = $rows;
        $resultData['total'] = $sum;
        $resultData['limit'] = $limit;
        $resultData['page'] = $page;
        $resultData['totalPage'] = $totalPage;

        return $resultData;
    }
}