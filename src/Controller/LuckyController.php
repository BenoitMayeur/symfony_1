<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    public function giveNames(): Response
    {
        $first_name = "Benoit";
        $last_name = "Mayeur";

        return new Response(
            '<html><body>'.$first_name.' '.$last_name.'</body></html>'
        );
    }
     /**
      * @Route("/lucky/giveday")
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