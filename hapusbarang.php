<?php
    include 'functions.php';
    $kdbarang=$_GET["kode"];

    if(hapusbarang($kdbarang)>0){
        echo"<script>
            alert('Data Berhasil Dihapus');
            document.location.href='databarang.php';
        </script>";
    } else {
        echo"<script>
            alert('Data Gagal Dihapus');
            document.location.href='databarang.php';
        </script>";
    }
?>