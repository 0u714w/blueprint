<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Diagnostic Screener</title>
    <style>
        #question-container {
            display: none;
        }

        #question-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        #answer-options {
            margin-top: 10px;
        }

        .answer-option {
            margin-right: 10px;
        }

        #next-btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Diagnostic Screener</h1>
    <div id="question-container" data-screener="{{ json_encode($screener) }}">
        <div id="question-title"></div>
        <div id="answer-options"></div>
        <button id="next-btn">Next</button>
        <br>
        <div id="success"></div>
    </div>

    <script>
        
        var questionContainer = document.getElementById('question-container');
        var screenerData = JSON.parse(questionContainer.getAttribute('data-screener'));
        var currentQuestionIndex = 0;

        function displayQuestion() {
            var question = screenerData.content.sections[0].questions[currentQuestionIndex];
            var titleElement = document.getElementById('question-title');
            var optionsElement = document.getElementById('answer-options');
            var nextButton = document.getElementById('next-btn');

            titleElement.innerText = question.title;
            optionsElement.innerHTML = '';

            for (var i = 0; i < screenerData.content.sections[0].answers.length; i++) {
                var answer = screenerData.content.sections[0].answers[i];
                var optionElement = document.createElement('input');
                optionElement.setAttribute('type', 'radio');
                optionElement.setAttribute('name', 'answer');
                optionElement.setAttribute('value', answer.value);
                optionElement.classList.add('answer-option');
                optionsElement.appendChild(optionElement);

                var labelElement = document.createElement('label');
                labelElement.innerText = answer.title;
                optionsElement.appendChild(labelElement);
            }

            nextButton.disabled = true;
            nextButton.addEventListener('click', onNextButtonClick);
            optionsElement.addEventListener('change', onAnswerSelectionChange);

            document.getElementById('question-container').style.display = 'block';
        }

        function onNextButtonClick() {
            if (currentQuestionIndex < screenerData.content.sections[0].questions.length - 1) {
                currentQuestionIndex++;
                displayQuestion();
            } else {
                var selectedAnswer = document.querySelector('input[name="answer"]:checked').value;
                var questionId = screenerData.content.sections[0].questions[currentQuestionIndex].question_id;
                submitScreenerData(questionId, selectedAnswer);
            }
        }

        function onAnswerSelectionChange() {
            var nextButton = document.getElementById('next-btn');
            nextButton.disabled = false;
        }

        function submitScreenerData(questionId, selectedAnswer) {
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    var data = {
        questionId: questionId,
        selectedAnswer: selectedAnswer,
        _token: csrfToken
    };

    fetch('/score-assessments', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(data)
    })
    .then(function(response) {
        if (response.ok) {
            console.log('Screener data submitted successfully');
            document.getElementById('success').innerText = 'Screener data submitted successfully';

        } else {
            console.error('Failed to submit screener data');
        }
    })
    .catch(function(error) {
        console.error('Error submitting screener data:', error);
    });
}



        displayQuestion();
    
    </script>
</body>
</html>
