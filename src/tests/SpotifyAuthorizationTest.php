<?php
use App\Repositories\SpotifyAuthorizationRepository;
class SpotifyAuthorizationTest extends TestCase
{
    protected $spotifyAuthorizationRepository;

    public function setUp():void{
        parent::setUp();
        $this->spotifyAuthorizationRepository = new SpotifyAuthorizationRepository();
    }

    /**
     * @test
     * @return void
     */
    public function can_auth_to_spotify():void
    {
        $this->assertTrue($this->spotifyAuthorizationRepository->authorize());
    }
}
