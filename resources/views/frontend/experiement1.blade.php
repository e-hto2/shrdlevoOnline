@extends('layouts.frontend')
@section('header-section')
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/icon/block.png') }}">
    <script src="{{ asset('frontend/js/block_script.js') }}"></script>
    <script src="{{ asset('frontend/js/block_action.js') }}"></script>

    <script src="{{ asset('frontend/js/translate.js') }}"></script>
    <script src="{{ asset('frontend/js/config.js') }}"></script>
    <script src="{{ asset('frontend/js/variables.js') }}"></script>

    <script src=https://cdn.jsdelivr.net/npm/underscore@1.11.0/underscore-min.js></script>
    <style>
        body, html {
            font-family: 'Droid Sans', sans-serif;
            background-image: url("{{ asset('frontend/images/part1Background.jpg') }}");
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
        if (debugMode) document.getElementById("debug").innerHTML = 'Debug mode. <button onclick="resetVariables();">resetVariables</button> <button onclick="skipLevelPart1();">Skip level</button> <button onclick="skipAllLevelPart1();">Skip all levels</button>';
    </script>
    <center>
        <div id="wrapper" align="left">
            <div id="first">
                <button id="help" onclick="showInstructionPopUp('block','none');" title="Help">?</button>
                <strong>Part 1</strong>
            </div>
            <div id="second">
                <div style="width:100%; height:100%;">
                    <span>Instruction:</span>
                    <h3 id="instruction">
                        Instruction
                    </h3>
                </div>
            </div>
            <div id="third">
				<span>Blocks:&nbsp;
				Task:</span>
                <div id="blocks" style="width:100%; height:100%;">
                    <canvas id="blocksCanvas" width="1000" height="400"></canvas>
                    <button id="reset" style="position: absolute; top:150px; left:49%" onclick="loadAllCanvas();">Restart
                        level
                    </button>
                    <button id="submit" style="position: absolute; top:430px; left:50%;" onclick="submitAnswer();">Submit
                    </button>
                    <button id="next" style="position: absolute; top:450px; left:50%;" onclick="nextLevel();">Next</button>
                    <div id="app" style="position: absolute; top:240px; left:65%;"></div>
                </div>
                <span>Question mark '?' button for help.</span>
            </div>
        </div>
        <div>
            <div class="container instructions-part-1" id="instructions" align="left">
                <!--<div id='close' style="cursor:pointer;" onclick="showInstructionPopUp('none','block');">x</div>-->
                <div class="row">

                    <div class="col-sm-5">
                        <h1>Part 1</h1>
                        <p>
                            Your goal is to learn the blockworld language, and use the instructions to place blocks accordingly.
                        </p>
                        <p>
                            Each task includes an instruction, a starting pattern of blocks to modify, and a workspace to drag blocks in and out of.
                        </p>
                        <p>
                            Please do not write down translations such as 'wewo=orange' as the experiement aims to test participant's memory and natural understanding.
                        </p>
                        <p>
                            Do not worry if you are struggling with a task, they are designed to be difficult and push the limits of the language.
                            Please simply try all combinations that come to mind and once your attempts run out, it will move onto the next level.
                        </p>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <img src="{{ asset('frontend/images/instruction.gif') }}" style="cursor:not-allowed; width: 400px; height: 350px;"><br><br>
                        <p>
                            1.Read the instruction at the top of the screen<br>
                            2.Click and drag the blocks to arrange them in the pattern according to the instruction. They can be added, removed or stacked on top of each other.<br>
                            3.Press submit. If your solution is incorrect you can try again until you run out of attempts.
                        </p>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-12" style="text-align: center">
                        <button onclick="showInstructionPopUp('none','block');">Next</button>
                    </div>
                </div>
                <br/>
            </div>

            <div class="instructions" id="about1" align="left">
                <div id='close' style="cursor:pointer;" onclick="showAboutPopUp('none');">x</div>
                <h3>About the game:</h3>
                <div style="position: absolute;top:30px;padding:15px;">
                    <img src="{{ asset('frontend/images/blocks.png') }}" style="cursor:not-allowed;float:left; display:inline;padding:30px;"
                         width="10%" height="10%">


                    You have entered blockworld, inhabited by people whose only interest is in arranging colored blocks into
                    patterns.

                    <p>Your goal is to learn the blockworld language, use it to arrange blocks, and create new instructions
                        in the language. It’s a difficult challenge, but we think you’re up to it!

                    <h3>Part 1</h3>
                    <p>Your goal is to learn the blockworld language, and to follow instructions in the language to arrange
                        blocks.
                    <p>You will see several tasks. Each task includes instructions in the blocksworld language, a starting
                        pattern of blocks that you need to modify, and a workspace that you can take blocks from or put them
                        into. You will have a few chances to find the right pattern. If you run out of chances, you'll be
                        shown the correct pattern and move to the next task.

                    <h3>Part 2</h3>
                    <p>You will use what you have learned to create instructions for another person. You will see their
                        starting pattern, the pattern they must create, and the blocks in their workspace.
                        You will have a special keyboard to write instructions in the blocksworld langauge, using the
                        syllables the language is built out of.
                    <p>Another person might have to use your instructions, so choose them carefully!</p>

                    <p>There are several words to learn and it might be difficult to remember everything. Just do your best
                        and know that it's ok to make mistakes.

                    <p><span style="color:red;font-size:16px;">Note: </span>Please don't use the back button to try to go
                        back to an earlier task. Just do the best you can on each task.
                    <center>
                        <button onclick="showAboutPopUp('none');">Next</button>
                    </center>
                </div>
            </div>

        </div>
    </center>
@endsection
@section('footer-section')
    <script src="{{ asset('frontend/js/remain_time_calculation.js') }}"></script>
    <script src="{{ asset('frontend/js/block_events.js') }}"></script>
    <script>
        getVariables();
        loadAllCanvas();
    </script>
@endsection
