<?php

namespace App\calcul;

use Symfony\Component\HttpFoundation\Response;

class Calcul
{
  public function Addition(): Response
  {
    $a = random_int(0, 100);
    $b = random_int(0, 100);
    $addition = $a + $b;
    return new Response($addition);
  }
}