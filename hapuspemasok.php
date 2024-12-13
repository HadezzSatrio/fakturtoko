<?php
    include 'functions.php';
    $kdpemasok=$_GET["kode"];

    if(hapuspemasok($kdpemasok)>0){
        echo"<script>
            alert('Data Berhasil Dihapus');
            document.location.href='datapemasok.php';
        </script>";
    } else {
        echo"<script>
            alert('Data Gagal Dihapus');
            document.location.href='datapemasok.php';
        </script>";
    }
?>