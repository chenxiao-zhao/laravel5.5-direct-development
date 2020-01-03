<?php

namespace App\Services;

use App\Dao\UserDao;

class AccountService
{
    public function encrypt_register($array)
    {
        $array['password'] = bcrypt($array['password']);
        return UserDao::insert_user($array);
    }

    public function encrypt_update($id,$array)
    {
        $array['password'] = bcrypt($array['password']);
        return UserDao::update_by_id($id,$array);
    }

    public function encrypt_update_by_email($email,$array)
    {
        $array['password'] = bcrypt($array['password']);
        return UserDao::update_by_email($email,$array);
    }
}