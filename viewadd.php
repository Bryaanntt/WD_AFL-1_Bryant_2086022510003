<?php
require_once 'addcontroller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Member Office</title>
</head>
<body>
    <div class="container p-3">
        <div class="d-flex flex-column mx-auto" style="width: max-content; min-width: 480px;">

        <nav class="navbar navbar-expand navbar-light rounded p-0 mb-0 w-100" style="background-color: #d0e8f5;">
            <div class="navbar-nav">
                <a class="nav-link active fw-bold" href="viewadd.php">Employee</a>
                <a class="nav-link" href="officeview.php">Office</a>
                <a class="nav-link" href="view.php">Office-Employees</a>
            </div>
        </nav>
        
        <div class="row justify-content-center">
            <div class="rounded p-4 mx-auto" style="border: 2px solid #6c757d; max-width: 900px; width: 95%;">
            <h2 class="text-center">List Karyawan</h2>
            <table class="table table-dark">
                <colgroup>
                    <col style="width: 10%">
                    <col style="width: 23%">
                    <col style="width: 32%">
                    <col style="width: 16%">
                    <col style="width: 50%">
                </colgroup>
                <thead>
                <tr>
                    <th> No </th>
                    <th> Nama </th>
                    <th> Jabatan </th>
                    <th> Usia </th>
                    <th> Delete </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $i => $karyawan): ?>
                <tr>
                    <td> <?= $i + 1 ?></td>
                    <td> <?= htmlspecialchars($karyawan->Nama) ?> </td>
                    <td> <?= htmlspecialchars($karyawan->Jabatan) ?> </td>
                    <td> <?= htmlspecialchars($karyawan->Usia) ?> </td>
                    <td> <a href="?hapus=<?= $i ?>"> Delete </a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>



            <h2 class="text-center">Tambah Karyawan</h2>
            <form method="POST" action="viewadd.php">
                <div class="mb-3">
                    <label for="exampleInputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleInputNama" name="Nama" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                    <label for="exampleInputJabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="exampleInputJabatan" name="Jabatan" placeholder="Masukkan Jabatan">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsia" class="form-label">Usia</label>
                    <input type="text" class="form-control" id="exampleInputUsia" name="Usia" placeholder="Masukkan Usia">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>

</html>


