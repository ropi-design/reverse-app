<?php

use function Livewire\Volt\{state, mount};

state(['reverse']);

mount(function () {
    $this->reverse = strrev($this->reverse);
});

?>

<div>
    <p>
        {{ $reverse }}
    </p>
</div>