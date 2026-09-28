<?php

include("model.php");
include("addmodel.php");
session_start();

// Membuat data awal
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array();

    $awal1 = new officemember();
    $awal1->Nama = "Galih";
    $awal1->Jabatan = "Admin";
    $awal1->Usia = 20;
    $_SESSION['data'][] = $awal1;

    $awal2 = new officemember();
    $awal2->Nama = "Rama";
    $awal2->Jabatan = "Super Admin";
    $awal2->Usia = 19;
    $_SESSION['data'][] = $awal2;

    $awal3 = new officemember();
    $awal3->Nama = "Reynaldi";
    $awal3->Jabatan = "-";
    $awal3->Usia = 0;
    $_SESSION['data'][] = $awal3;
}

// Kalau form Tambah Karyawan disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Nama'])) {
    $baru = new officemember();
    $baru->Nama = $_POST['Nama'];
    $baru->Jabatan = $_POST['Jabatan'];
    $baru->Usia = $_POST['Usia'];
    $_SESSION['data'][] = $baru;

    header("Location: viewadd.php");
    exit;
}

// Kalau link Delete diklik
if (isset($_GET['hapus'])) {
    $namaYangDihapus = $_SESSION['data'][$_GET['hapus']]->Nama;
    unset($_SESSION['data'][$_GET['hapus']]);
    $_SESSION['data'] = array_values($_SESSION['data']);

    // Hapus juga mapping yang pakai nama karyawan ini
    if (isset($_SESSION['mapping'])) {
        $_SESSION['mapping'] = array_values(array_filter($_SESSION['mapping'], function($m) use ($namaYangDihapus) {
            return $m->Employee !== $namaYangDihapus;
        }));
    }

    header("Location: viewadd.php");
    exit;
}

$data = $_SESSION['data'];
?>