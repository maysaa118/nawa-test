<?php

class Student {

  public readonly int $studentId;
  public string $studentName;
  public string $studentEmail;
  public $studentCourses = array();

  public function __construct(int $studentId, string $studentName, string $studentEmail) {
    $this->id = $studentId;
    $this->name = $studentName;
    $this->email = $studentEmail;
  }

  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }

  public function addCourse(string $studentCourses) {
    $this->courses[] = $studentCourses;
  }

  public function getCourses() {
    return $this->courses;
  }
}
?>