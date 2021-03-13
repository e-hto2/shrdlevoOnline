@extends('layouts.frontend')
@section('header-section')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/icon/block.png') }}">

    <script src="{{ asset('frontend/js/translate.js') }}"></script>
    <script src="{{ asset('frontend/js/config.js') }}"></script>
    <script src="{{ asset('frontend/js/variables.js') }}"></script>

    <script src="{{ asset('frontend/js/block_script.js') }}"></script>
    <script src="{{ asset('frontend/js/block_action.js') }}"></script>
    <style>
        body, html {
            font-family: 'Droid Sans', sans-serif;
            background-image: url("{{ asset('frontend/images/SkyBackground.png') }}");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection
@section('content')
    <span id="debug"></span>
    <script>
        if (debugMode) document.getElementById("debug").innerHTML = 'Debug mode On. <button id="resetVariables" onclick="resetVariables();">resetVariables</button>';
    </script>
    <center>
        <canvas id="canvas1" width="200" height="120"></canvas>
        <div id="ethicForm">
            <h1>Consent Form</h1>
            <p>
                The results from BlockWorld are being used as part of an experiment to better understand languages and how they evolve over time.
            </p>
            <p>
                The game has two parts. In part 1, you will be tasked with arranging blocks, based on instructions in the made-up language. In part 2, you will give instructions in the language to someone else. Finally, there will be a very short survey about the game. We will not share any personally identifying or sensitive information with any third parties.
            </p>
            <p>The game and survey should take less than 30 minutes to complete. You can withdraw at any time.
            </p>
            <p>If you have questions or concerns, please contact us at blockworldbusiness@gmail.com.
            </p>
            <p> Do you agree to take part in this study?
            </p>
        </div>
        <div id="submitEthic">
            <input type="checkbox" name="checkbox" value="check" id="agree"/><strong> I have read and agree to the consent
                form.</strong> <br/><br>
            <button name="submit" value="submit" onclick="agreeEthics();">Begin</button>
        </div>
    </center>
@endsection
@section('footer-section')
    <script>
        // Animation function
        function draw() {
            var canvas = document.getElementById("canvas1");
            var ctx = canvas.getContext('2d');
            // clear the canvas
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Wobble the cube using a sine wave
            var wobble = Math.sin(Date.now() / 250) * 5;
            // draw the cube
            drawCube(
                ctx,
                canvas.width / 2,
                110 + wobble,
                50,
                50,
                50,
                '#2E64FE'
            );
            requestAnimationFrame(draw);
        }

        draw();
        getVariables();
    </script>
@endsection

<!--
Copyright (c) 2017 by Ash Kyd (http://codepen.io/AshKyd/pen/JYXEpL)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->