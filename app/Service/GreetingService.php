<?php

declare(strict_types = 1);

namespace Dev\App\Service;

/**
 * Service for page greetings
 */
class GreetingService
{
    /**
     * Greeting for Github
     *
     * @return string
     */
    public function greetingGithub(): string
    {
        return 'Hello Github!';
    }
}
