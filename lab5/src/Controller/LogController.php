<?php
// src/Controller/LogController.php
namespace App\Controller;

use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class LogController
{
    public function logger($name, LoggerInterface $logger, GreetingGenerator $generator): Response
    {
        $greeting = $generator->getRandomGreeting();
        $logger->info("Saying $greeting to $name!");

        $extension = $name | $greeting;
        return new Response(
            "<html>
                <body>
                    <h1>Saying $greeting to $name!</h1>
                    <h3>Extension says: $extension</h3>
                </body>
            </html>"
        );
    }
}