@extends('layouts.frontend')
@section('header-section')
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <script src="https://somata.inf.ed.ac.uk/assets/javascripts/jquery-3.1.1.min.js"></script>
    <script src="https://somata.inf.ed.ac.uk/assets/javascripts/chunks.js"></script>

    <script src="{{ asset('frontend/js/block_action.js') }}"></script>

    <script src="{{ asset('frontend/js/translate.js') }}"></script>
    <script src="{{ asset('frontend/js/config.js') }}"></script>
    <script src="{{ asset('frontend') }}"></script>
    <style>
        body {
            font-family: 'Droid Sans', sans-serif;
            background-image: url("{{ asset('frontend/css/mosaicgs.png') }}");
        }
    </style>
@endsection
@section('content')
    <span id="debug"></span>
    <script>
        getVariables();
        if (debugMode) document.getElementById("debug").innerHTML = 'Debug mode.<button id="resetVariables" style="position: absolute; top:1; left:90px;" onclick="resetVariables();">resetVariables</button>';
    </script>
    <center>
        <div id="wrapper" align="left">
            <div id="first">
            </div>
            <div id="second">
                <h3 id="instruction">
                    Survey
                </h3>
            </div>
            <div id="third">
                <table border="0" cellpadding="10" height="100%">
                    <tr>
                        <td>
                            <center><strong>About you and the game</strong></center>
                            Age:<br/>
                            <select name="age" id="age">
                                <option disabled selected value>Select an option</option>
                                <option value="18-24 years old">18-24 years old</option>
                                <option value="25-34 years old">25-34 years old</option>
                                <option value="55-44 years old">55-44 years old</option>
                                <option value="45-54 years old">45-54 years old</option>
                                <option value="55-64 years old">55-64 years old</option>
                                <option value="65-74 years old">65-74 years old</option>
                                <option value="75 years or older">75 years or older</option>
                                <option value="prefer not to say">prefer not to say</option>
                            </select><br/><br/>
                            What is the highest degree or level of school you have completed or appear in the list?
                            <select name="school" id="school">
                                <option disabled selected value>Select an option</option>
                                <option value="1. No schooling completed">No schooling completed</option>
                                <option value="2. Bachelor’s degree">Bachelor’s degree</option>
                                <option value="3. Master’s degree">Master’s degree</option>
                                <option value="4. Professional degree">Professional degree</option>
                                <option value="5. Doctorate degree">Doctorate degree</option>
                                <option value="Other">Other</option>
                                <option value="prefer not to say">prefer not to say</option>
                            </select><br/><br/>
                            Were the instructions clear?
                            <select name="clear" id="clear">
                                <option disabled selected value>Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select><br/><br/>
                            How difficulty was the game?<br/>
                            <select name="difficult" id="difficult">
                                <option disabled selected value>Select an option</option>
                                <option value="1. Very Easy">Very Easy</option>
                                <option value="2. Easy">Easy</option>
                                <option value="3. Moderate">Moderate</option>
                                <option value="4. Hard">Hard</option>
                                <option value="5. Very Hard">Very Hard</option>
                            </select><br/><br/>
                            Please share with us your thoughts about the game.<br/>
                            <textarea name="feedback" id="feedback" rows="4" cols="50"></textarea>
                        </td>
                        <td>
                            <div style="height:100%;border-left:1px solid #bfbfbf;padding-left:20px;">
                                <strong>What do you think is the closest meaning for the words in part 1?</strong>
                                <div id="word_questions"></div>
                            </div>
                        </td>
                    </tr>
                </table>

                <script>
                    document.getElementById('word_questions').innerHTML = "";
                    for (var i = 1; i < words.length; i++) {
                        document.getElementById('word_questions').innerHTML += '<div style="padding:10px;float:left; display:inline"><strong>' + getTranslation(words[i].word) + '</strong><br/><input type="text" id="word' + i + '" name="word' + i + '"/></div>';
                    }
                </script>

                <center>
                    <button onclick="submitSurvey();">Submit</button>
                </center>

                <span id="save_response">.</span>
            </div>
        </div>
    </center>
@endsection
@section('footer-section')
    <script src="{{ asset('frontend/js/block_action.js') }}"></script>
    <script>
        function submitSurvey(){
            survey=[];
            survey.push("Age:"+document.getElementById("age").value);
            survey.push("School:"+document.getElementById("school").value);
            survey.push("Clear instructions:"+document.getElementById("clear").value);
            survey.push("Difficult:"+document.getElementById("difficult").value);
            survey.push("Feedback:"+removeSpecialCharacters(document.getElementById("feedback").value));
            for(var i=1;i<words.length;i++){
                survey.push(words[i].word+"("+getTranslation(words[i].word)+"):"+removeSpecialCharacters(document.getElementById("word"+i).value));
            }

            // Modify this to suit the web server
            var game_json = {};
            game_json.chainId=tasks[0].id;
            game_json.idVersion=version;
            game_json.answers = answers;
            game_json.tasks = tasks;
            game_json.tasks[0].id = (parseInt(tasks[0].id)+1).toString();
            game_json.words = words;
            game_json.tokens = tokens.toString();
            game_json.survey = survey;

            game_json.experimentId=experimentVersion;
            //game_json.sessionId=Math.floor(Math.random() * 1000000000).toString();
            game_json.sessionId="010101010";
            console.log(game_json);
            //alert(JSON.stringify(game_json))
            if(saveInServer){
                $.ajax({
                    url:"{{ route('add_user_data') }}",
                    method:"POST",
                    data: {
                        "_token": "{{csrf_token()}}",
                        "result" : game_json
                    },
                    dataType:"json",
                    success:function(data)
                    {
                       console.log(data);
                        experiment=4;
                        setVariables();
                        window.open("done","_self");
                    }
                });
            }
        }
    </script>

@endsection
