<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePeopleRequest;
use App\Models\People;

class DeleteController extends Controller
{
    public function __invoke(People $people)
    {
        $people->delete();
    }
}
