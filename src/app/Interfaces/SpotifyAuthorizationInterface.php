<?php

namespace App\Interfaces;
use SpotifyWebAPI\Session;

interface SpotifyAuthorizationInterface {
    public function authorize():bool;
    public function getSession():Session;
    public function getAuthorizationStatus():bool;
}
