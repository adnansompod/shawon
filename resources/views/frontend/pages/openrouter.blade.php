@extends('frontend.app')

@section('title')
    AI
@endsection
@section('body')
<section class="blog-post-area section-margin category" style="background: #f7f9fc; padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h2 class="text-center mb-4" style="font-weight: 700; color: #333;">AI Assistant</h2>

                <form method="POST" action="{{ route('openrouter.send') }}" style="background: #fff; padding: 25px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                    @csrf
                    <div class="mb-3">
                        <textarea name="message" placeholder="Ask something..." class="form-control" style="height: 120px; border-radius: 10px; box-shadow: inset 0 2px 5px rgba(0,0,0,0.05);"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" style="border-radius: 50px; padding: 10px 30px; font-weight: 600; transition: all 0.3s ease;">Send</button>
                    </div>
                </form>

                @if(isset($prompt) && isset($reply))
                    <div class="result mt-4 p-4" style="background: #e9f5ff; border-left: 5px solid #4CAF50; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <strong>AI Response:</strong><br><br>
                        <div style="text-align: right; font-style: italic; color: #555; margin-bottom: 20px;">{!! nl2br(e($prompt)) !!}</div>
                        <div style="color: #333; line-height: 1.6;">{!! nl2br(e($reply)) !!}</div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>

<style>
    /* Hover effect for send button */
    .btn-success:hover {
        background-color: #45a049;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    /* Smooth transitions for textarea */
    textarea.form-control {
        transition: all 0.3s ease;
    }
    textarea.form-control:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 8px rgba(76, 175, 80, 0.3) inset;
        outline: none;
    }

    /* Responsive heading */
    @media (max-width: 576px) {
        h2 {
            font-size: 1.8rem;
        }
    }
</style>


@endsection

















{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>OpenRouter AI Chat</title>--}}
{{--    <style>--}}
{{--        body {--}}
{{--            max-width: 700px;--}}
{{--            margin: 40px auto;--}}
{{--            font-family: Arial, sans-serif;--}}
{{--            background: #fafafa;--}}
{{--        }--}}
{{--        textarea {--}}
{{--            width: 100%;--}}
{{--            height: 120px;--}}
{{--            padding: 10px;--}}
{{--            font-size: 16px;--}}
{{--            resize: vertical;--}}
{{--        }--}}
{{--        .result, .prompt {--}}
{{--            background: #f0f0f0;--}}
{{--            padding: 15px;--}}
{{--            margin-top: 10px;--}}
{{--            border-left: 4px solid #4CAF50;--}}
{{--            white-space: pre-wrap;--}}
{{--        }--}}
{{--        .prompt { border-color: #2196F3; }--}}
{{--        button {--}}
{{--            padding: 10px 20px;--}}
{{--            font-size: 16px;--}}
{{--            cursor: pointer;--}}
{{--            margin-top: 10px;--}}
{{--        }--}}
{{--        form { margin-bottom: 20px; }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<h2>OpenRouter AI Chat (Free)</h2>--}}

{{--<form method="POST" action="{{ route('openrouter.send') }}">--}}
{{--    @csrf--}}
{{--    <textarea name="message" placeholder="Ask something..."></textarea>--}}
{{--    <br>--}}
{{--    <button type="submit">Send</button>--}}
{{--</form>--}}

{{--@if(isset($prompt) && isset($reply))--}}

{{--    <!-- Show AI response -->--}}
{{--    <div class="result">--}}
{{--        <strong>AI Response:</strong><br><br>--}}
{{--        <!-- Show submitted prompt -->--}}
{{--        <span style="float: right">{!! nl2br(e($prompt)) !!}</span>--}}

{{--        {!! nl2br(e($reply)) !!}--}}
{{--    </div>--}}
{{--@endif--}}

{{--</body>--}}
{{--</html>--}}
