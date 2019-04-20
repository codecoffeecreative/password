<?php

namespace CodeCoffeeCreative\Password;

class Password
{
    protected $length              = 12;
    protected $uppercase           = true;
    protected $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    protected $lowercase           = true;
    protected $lowercaseCharacters = 'abcdefghijklmnopqrstuvwxyz';
    protected $number              = true;
    protected $numberCharacters    = '1234567890';
    protected $symbol              = true;
    protected $symbolCharacters    = ' !"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~'; // https://www.owasp.org/index.php/Password_special_characters

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     *
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUppercase()
    {
        return $this->uppercase;
    }

    /**
     * @param mixed $uppercase
     *
     * @return self
     */
    public function setUppercase($uppercase)
    {
        $this->uppercase = $uppercase;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLowercase()
    {
        return $this->lowercase;
    }

    /**
     * @param mixed $lowercase
     *
     * @return self
     */
    public function setLowercase($lowercase)
    {
        $this->lowercase = $lowercase;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param mixed $symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUppercaseCharacters()
    {
        return $this->uppercaseCharacters;
    }

    /**
     * @param mixed $uppercaseCharacters
     *
     * @return self
     */
    public function setUppercaseCharacters($uppercaseCharacters)
    {
        $this->uppercaseCharacters = $uppercaseCharacters;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLowercaseCharacters()
    {
        return $this->lowercaseCharacters;
    }

    /**
     * @param mixed $lowercaseCharacters
     *
     * @return self
     */
    public function setLowercaseCharacters($lowercaseCharacters)
    {
        $this->lowercaseCharacters = $lowercaseCharacters;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberCharacters()
    {
        return $this->numberCharacters;
    }

    /**
     * @param mixed $numberCharacters
     *
     * @return self
     */
    public function setNumberCharacters($numberCharacters)
    {
        $this->numberCharacters = $numberCharacters;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSymbolCharacters()
    {
        return $this->symbolCharacters;
    }

    /**
     * @param mixed $symbolCharacters
     *
     * @return self
     */
    public function setSymbolCharacters($symbolCharacters)
    {
        $this->symbolCharacters = $symbolCharacters;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCharacters()
    {
        return sprintf(
            '%s%s%s%s',
            $this->uppercase ? $this->getUppercaseCharacters() : null,
            $this->lowercase ? $this->getLowercaseCharacters() : null,
            $this->number ? $this->getNumberCharacters() : null,
            $this->symbol ? $this->getSymbolCharacters() : null
        );
    }

    /**
     * @return string
     */
    public function generate()
    {
        if (strlen($this->getCharacters()) < 1) {
            throw new \Exception('No characters found');
        }

        $password = '';

        for ($l = 0; $l < $this->getLength(); $l++) {
            $temp = str_shuffle($this->getCharacters());
            $password .= $temp[0];
        }

        return $password;
    }
}
