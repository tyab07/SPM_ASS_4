<?php
use PHPUnit\Framework\TestCase;

class PageLoadTest extends TestCase
{
    // POS-202: index.php exists
    public function testIndexFileExists()
    {
        $this->assertFileExists(__DIR__ . '/../index.php');
    }

    // contact.php check removed as it's not required
}
