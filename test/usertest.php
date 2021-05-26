<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class UserPhoneTest extends TestCase
{
    public function testCanBeCreatedFromValidUserPhone(): void
    {
        $this->assertInstanceOf(
            UserPhone::class,
            UserPhone::fromInteger('0600000000')
        );
    }

    public function testCannotBeCreatedFromInvalidUserPhone(): void
    {
        $this->expectException(InvalidArgumentException::class);

        UserPhone::fromInteger('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            '0600000000',
            UserPhone::fromString('0600000000')
        );
    }
}

