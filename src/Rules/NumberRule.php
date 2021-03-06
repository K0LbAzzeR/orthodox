<?php
namespace Orthodox\Rules;

class NumberRule implements RuleInterface
{
    public function run($value, $input, $args)
    {
        return is_numeric($value);
    }

    public function error()
    {
        return 'Value must be a number.';
    }
}