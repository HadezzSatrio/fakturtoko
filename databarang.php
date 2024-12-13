<?php
    include 'functions.php';
    $seluruhbarang = query('SELECT * FROM barang');
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
                            <li class="breadcrumb-item active">Data Barang</li>
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
                                    Data Barang
                                </h3>

                            <!-- <div class="card-tools">
                                    <form action="" method="GET">
                                        <div class="input-group">
                                            <input class="form-control" type="search" placeholder="Pencarian" name="cari" autocomplete="off">
                                            <div class="input-group-append mr-2">
                                                <button class="btn btn-info" type="submit">
                                                    <i class="fas fa-search mr-1"></i>
                                                    Cari
                                                </button>
                                            </div>
                                            <a class="btn btn-primary mr-2" href="tambah.php"><i class="fas fa-plus mr-1"></i>Tambah</a>
                                        </div>
                                </div>
                                </form>
                            </div> -->

                            <div class="card-tools">
                                <form action="#" method="GET">
                                    <div class="input-group">
                                        <div class="input-group-append mr-2">
                                        </div>
                                        <a class="btn btn-primary mr-2" href="tambahbarang.php"><i class="fas fa-plus mr-1"></i>Tambah</a>
                                    </div>
                            </div>
                            </form>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="tabel_barang" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> NO </th>
                                            <th> Kode Barang</th>
                                            <th> Nama Barang</th>
                                            <th> Harga Barang</th>
                                            <th> Operasi</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($seluruhbarang as $data) :?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data['kdbarang'];?></td>
                                            <td><?= $data['namabarang'];?></td>
                                            <td><?= $data['harga'];?></td>
                                            <td>
                                                <a class="btn btn-success mr-2" href="editbarang.php?kode=<?= $data['kdbarang'];?>"><i class="fas fa-edit mr-1"></i>Edit</a>
                                                <a class="btn btn-danger mr-2" href="hapusbarang.php?kode=<?= $data['kdbarang'];?>" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash mr-1"></i>Hapus</a>
                                                <!--<button class="btn btn-danger mr-2" onclick="confirmhapus()"><i class="fas fa-trash mr-1"></i>Hapus</button> -->
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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
    <!-- /.content-wrapper -->

    <!--<script>
        function confirmhapus(id) {
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Anda ingin hapus data ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {

                    window.location.href = 'hapus.php?id=' + id;
                }
            });
        }
    </script> -->

    <?php
    include 'template/footer.php';
    ?>