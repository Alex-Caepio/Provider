<?php

namespace App\Contracts\Video;

interface VideoHosting {
    public function getVideoHeight();
    public function getVideoWidth();
    public function showString();
}