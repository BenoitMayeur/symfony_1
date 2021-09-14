<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Other
{
     /**
      * @Route("/other")
      */
      public function giveday(): Response
      {
            $number = random_int(0, 100);
            $current_day = date("F j, Y, g:i a");
  
          return new Response(
              '<html><body>'.$number.' '.$current_day.'</body></html>'
          );
      }
}
