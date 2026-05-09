<?php
use PHPUnit\Framework\TestCase;

class PageLoadTest extends TestCase
{
    // POS-202: Test - index.php exists
    public function testIndexFileExists()
    {
        $this->assertFileExists(__DIR__ . '/../index.php');
    }

    // POS-202: Test - contact.php exists
    public function testContactFileExists()
    {
        $this->assertFileExists(__DIR__ . '/../contact.php');
    }

    // POS-202: Test - thank-you.html exists
    public function testThankYouPageExists()
    {
        $this->assertFileExists(__DIR__ . '/../thank-you.html');
    }
}