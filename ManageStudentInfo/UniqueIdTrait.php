<?php

namespace ManageStudentInfo;

trait UniqueIdTrait {
  protected $id;

  protected function generateUniqueId() {
    return uniqid();
  }
}
