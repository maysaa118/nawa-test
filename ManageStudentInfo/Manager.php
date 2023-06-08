<?php
namespace ManageStudentInfo ;

//use  ManageStudentInfo\Student;
//use  ManageStudentInfo\Loggable;

require_once 'Student.php';
require_once 'Loggable.php';

class Manager {
  use Loggable;

  public $students = array();

  public function addStudent($student) {
    $this->students[$student->getId()] = $student;
    $this->log("Added student with ID: " . $student->getId());
  }

  public function getStudentById($id): ?Student {
    if (isset($this->students[$id])) {
      return $this->students[$id];
    } else {
      return null;
    }
  }

  public function updateStudent($student) {
    if (isset($this->students[$student->getId()])) {
      $this->students[$student->getId()] = $student;
      $this->log("Updated student with ID: " . $student->getId());
    }
  }

  public function deleteStudent($id) {
    if (isset($this->students[$id])) {
      $student = $this->students[$id];
      unset($this->students[$id]);
      $this->log("Deleted student: ".$student->getId() , $student->getName());
    }
  }
}

?>