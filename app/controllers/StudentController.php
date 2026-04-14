<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Student.php';

use App\Core\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $studentModel = new Student();
        $students = $studentModel->getStudents();
        

        $this->view('students.index', ['students' => $students]);
    }
    

    public function create()
   {
        $this->view('students.create');
   }

   public function show(string $id)
   {
        // Logic untuk menampilkan detail siswa berdasarkan ID
        $this->view('students.show');
   }

    public function edit(string $id)
    {
        // Logic untuk menampilkan form edit siswa berdasarkan ID
        $this->view('students.edit');  
     }

}