<?php
namespace App\Repositories;

use App\Interfaces\SpotifyAuthorizationInterface;
use SpotifyWebAPI\Session;

class SpotifyAuthorizationRepository implements SpotifyAuthorizationInterface {

    /**
     * @var Session
     */
    protected $session;

    public function authorize():bool
    {
        $client_id = config('app.spotify.client_id');
        $client_secret = config('app.spotify.client_secret');
        $this->session = new Session(
            $client_id, $client_secret
        );
        return $this->session->requestCredentialsToken();
    }

    public function getAuthorizationStatus():bool
    {
        return $this->session->getAccessToken() != null;
    }

    public function getSession(): Session
    {
        return $this->session;
    }

}
