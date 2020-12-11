<?php
namespace App;

// Awesome Greeting Generator
class GreetingGenerator
{
    public function getRandomGreeting()
    {
        $greetings = ['Hey', 'Yo', 'Hello', 'Privet'];
        $greeting = $greetings[array_rand($greetings)];

        return $greeting;
    }
}