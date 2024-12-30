<?php
// Quiz App

$questions = [

    ['question' => 'What is 2 + 2?', 'correct' => '4'],

    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],

    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],

];


$answers = [];
foreach($questions as $index => $question) {
    echo ($index + 1) . $question['question'] . "\n";
    $answers[] = (int)readline("Write your answer: ");
}

// Score count 
function evaluateQuiz(array $questions, array $answers) {
    $score = 0;
    foreach($questions as $index => $questionsAns) {
        if($questionsAns['correct'] === $answers[$index]) {
            $score++;
        }
    }
    return $score;
}
//store score in the "score" variable
$score = evaluateQuiz($questions, $answers);


echo "You Scored {$score} out of " . count($questions) . "\n";

if($score == count($questions)) {
    echo " Exellent job! \n";
}elseif($score <= 1) {
    echo "Good Effort \n";
}else {
    echo "Better Luck Next Time \n";
}