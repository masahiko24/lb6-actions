#!/usr/bin/env php
<?php

error_reporting(0);

$html = @htmlspecialchars($argv[1], ENT_NOQUOTES | ENT_HTML5);

echo json_encode([
    [
     "title" => $html,
     "subtitle" => "HTML Entities",
     "actionArgument" => $html,
     "icon" => "html" . (empty($html) ? "_d" : "")
    ]
]);
