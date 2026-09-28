<?php

include("addmodel.php");
include("model.php");
include("officemodel.php"); 
session_start();

// Daftar kantor
$daftarOffice = array();
if (isset($_SESSION['office'])) {
    foreach ($_SESSION['office'] as $o) {
        $daftarOffice[] = $o->NameKantor;
    }
} else {
    $daftarOffice = ["UC Surabaya", "UC Makassar", "UC Jakarta"]; 
}

// Membuat data kalau belum ada
if (!isset($_SESSION['mapping'])) {
    $_SESSION['mapping'] = array();

    $map1 = new officeemployee();
    $map1->Employee = "Galih";
    $map1->Office = "UC Surabaya";
    $_SESSION['mapping'][] = $map1;

    $map2 = new officeemployee();
    $map2->Employee = "Rama";
    $map2->Office = "UC Makassar";
    $_SESSION['mapping'][] = $map2;

    $map3 = new officeemployee();
    $map3->Employee = "Reynaldi";
    $map3->Office = "UC Surabaya";
    $_SESSION['mapping'][] = $map3;
}

// Kalau form SAVE disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['employee'])) {
    $baru = new officeemployee();
    $baru->Employee = $_POST['employee'];
    $baru->Office = $_POST['office'];
    $_SESSION['mapping'][] = $baru;

    header("Location: view.php");
    exit;
}

// Ambil daftar nama karyawan dari data yang sudah ada di viewadd.php (kalau ada)
$daftarKaryawan = array();
if (isset($_SESSION['data'])) {
    foreach ($_SESSION['data'] as $k) {
        $daftarKaryawan[] = $k->Nama;
    }
} else {
    $daftarKaryawan = ["Galih", "Rama", "Reynaldi"]; // fallback
}

$mapping = $_SESSION['mapping'];
?>