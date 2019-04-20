<?php

namespace CodeCoffeeCreative\Password\Tests;

use PHPUnit\Framework\TestCase;
use CodeCoffeeCreative\Password\Password;

class PasswordTest extends TestCase
{

    /** @test */
    public function set_uppercase()
    {
        $password = new Password;
        $password->setUppercase(false);
        $this->assertFalse($password->getUppercase());
    }

    /** @test */
    public function set_lowercase()
    {
        $password = new Password;
        $password->setLowercase(false);
        $this->assertFalse($password->getLowercase());
    }

    /** @test */
    public function set_number()
    {
        $password = new Password;
        $password->setNumber(false);
        $this->assertFalse($password->getNumber());
    }

    /** @test */
    public function set_symbol()
    {
        $password = new Password;
        $password->setSymbol(false);
        $this->assertFalse($password->getSymbol());
    }

    /** @test */
    public function set_length()
    {
        $length   = 18;
        $password = new Password;
        $password->setLength($length);
        $this->assertEquals($length, $password->getLength());
    }

    /** @test */
    public function set_uppercase_characters()
    {
        $characters = 'CODECOFFEECREATIVE';
        $password   = new Password;
        $password->setUppercaseCharacters($characters);
        $this->assertEquals($characters, $password->getUppercaseCharacters());
    }

    /** @test */
    public function set_lowercase_characters()
    {
        $characters = 'codecoffeecreative';
        $password   = new Password;
        $password->setLowercaseCharacters($characters);
        $this->assertEquals($characters, $password->getLowercaseCharacters());
    }

    /** @test */
    public function set_number_characters()
    {
        $characters = '12345678';
        $password   = new Password;
        $password->setNumberCharacters($characters);
        $this->assertEquals($characters, $password->getNumberCharacters());
    }

    /** @test */
    public function set_symbol_characters()
    {
        $characters = '12345678';
        $password   = new Password;
        $password->setSymbolCharacters($characters);
        $this->assertEquals($characters, $password->getSymbolCharacters());
    }

    /** @test */
    public function character_checking()
    {
        $password = new Password;
        $this->assertStringMatchesFormat('%s', $password->generate());
    }
}
