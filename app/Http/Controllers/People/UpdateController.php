<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePeopleRequest;
use App\Models\People;

class UpdateController extends Controller
{
    public function __invoke(UpdatePeopleRequest $request, People $people)
    {
        $data = $request->validated();

        $people->update($data);
    }
}
