<?php

$exceptFile = [];
$files = File::allFiles(base_path('routes/web'));
foreach($files as $file) {
    if(!in_array($file->getFileName(), $exceptFile))
        include $file->getPathName();
}

