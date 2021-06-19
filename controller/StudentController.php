<?php

    include_once 'model/Student.php';

    class StudentController extends Student
    {
        private $student;

        public function __construct()
        {
            $this->student = new Student;
        }

        public function students()
        {
            $method = '';
            if (isset($_GET['method'])){
                $method = $_GET['method'];
            }

            switch ($method) {
                case 'add':
                    include_once 'views/students/add-students.php';
                    break;

                default:
                    $result = $this->student->getAllStudents();
                    include_once 'views/students/dashboard.php';
                    break;
            }

        }
    }