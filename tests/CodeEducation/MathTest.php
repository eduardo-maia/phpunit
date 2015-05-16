<?php

namespace CodeEducation;

class Math extends \PHPUnit_Framework_TestCase
{
    public function testVerificaOTipoDaClasseEstaCorreto()
    {
        $this->assertionInstanceOf("CodeEducation\Math", new \CodeEducation\Math());
    }
}
