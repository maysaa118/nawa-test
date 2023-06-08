<?php

namespace ManageStudentInfo ;

use  Student;
////use  ManageStudentInfo\Student;

trait Loggable {
    public function log(string $message) {
      $logFile = fopen('log.txt','a');
      fwrite($logFile , $message ."\n");
      //array,size,number,fileToSaveinit
      fclose($logFile);
    }
}
