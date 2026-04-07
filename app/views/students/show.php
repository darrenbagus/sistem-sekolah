<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL SISWA</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col bg-gray-100">
    <!-- Header Start -->
    <header class="bg-blue-800 text-white">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>
    <!-- Header end -->


    <main class="container mx-auto grow mt-8 space-y-4 ">
        <div class="mt-8">
            <div class="p-4 shadow-md rounded-lg bg-white">
                <h1 class="text-2xl font-bold">Detail Siswa</h1>
                <p>Menampilkan detail siswa yang terdaftar</p>
            </div>
    <!-- card Body start -->
            <div class="bg-white p-4 mt-4 shadow-md rounded-lg p-4">
            
            <div>

            <div class="space-y-2">

                <label class="block font-bold" for="name">Name</label>
                <input class="w-full px-4 py-2 border rounded-lg " type="text" id="name" placeholder="Masukkan nama" name="name" readonly>
            </div>
            
            <div class="space-y-2">

                <label class="block font-bold" for="nis">Nis</label>
                <input class="w-full px-4 py-2 border rounded-lg " type="text" id="nis" placeholder="Masukkan Nis" name="nis" readonly>
            </div>

            <div class="space-y-2">

                <label class="block font-bold" for="kelas">Kelas</label>
                <input class="w-full px-4 py-2 border rounded-lg " type="text" id="kelas" placeholder="Masukkan kelas" name="kelas" readonly>
            </div>

            <div class="space-y-2">

                <label class="block font-bold" for="telepon">Nomor Telepon</label>
                <input class="w-full px-4 py-2 border rounded-lg " type="text" id="telepon" placeholder="Masukkan nomor telepon" name="telepon" readonly>
            </div>

            <div class="flex justify-end col-span-2 space-x-4 mt-4  ">

                <a href="/students" class="py-2 px-4 bg-gray-100  rounded-lg">Kembali</a>
    
            </div>
 

        </div>

            </div>



        </div>
    </main>





    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?= date (format: 'Y') ?> Sistem Sekolah - SMK KRISTENEN IMMANUEL 
        </div>
    </footer>







</body>
</html>