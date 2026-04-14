<?php
namespace App\Models;
require_once '../app/core/Database.php';

use App\Core\Database;

class Student extends Database

{
    // Student model logic here
    protected $table = 'students';

    //fungsi untuk mengambil semua data siswa
    public function getStudents()
    {
        $students = [];
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }

        return $students;
    }
    
}


?>