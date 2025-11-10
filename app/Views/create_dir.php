<?php
// Create directory structure
$dir = __DIR__ . '/ceylon_crafts';
if (!file_exists($dir)) {
    mkdir($dir, 0755, true);
    echo "Directory created successfully\n";
} else {
    echo "Directory already exists\n";
}
