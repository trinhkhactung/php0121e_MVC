<?php
    // Ket noi CSDL va thuc thi truy van: Liet ke, them, sua, xoa, tim kiem
    include_once 'config/Connect.php';

    class Student extends Connect
    {
        public function __construct()
        {
            parent::__construct(); // luon luon duoc ket noi CSDL va ton tai bien $this->pdo
        }

        // Viet cac ham truy van
        public function getAllStudents(){
            $sql = "SELECT *FROM students, faculty WHERE students.faculty_id  = faculty.id";
            return $this->pdo->query($sql);
        }
    }
