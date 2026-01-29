<?php

require_once "./cinfo/config.php";
require_once "./pages/functions/functions.php";

$works = fetchWorks($pdo);

include("views/explore_view.php");