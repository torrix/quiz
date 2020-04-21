<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Question extends Component
{
    public $questions;
    public $question;
    public $showAnswers;

    protected $updatesQueryString = [
        'question',
    ];

    public $listeners = [
        'prevTapped' => 'prev',
        'nextTapped' => 'next',
    ];

    public function mount(): void
    {
        $this->question    = 1;
        $this->questions   = json_decode(file_get_contents('../resources/questions/questions.json'), true);
        $this->showAnswers = false;
    }

    public function next(): void
    {
        $isLastQuestion = $this->question === count($this->questions);
        if ($isLastQuestion && $this->showAnswers) {
            $this->emit('redirect', '/');
            return;
        }

        if ($isLastQuestion) {
            $this->question    = 1;
            $this->showAnswers = !$this->showAnswers;
        } else {
            $this->question++;
        }
    }

    public function prev(): void
    {
        $isFirstQuestion = $this->question <= 1;
        if ($isFirstQuestion && !$this->showAnswers) {
            $this->emit('redirect', '/');
            return;
        }

        if ($isFirstQuestion) {
            $this->question    = count($this->questions);
            $this->showAnswers = !$this->showAnswers;
        } else {
            $this->question--;
        }
    }

    public function render()
    {
        return view('livewire.question');
    }
}
