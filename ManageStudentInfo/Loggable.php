<?php


trait Loggable {
  const filename = "log.txt";
  
    public function log(string $message) {
      $logFile = fopen('log.txt','a');
      fwrite($logFile , $message ."\n");
      //array,size,number,fileToSaveinit
      fclose($logFile);
    }
}
