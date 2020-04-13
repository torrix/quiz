<?php

namespace App\Http\Controllers;

class QuestionController extends Controller
{
    public function question(string $quiz, int $questionNumber)
    {
        return $this->showQuestion($quiz, $questionNumber);
    }

    public function answer(string $quiz, int $questionNumber)
    {
        return $this->showQuestion($quiz, $questionNumber, true);
    }

    public function showQuestion(string $quiz, int $questionNumber, bool $showAnswers = false)
    {
        $questions = json_decode(file_get_contents('../resources/questions/questions.json'), true);

        $question = $questions[$questionNumber - 1];

        $nextQuestion = isset($questions[$questionNumber]) ? $questionNumber + 1 : false;

        return view(
            'question',
            [
                'quiz'           => $quiz,
                'questionNumber' => $questionNumber,
                'roundName'      => $question['round'],
                'question'       => $question['question'],
                'answer'         => $question['answer'],
                'nextQuestion'   => $nextQuestion,
                'showAnswers'    => $showAnswers,
            ]
        );
    }
}
