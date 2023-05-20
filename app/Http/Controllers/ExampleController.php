<?php

namespace App\Http\Controllers;

use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;

#[Group('Basic APIs')]
class ExampleController extends Controller
{
    #[Endpoint('Basic API demo','A really basic API example',false)]
    #[Response([
        "returnString" => "Input string is Test",
    ])]
    public function __invoke($request)
    {
        $validated = $request->validate([
            // This is the basic input string
            'inputString' => ['required', 'string', 'min:3'],
        ]);
        return response()->json(['returnString' => 'Input string is ' . $validated['inputString']]);
    }
}
