<?php
require_once 'officecontroller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Office</title>
</head>
<body>
<div class="container p-3">
    <div class="d-flex flex-column mx-auto" style="width: max-content; min-width: 480px;">

        <nav class="navbar navbar-expand navbar-light rounded p-2 mb-3 w-100" style="background-color: #d0e8f5;">
            <div class="navbar-nav">
                <a class="nav-link" href="viewadd.php">Employee</a>
                <a class="nav-link active fw-bold" href="officeview.php">Office</a>
                <a class="nav-link" href="view.php">Office-Employees</a>
            </div>
        </nav>

        <div class="rounded p-4" style="border: 2px solid #6c757d;">

            <h2 class="text-center" style="color: #2c5f7c;">List Office</h2>

            <table class="table table-bordered">
                <thead style="background-color: #d0e8f5;">
                    <tr>
                        <th>Nama Kantor</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Phone</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($offices as $i => $o): ?>
                    <tr>
                        <td><?= htmlspecialchars($o->NameKantor) ?></td>
                        <td><?= htmlspecialchars($o->Address) ?></td>
                        <td><?= htmlspecialchars($o->City) ?></td>
                        <td><?= htmlspecialchars($o->Phone) ?></td>
                        <td><a href="?hapus=<?= $i ?>">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2 class="text-center mt-4" style="color: #2c5f7c;">Tambah Office</h2>
            <form method="POST" action="officeview.php">
                <div class="mb-3">
                    <label for="exampleInputNameKantor" class="form-label">Name Kantor</label>
                    <input type="text" class="form-control" id="exampleInputNameKantor" name="NameKantor" placeholder="Masukkan Name Kantor">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleInputAddress" name="Address" placeholder="Masukkan Address">
                </div>
                <div class="mb-3">
                    <label for="exampleInputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="exampleInputCity" name="City" placeholder="Masukkan City">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleInputPhone" name="Phone" placeholder="Masukkan Phone">
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