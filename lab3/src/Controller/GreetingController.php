<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GreetingController extends AbstractController
{
    /**
     * @Route("/greeting/{name}", methods={"GET"}, name="task_crte")
     * @param $name
     * @param LoggerInterface $logger
     * @param GreetingGenerator $generator
     * @return Response
     */
    public function index($name, LoggerInterface $logger, GreetingGenerator $generator)
    {
        $greeting = $generator->getRandomGreeting();
        $logger->info("Saying $greeting to $name!");

        return new Response($greeting.', '.$name, 200);
    }
}