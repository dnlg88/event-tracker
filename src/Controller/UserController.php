<?php

namespace Daniel\EventTracker\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/health', name: 'health')]
    public function health(): JsonResponse
    {
        return $this->json([
            'message' => 'OK',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
}
