<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Person;

class EmployeeController extends Controller
{
    use Person;

    public function run(){
        return [
            'speak' => $this->speak("Employee "),
            'have' => $this->have("Employee ")
        ];
    }
}
