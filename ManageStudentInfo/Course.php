<?php

namespace ManageStudentInfo ;

use Student;

class Course {
  public readonly int $courseID;
  public string $courseName;

  public function __construct(int $courseID, string $ocurseName) {
    $this->courseName = $courseName;
    $this->courseId = $courseID;
  }

  public function getName() {
    return $this->CuorseName;
  }

  public function getId() {
    return $this->courseId;
  }
}