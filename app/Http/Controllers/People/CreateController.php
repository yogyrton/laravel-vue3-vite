<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePeopleRequest;
use App\Models\People;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(StorePeopleRequest $request)
    {
        $data = $request->validated();

        People::query()->create($data);
    }
}
