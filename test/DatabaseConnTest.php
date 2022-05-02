<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

define('_DIR_', 'C:\xampp\htdocs\capstone\\' );

include _DIR_.'settings/db_class.php';

final class DatabaseConnTest extends TestCase
{
    public function testdBConnection(): void
    {
        $db =  new Connection();
        $this->assertTrue($db->connect());
    }

   
}