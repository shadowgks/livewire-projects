<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number1 = 0;
    public $number2 = 0;
    public float $result = 0;
    public string $actions = '+';
    public bool $disabled = false;

    public function calculator()
    {
        // set value
        $num1 = $this->number1;
        $num2 = $this->number2;

        //check actions
        if ($this->actions == '+') {
            $this->result = $num1 + $num2;
        } else if ($this->actions == '-') {
            $this->result = $num1 - $num2;
        } else if ($this->actions ==='*') {
            $this->result = $num1 * $num2;
        } else if ($this->actions == '/') {
            $this->result = $num1 / $num2;
        } else if ($this->actions == '%') {
            $this->result = $num1 / 100 * $num2;
        }
    }

    public function updated($property)
    {
        if ($this->number1 == '' || $this->number2 == '') {
            $this->disabled = true;
        } else {
            $this->disabled = false;
        }
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
