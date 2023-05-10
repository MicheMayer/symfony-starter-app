<?php declare(strict_types=1);

namespace Dev\App;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Example test for default controller class
 */
class InfoControllerTest extends WebTestCase
{
    /**
     * Test greeting on landing page
     *
     * @return void
     */
    public function testLandingPage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello Github!', 'Greeting did not match expected string');
    }
}
