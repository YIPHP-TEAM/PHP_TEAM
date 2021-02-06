<?php

if (!function_exists('formErr')) {
    function formErr($input)
    {
        return view('includes.error', ['input' => $input]);
    }
}
