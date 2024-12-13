<?php
    include "functions.php";
    if (isset($_POST["submit"])){
        if(tambahpemasok($_POST)>0){
            echo "<script>
            alert('Data Berhasil Ditambah');
            document.location.href = 'datapemasok.php'
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal Ditambah');
            document.location.href = 'datapemasok.php'
            </script>";
        }
    }
?>
<?php
include 'template/header.php';
include 'template/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Master</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Data Master</li>
                        <li class="breadcrumb-item active">Data Pemasok</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Input Data Pemasok
                            </h3>
                            <div class="card-tools">

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="kdpemasok" class="col-sm-2 col-form-label">Kode Pemasok</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kdpemasok" id="kdpemasok" placeholder="Masukkan kdpemasok" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namapemasok" class="col-sm-2 col-form-label">Nama Pemasok</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="namapemasok" name="namapemasok" placeholder="Masukkan Nama Pemasok" autocomplete="off">
                                    </div>
                                </div>
                            </div> 
                            <div class="card-footer">
                                <button class="btn btn-info" onclick="history.back()">Kembali</button>
                                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php
include 'template/footer.php';
?>