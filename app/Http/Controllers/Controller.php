<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function showJsonMessage($code, $msgs, $data = array())
    {
        if (!empty($this->_JsonMessageArray)) {
            $data = array_merge($data, $this->_JsonMessageArray);
        }
        $ret = array();
        $ret['code'] = $code ? $code : 0;
        $ret['message'] = $msgs;
        $ret['data'] = $data;
        return response()->json($ret, Response::HTTP_OK);
    }
}
