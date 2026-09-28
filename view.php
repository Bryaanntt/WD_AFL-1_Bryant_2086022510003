<?php
require_once 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Office Employees</title>
</head>
<body>
<div class="container p-3">
    <div class="d-flex flex-column mx-auto" style="width: max-content; min-width: 480px;">

        <nav class="navbar navbar-expand navbar-light rounded p-0 mb-0 w-100" style="background-color: #d0e8f5;">
            <div class="navbar-nav">
                <a class="nav-link" href="viewadd.php">Employee</a>
                <a class="nav-link" href="officeview.php">Office</a>
                <a class="nav-link active fw-bold href"="view.php">Office-Employees</a>
            </div>
        </nav>

        <div class="rounded p-4" style="border: 2px solid #6c757d;">

            <h2 class="text-center" style="color: #2c5f7c;">Office Employees</h2>

            <table class="table table-bordered">
                <thead style="background-color: #d0e8f5;">
                    <tr>
                        <th>Employee</th>
                        <th>Office</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mapping as $m): ?>
                    <tr>
                        <td><?= htmlspecialchars($m->Employee) ?></td>
                        <td><?= htmlspecialchars($m->Office) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <form method="POST" action="view.php" class="mt-4">
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Employee</label>
                    <div class="col-sm-9">
                        <select name="employee" class="form-select">
                            <?php foreach ($daftarKaryawan as $nama): ?>
                            <option value="<?= htmlspecialchars($nama) ?>"><?= htmlspecialchars($nama) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Office</label>
                    <div class="col-sm-9">
                        <select name="office" class="form-select">
                            <?php foreach ($daftarOffice as $kantor): ?>
                            <option value="<?= htmlspecialchars($kantor) ?>"><?= htmlspecialchars($kantor) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn" style="background-color: #7fc4e8; color: white;">SAVE</button>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>