<?php

/*
 * Student Description
 */

class Student
{
  /*
   * Constructor for the Student class
   */
  function __construct()
  {
    $this->surname = '';
    $this->first_name = '';
    $this->emails = array();
    $this->grades = array();
  }

  /*
   * Mutator method to add email to a student object
   */
  function add_email($which, $address)
  {
    $this->emails[$which] = $address;
  }

  /*
   * Mutator method to add grades to a student object
   */
  function add_grade($grade)
  {
    $this->grades[] = $grade;
  }

  /*
   * Calculate the average student grade from the $grades array
   */
  function average()
  {
    $total = 0;
    foreach ($this->grades as $value)
      $total += $value;
    return $total / count($this->grades);
  }

  /*
   * toString method for student record, returns student info with grade average
   */
  function toString()
  {
    $result = $this->first_name . ' ' . $this->surname;
    $result .= ' (' . $this->average() . ")\n";
    foreach ($this->emails as $which => $what)
      $result .= $which . ': ' . $what . "\n";
    $result .= "\n";
    return '<pre>' . $result . '</pre>';
  }
}