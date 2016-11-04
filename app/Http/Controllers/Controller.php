<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function helpReturn($records, $message = null){
        return [
            'status'=>200,
            'data'=>$records,
            'message'=>$message
        ];
    }
    static public function helpError($message){
        if(is_array($message)){
            $message = implode(',',$message);
        }
        return [
            'status'=>500,
            'data'=>null,
            'message'=>$message
        ];
    }
}
