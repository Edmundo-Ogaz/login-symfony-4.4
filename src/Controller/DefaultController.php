<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security)
    {
       $this->security = $security;
    }

    public function index(): Response
    {
        $user = $this->security->getUser();

        return new Response(
            '<html><body>hello '.json_encode($user->getUsername()).'</body></html>'
        );
    }
}