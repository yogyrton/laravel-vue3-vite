<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePeopleRequest;
use App\Models\People;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return People::all();
    }
}
