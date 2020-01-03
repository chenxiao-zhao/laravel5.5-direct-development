<?php
/**
 * Created by PhpStorm.
 * User: achang
 * Date: 20-1-2
 * Time: 上午11:23
 */

namespace App\Dao;


class DailyDataDao
{
    public static function install($data)
    {
        $connection = Mongodb::connectionMongodb('daily_data');
        $result = $connection->insert($data);
        return $result;
    }

    public static function delete($id)
    {
        $connection = Mongodb::connectionMongodb('daily_data');
        $result = $connection->where('id', $id)->delete();
        return $result;
    }

    public static function update($id, $data)
    {
        $connection = Mongodb::connectionMongodb('daily_data');
        $result = $connection->where('id', $id)->update($data);
        return $result;
    }

    public static function get($id)
    {
        $connection = Mongodb::connectionMongodb('daily_data');
        $result = $connection->where('id', $id)->get();
        return $result;
    }
}