<?php

declare(strict_types = 1);

namespace Dev\App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Info
 */
class InfoController extends AbstractController
{
    /**
     * Introductory page
     *
     * @return Response
     */
    #[Route('/', name: 'index')]
    public function legacyPages(): Response
    {
        return new Response('Hello World');
    }
}
