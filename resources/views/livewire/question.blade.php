<div>
    <div>
        @if ($question)
            <h2 class="uk-margin-remove">
                {{$questions[$question - 1]['round']}}
            </h2>
            <h3 class="uk-h6 uk-margin-remove">
                Question {{$question}} of {{count($questions)}}
            </h3>

            <hr>

            <div class="uk-grid uk-flex-middle" data-uk-grid>
                <div class="uk-width-auto">
                    <button class="uk-button uk-button-default" wire:click="prev">
                        &laquo;
                    </button>
                </div>
                <div class="uk-width-expand uk-text-center">
                    <p data-uk-height-viewport="expand: true" class=" uk-flex uk-flex-center uk-flex-middle uk-text-center">
                        {{$questions[$question - 1]['question']}}
                    </p>
                </div>
                <div class="uk-width-auto">
                    @if ($showAnswers && $question === count($questions))
                        <a href="/" class="uk-button uk-button-default">
                            Finish
                        </a>
                    @else
                        <button class="uk-button uk-button-default" wire:click="next">
                            &raquo;
                        </button>
                    @endif
                </div>
            </div>

            @if ($showAnswers)
                <div class="uk-alert uk-alert-success">
                    {{$questions[$question - 1]['answer']}}
                </div>
            @endif
        @else
            <p data-uk-height-viewport="expand: true" class="uk-flex uk-flex-middle uk-flex-center">
                <button class="uk-button uk-button-default" wire:click="next">
                    @if ($showAnswers)
                        Ready for the answers?
                    @else
                        Let's begin!
                    @endif
                </button>
            </p>
        @endif
        <audio autoplay loop>
            <source src="/mp3/chronos.mp3" type="audio/mp3">
        </audio>

        <script>
            document.addEventListener('keydown', event => {
                if (event.code === 'ArrowLeft') {
                    window.livewire.emit('prevTapped');
                }
                if (event.code === 'ArrowRight') {
                    window.livewire.emit('nextTapped');
                }
            });
        </script>
    </div>
</div>
