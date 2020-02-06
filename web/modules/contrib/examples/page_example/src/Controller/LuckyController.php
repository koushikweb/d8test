<?php

namespace App\Controller;

use Symfony\Compnent\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $number = random_int(0, 1000);

        return new Response(
         '<html><body>Yoru lucky number is : '.$number.'</body></html>'
     );
    }
}
