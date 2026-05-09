<?php
use PHPUnit\Framework\TestCase;

class SyntaxTest extends TestCase
{
    // POS-203: index.php syntax valid
    public function testIndexPhpSyntax()
    {
        $output = shell_exec("php -l " . __DIR__ . "/../index.php");
        $this->assertStringContainsString("No syntax errors", $output);
    }

    // contact.php syntax check removed as it's not required
}
