<?php
  $folder = 'images/';
  $images = [];
  foreach(scandir($folder) as $file) {
    if($file != '.' && $file != '..') {
      $images[] = ['src' => $folder . $file];
    }
  }
  echo json_encode($images, true);
