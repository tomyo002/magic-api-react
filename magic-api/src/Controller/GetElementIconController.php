<?php

namespace App\Controller;

use App\Entity\IconElt;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GetElementIconController extends AbstractController
{
    public function __invoke(IconElt $icon)
    {
        $response = new Response(
            stream_get_contents($icon->getIcon(), -1, 0),
            Response::HTTP_OK,
            ['Content-Type' => 'image/png']
        );

        return $response;
    }
}