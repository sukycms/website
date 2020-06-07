<?php

function flash(string $text, string $type = 'success') {
    session()->flash('notification', [
        'text' => $text,
        'icon' => $type,
        'timer' => 5000,
    ]);
}
