<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function makeDir($path = '') {
  return is_dir($path) || mkdir($path);
}

function removeDir($path = '') {
  if (is_dir($path)) {
    $objects = scandir($path);
    foreach ($objects as $object) {
      if ($object != "." && $object != "..") {
        if (filetype($path . "/" . $object) == "path")
          rrmdir($path . "/" . $object);
        else
          unlink($path . "/" . $object);
      }
    }
    reset($objects);
    rmdir($path);
  }
}

function moveFile($pathTemp, $pathConfig, $inputFile) {
  $times = time();
  makeDir($pathConfig);
  @copy($pathTemp . $inputFile, $pathConfig . $times . '.jpeg');
  removeDir($pathTemp);
  makeDir($pathTemp);
  return $times.'jpeg';
}
