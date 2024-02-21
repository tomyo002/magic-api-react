<?php

namespace App\Controller;

use App\Entity\Picture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GetPictureController extends AbstractController
{
    public function __invoke(Picture $picture)
    {
        $response = new Response(
            stream_get_contents($picture->getPicture(), -1, 0),
            Response::HTTP_OK,
            ['Content-Type' => 'image/png']
        );

        return $response;
    }
}
