<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return new Response(
            <<<EOF
<html>
    <body>
    <h2 class="text-center margin-Y-lg">Actualité</h2>

    <!-- Div 1. : Genral -->
    <div class="container-general-home">
      <!-- Div 1.1 : Contient les paragraphes articles -->
      <div class="container-home-article">
        <p class="p-Article">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod alias quia repudiandae dolores
          voluptas a animi
          neque magnam odio officia libero nobis dolorem nisi vitae placeat, hic consequuntur unde eligendi!</p>
    
        <p class="p-Article">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod alias quia repudiandae dolores
          voluptas a animi
          neque magnam odio officia libero nobis dolorem nisi vitae placeat, hic consequuntur unde eligendi!</p>
    
        <p class="p-Article">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod alias quia repudiandae dolores
          voluptas a animi
          neque magnam odio officia libero nobis dolorem nisi vitae placeat, hic consequuntur unde eligendi!</p>
    
        <!------ Fin div 1.1  ------>
      </div>
    
    
      <!-- Div 1.2 : Contient paragraphe, anchors et image -->
      <div class="container-game-home">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores id nulla ea sapiente qui maxime. Doloremque,
          quam? Saepe libero id sapiente tempore itaque? Aliquam, provident aliquid id est deleniti itaque?</p>
    
        <a href="" class="link-game">
          <img
            src="https://p4.wallpaperbetter.com/wallpaper/113/857/306/gameglobe-game-gameglobe-game-application-wallpaper-preview.jpg"
            alt="Image jeu">
          <br>Let's go
        </a>
        <!------ Fin div 1.2  ------>
      </div>
      <!------ Fin div 1.  ------>
    </div>
    </body>
</html>
EOF
        );
    }
}