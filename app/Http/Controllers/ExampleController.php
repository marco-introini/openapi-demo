<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function __invoke()
    {
        $validated = request()->validate([
            'inputString' => ['required', 'string', 'min:3'],
        ]);
        return response()->json(['returnString' => 'Input string is ' . $validated['inputString']]);
    }
}
