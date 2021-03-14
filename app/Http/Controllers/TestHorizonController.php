<?php

namespace App\Http\Controllers;

use App\Jobs\Log1;
use App\Jobs\Log2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestHorizonController extends Controller
{
    //

    public function job1(){
        for( $i = 0; $i <10; $i ++){
//            Log::info('testest');
            Log1::dispatch()->onQueue('fast-1');




            echo('test horizon');
        }
//        for( $i = 0; $i <30; $i ++) {
//            Log2::dispatch()->onQueue('fast-1');
//        }
    }

    public function job2() {
        for( $i = 0; $i <3; $i ++){
            Log1::dispatch()->onQueue('default');
            Log1::dispatch()->onqueue('hight');
            Log1::dispatch()->onqueue('low');
        }
    }
}
