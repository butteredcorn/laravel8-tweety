<?php
//loaded into the autoload function of the composer.json
function current_user()
{
    return auth()->user();
}