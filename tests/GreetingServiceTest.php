<?php declare(strict_types=1);

namespace Dev\App;

use Dev\App\Service\GreetingService;
use PHPUnit\Framework\TestCase;

/**
 * Example for service test
 */
class GreetingServiceTest extends TestCase
{
    /**
     * Test greeting for Github
     *
     * @return void
     */
    public function testGithubGreeting(): void
    {
        $service = new GreetingService();
        $greeting = $service->greetingGithub();
        $this->assertEquals('Hello Github!', $greeting, 'Does not match expected greeting');
    }
}
