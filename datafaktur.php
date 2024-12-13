<?php
    include 'functions.php';
    $seluruhfaktur = 
    query(
        'SELECT 
            faktur.nofaktur, 
            faktur.tanggal, 
            pemasok.kdpemasok, 
            pemasok.namapemasok, 
            barang.kdbarang, 
            barang.namabarang, 
            dfaktur.qty, 
            barang.harga, 
            (dfaktur.qty * barang.harga) AS total, 
            SUM(dfaktur.qty * barang.harga) OVER (PARTITION BY faktur.nofaktur) AS totalfaktur, 
            faktur.tempo
                FROM 
                    faktur
                INNER JOIN 
                    pemasok ON pemasok.kdpemasok = faktur.kdpemasok
                INNER JOIN 
                    dfaktur ON faktur.nofaktur = dfaktur.nofaktur
                INNER JOIN 
                    barang ON barang.kdbarang = dfaktur.kdbarang;
        ');
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
                            <li class="breadcrumb-item active">Data Faktur</li>
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
                                    Data Faktur
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
                                        <!--<a class="btn btn-primary mr-2" href="tambahfaktur.php"><i class="fas fa-plus mr-1"></i>Tambah</a> -->
                                    </div>
                            </div>
                            </form>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="tabel_faktur" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> NO </th>
                                            <th> Nomor Faktur </th>
                                            <th> Tanggal </th>
                                            <th> Kode Pemasok </th>
                                            <th> Nama Pemasok </th>
                                            <th> Kode Barang </th>
                                            <th> Nama Barang </th>
                                            <th> Quantity </th>
                                            <th> Total </th>
                                            <th> Total Faktur</th>
                                            <th> Tempo </th>
                                            <!--<th> Operasi </th> -->
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($seluruhfaktur as $data) :?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data['nofaktur'];?></td>
                                            <td><?= $data['tanggal'];?></td>
                                            <td><?= $data['kdpemasok'];?></td>
                                            <td><?= $data['namapemasok'];?></td>
                                            <td><?= $data['kdbarang'];?></td>
                                            <td><?= $data['namabarang'];?></td>
                                            <td><?= $data['qty'];?></td>
                                            <td><?= $data['total'];?></td>
                                            <td><?= $data['totalfaktur'];?></td>
                                            <td><?= $data['tempo'];?></td>
                                            <!--<td>
                                                <a class="btn btn-success mr-2" href="editfaktur.php?kode=<?= $data['nofaktur'];?>"><i class="fas fa-edit mr-1"></i>Edit</a>
                                                <a class="btn btn-danger mr-2" href="hapusfaktur.php?kode=<?= $data['nofaktur'];?>" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash mr-1"></i>Hapus</a>
                                                <button class="btn btn-danger mr-2" onclick="confirmhapus()"><i class="fas fa-trash mr-1"></i>Hapus</button>
                                            </td> -->
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