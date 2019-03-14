<?php

if (!function_exists('languages'))
{
    function languages()
    {
        return \App\Models\Language::all();
    }
}
