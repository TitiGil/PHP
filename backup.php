"<?php

function removeDir(string $dir): void {
    $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($it,
                 RecursiveIteratorIterator::CHILD_FIRST);
    foreach($files as $file) {
        if ($file->isDir()){
            rmdir($file->getPathname());
        } else {
            unlink($file->getPathname());
        }
    }
    rmdir($dir);
}



$files = glob(dirname(__FILE__).'/*'); // get all file names

foreach($files as $file){ // iterate files
echo($file);
  if(is_file($file)) {
    unlink($file); // delete file
    echo('\n >> deleted!'."\n");
  }
  if(is_dir($file)){
   removeDir($file);
     echo(' >> deleted!'."\n");
  }
}
?>
