<?php

use function Livewire\Volt\{state, mount};

state(['word', 'mode']);

mount(function () {
    if ($this->mode === 'upper') {
        $this->word_mode = strtoupper($this->word);
    };
    if ($this->mode === 'lower') {
        $this->word_mode = strtolower($this->word);
    };
});

?>

<div>
    <h1>元の値</h1>
    <p>
        {{ $word }}
    </p>
    <h1>文字列を変換</h1>
    <p>
        {{ $this->word_mode }}
    </p>
</div>
