<?php
    $conn = mysqli_connect ('localhost','root','','fakturtoko');

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

    function tambahbarang($data)
    {
        global $conn;
        $kdbarang = htmlspecialchars($data['kdbarang']);
        $namabarang = htmlspecialchars($data['namabarang']);
        $harga = htmlspecialchars($data['harga']);

        $query = "INSERT INTO barang
                    VALUES
                ('$kdbarang','$namabarang','$harga')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function editbarang($data)
    {
        global $conn;
        $kdbarang = htmlspecialchars($data["kode"]);
        $namabarang = htmlspecialchars($data['namabarang']);
        $harga = htmlspecialchars($data['harga']);

        $query = "UPDATE barang SET namabarang='$namabarang', harga='$harga' WHERE kdbarang='$kdbarang'";

        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function hapusbarang($kdbarang)
    {
        global $conn;

        $query = "DELETE FROM barang WHERE kdbarang='$kdbarang'";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    
    function tambahpemasok($data)
    {
        global $conn;
        $kdpemasok = htmlspecialchars($data['kdpemasok']);
        $namapemasok = htmlspecialchars($data['namapemasok']);

        $query = "INSERT INTO pemasok
                    VALUES
                ('$kdpemasok','$namapemasok')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    
    function editpemasok($data)
    {
        global $conn;
        $kdpemasok = htmlspecialchars($data["kode"]);
        $namapemasok = htmlspecialchars($data['namapemasok']);

        $query = "UPDATE pemasok SET namapemasok='$namapemasok' WHERE kdpemasok='$kdpemasok'";

        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function hapuspemasok($kdpemasok)
    {
        global $conn;

        $query = "DELETE FROM pemasok WHERE kdpemasok='$kdpemasok'";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
?>