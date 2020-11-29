<?php

use Pug\Facade as PugFacade;
use Emuravjev\Mdash\Typograph;

if (!function_exists('pug_editor_render')) {
    function pug_editor_render(string $text)
    {
        $text = PugFacade::render($text);
        return Typograph::fast_apply($text);
    }
}