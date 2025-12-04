<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenRouterService;

class OpenRouterController extends Controller
{
    protected $openRouter;

    public function __construct(OpenRouterService $openRouter)
    {
        $this->openRouter = $openRouter;
    }

    public function index()
    {
        return view('frontend.pages.openrouter');
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $reply = $this->openRouter->chat($request->message);

        return view('frontend.pages.openrouter', [
            'reply' => $reply,
            'prompt' => $request->message
        ]);
    }
}
