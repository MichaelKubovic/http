<?php

namespace Bitty\Tests\Http\Exception;

use Bitty\Http\Exception\BadGatewayException;
use Bitty\Http\Exception\HttpExceptionInterface;
use Bitty\Tests\Http\TestCase;

class BadGatewayExceptionTest extends TestCase
{
    public function testInstanceOf()
    {
        $fixture = new BadGatewayException();

        $this->assertInstanceOf(HttpExceptionInterface::class, $fixture);
    }

    public function testMessage()
    {
        $fixture = new BadGatewayException();

        $actual = $fixture->getMessage();

        $this->assertEquals('Bad Gateway', $actual);
    }

    public function testCode()
    {
        $fixture = new BadGatewayException();

        $actual = $fixture->getCode();

        $this->assertEquals(502, $actual);
    }

    public function testTitle()
    {
        $fixture = new BadGatewayException();

        $actual = $fixture->getTitle();

        $this->assertEquals('502 Bad Gateway', $actual);
    }

    public function testDescription()
    {
        $fixture = new BadGatewayException();

        $actual = $fixture->getDescription();

        $description = 'The server received an invalid response from an upstream server.';
        $this->assertEquals($description, $actual);
    }
}