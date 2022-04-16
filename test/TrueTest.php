<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;


final class TrueTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertTrue(true);
    }

    public function isConnected(): void
    {
        Connection::connection();
        $this->assertTrue(Connection::fetch());
        // $this->connection();
    }

    // public function testCannotBeCreatedFromInvalidEmailAddress(): void
    // {
    //     $this->expectException(InvalidArgumentException::class);

    //     Email::fromString('invalid');
    // }

    // public function testCanBeUsedAsString(): void
    // {
    //     $this->assertEquals(
    //         'user@example.com',
    //         Email::fromString('user@example.com')
    //     );
    // }
}
