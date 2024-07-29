<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profile')]
class ProfileController extends AbstractController
{
    #[\Symfony\Component\Routing\Attribute\Route('/show', name: 'app_profile_show')]
    public function show(): Response
    {
        return $this->render('profile/show.html.twig');
    }
}
