<?php

/**
 * Given a directory, retrieve a list of all files within directory and sub-directory (iterative or recursive).
 *
 * See https://github.com/lucian303/daemonstash for a web based interface I built to manage stored remote files
 *
 * @author Lucian Hontau
 */

$path = '.';
$dirIterator = new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS);
$fileIterator = new RecursiveIteratorIterator($dirIterator);

foreach ($fileIterator as $filename => $object)
{
    echo "$filename\n";
}
