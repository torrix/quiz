<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Question extends Component
{
    public $question;
    public $questions;
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
        if ($this->question === count($this->questions)) {
            $this->question    = 0;
            $this->showAnswers = ! $this->showAnswers;
        } else {
            $this->question++;
        }
    }

    public function prev(): void
    {
        $this->question--;
    }

    public function render()
    {
        return view('livewire.question');
    }
}
