<?php

class View
{
    function __construct()
    {
        // echo "<p>View base!</p>";
    }

    function render($nombre)
    {
        require 'views/' . $nombre . '.php';
    }
}
