<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';

use App\Core\Controller;

class StudentController extends Controller
{
    public function index()
    {
        $this->__view('students.index');
    }
    

    public function create()
   {
        $this->__view('students.create');
   }

   public function show(string $id)
   {
        // Logic untuk menampilkan detail siswa berdasarkan ID
        $this->__view('students.show', ['id' => $id]);
   }

    public function edit(string $id)
    {
        // Logic untuk menampilkan form edit siswa berdasarkan ID
        $this->__view('students.edit', ['id' => $id])  ;
     }

}