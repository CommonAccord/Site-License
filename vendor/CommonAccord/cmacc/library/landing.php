<?php

$lib_path = LIB_PATH;

$page="Website/landing.md";

$document = `perl $lib_path/parser-print.pl $path/$page`;

echo $document;

?>
