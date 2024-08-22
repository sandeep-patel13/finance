<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Person;

class StudentController extends Controller
{
    use Person;

    public function run(){
        return [
            'speak' => $this->speak("Student "),
            'have' => $this->have("Student ")
        ];
    }
}
