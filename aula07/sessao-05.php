<?php

require_once("./sessao-01.php");

session_id('p9129i3pcov500t7uts5nre537');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);