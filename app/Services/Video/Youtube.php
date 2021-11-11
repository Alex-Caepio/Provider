<?php

namespace App\Services\Video;

use App\Contracts\Video\VideoHosting;
use App\Services\FakeService;

class Youtube implements VideoHosting{

    protected $random;

    public function __construct()
    {

        $this->random = 'Youtube'.rand(0, 10000);
    }

    public function showMeString()
    {
        return $this->random;
    }

    public function getVideoHeight(){

    }
    public function getVideoWidth(){

    }
    public function showString(){

        return $this->showMeString();
    }
}