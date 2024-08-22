<?php
namespace App\Traits;

use App\Models\Article;

trait Person {
    public function speak($arg) {
        return $arg."Speak";
    }
    public function have($arg) {
        return $arg."have";
    }
}