<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VmCamera;

class DataController extends Controller{

    public function camera(){
        $cameraArr = VmCamera::all()->toArray();
        foreach ($cameraArr as $k=> $oneCamera){
            $resultCameraArr[$k]['cameraid']=$oneCamera['id'];
            $resultCameraArr[$k]['cameraname']=$oneCamera['name'];
            $resultCameraArr[$k]['position']=['x'=>$oneCamera['position_x'],'y'=>$oneCamera['position_y']];
            $resultCameraArr[$k]['screen_capture']=$oneCamera['screen_capture'];
            $resultCameraArr[$k]['capture_time']=$oneCamera['update_time'];
        }
        return $this->showJsonMessage(200,'',$resultCameraArr);
    }

    public function data(){
        
    }
}