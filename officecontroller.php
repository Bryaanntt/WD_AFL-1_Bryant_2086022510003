<?php

include("addmodel.php");    
include("model.php");       
include("officemodel.php"); 
session_start();

// Membuat data awal
if (!isset($_SESSION['office'])) {
    $_SESSION['office'] = array();

    $o1 = new office();
    $o1->NameKantor = "UC Surabaya";
    $o1->Address = "Jl. Raya Surabaya No. 1";
    $o1->City = "Surabaya";
    $o1->Phone = "031-1234567";
    $_SESSION['office'][] = $o1;

    $o2 = new office();
    $o2->NameKantor = "UC Makassar";
    $o2->Address = "Jl. Raya Makassar No. 2";
    $o2->City = "Makassar";
    $o2->Phone = "0411-7654321";
    $_SESSION['office'][] = $o2;

    $o3 = new office();
    $o3->NameKantor = "UC Jakarta";
    $o3->Address = "Jl. Raya Jakarta No. 3";
    $o3->City = "Jakarta";
    $o3->Phone = "021-9876543";
    $_SESSION['office'][] = $o3;
}

// Kalau form Tambah Office disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['NameKantor'])) {
    $baru = new office();
    $baru->NameKantor = $_POST['NameKantor'];
    $baru->Address = $_POST['Address'];
    $baru->City = $_POST['City'];
    $baru->Phone = $_POST['Phone'];
    $_SESSION['office'][] = $baru;

    header("Location: officeview.php");
    exit;
}

// Kalau link Delete diklik
if (isset($_GET['hapus'])) {
    unset($_SESSION['office'][$_GET['hapus']]);
    $_SESSION['office'] = array_values($_SESSION['office']);
    header("Location: officeview.php");
    exit;
}

$offices = $_SESSION['office'];
?>