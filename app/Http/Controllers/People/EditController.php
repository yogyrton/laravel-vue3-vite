<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\People;

class EditController extends Controller
{
    public function __invoke(People $people)
    {
        return $people;
    }
}
