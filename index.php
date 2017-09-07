<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<?php
include('Student.php');

$students = array();

/*
 * Setting up student records
 */
$first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home', 'john@doe.com');
$first->add_email('work', 'jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home', 'albert@braniacs.com');
$second->add_email('work1', 'a_einstein@bcit.ca');
$second->add_email('work2', 'albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

$third = new Student();
$third->surname = "Student";
$third->first_name = "Best";
$third->add_email('home', 'best@student.com');
$third->add_email('work2', 'bests@bcit.edu');
$third->add_grade(99);
$third->add_grade(99);
$third->add_grade(99);
$students['a007'] = $third;

/*
 * Sorting the student array by the key used to add them to the array.
 */
ksort($students);

/*
 * Printing out the sorted student records
 */
foreach ($students as $student)
  echo $student->toString();
?>
</body>
