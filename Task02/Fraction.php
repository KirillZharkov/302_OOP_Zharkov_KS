<?php

namespace Zharkov\Task02;

class Fraction
{
    private int $numerator;

    private int $denominator;

    public function __construct(int $numerator, int $denominator)
    {
        if ($denominator === 0) {
            exit('Знаменатель не может быть 0');
        }

        $gcd = $this->gcd($numerator, $denominator);
        $this->numerator = $numerator / $gcd;
        $this->denominator = $denominator / $gcd;
    }

    public function getNumer(): int
    {
        return $this->numerator;
    }

    public function getDenom(): int
    {
        return $this->denominator;
    }

    public function add(Fraction $frac): Fraction
    {
        $newNumerator = $this->numerator * $frac->denominator + $frac->numerator * $this->denominator;
        $newDenominator = $this->denominator * $frac->denominator;

        return new Fraction($newNumerator, $newDenominator);
    }

    public function sub(Fraction $frac): Fraction
    {
        $newNumerator = $this->numerator * $frac->denominator - $frac->numerator * $this->denominator;
        $newDenominator = $this->denominator * $frac->denominator;

        return new Fraction($newNumerator, $newDenominator);
    }

    public function __toString(): string
    {
        if ($this->numerator == 0) {
            return 0 . "'";
        }

        $integer_part = (int)($this->numerator / $this->denominator);

        if ($integer_part == 0) {
            return (string)($this->numerator . '/' . $this->denominator);
        } else {
            $float_part = ($this->numerator % $this->denominator);
            if ($float_part == 0) {
                return (string)($integer_part . "'");
            } else {
                return (string)($integer_part . "'" . abs($float_part) . '/' . $this->denominator);
            }
        }
    }
    
    private function gcd(int $a, int $b): int
    {
        while ($b !== 0) {
            $t = $a % $b;
            $a = $b;
            $b = $t;
        }

        return abs($a);
    }
}
