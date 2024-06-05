<div class="mobile-menu-overlay"></div>

<div class="main-container flex-grow-1">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">

                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6">
                        <div class="title">
                            <h4>Data Laporan Masuk</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Data Laporan</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Table
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <!-- <div class="col-6 col-xl-auto mt-2">
                        <div class="dropdown">
                            <a class="btn btn-info dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Fitur
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo base_url('admin/DataCustomer/C_Add_Customer') ?>">Tambah Customer</a>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="container card bg-secondary mt-2">
                    <form action="<?php echo base_url('admin/LaporanMasuk/C_Laporan_Masuk') ?>" method=" get">
                        <div class="row align-items-center justify-content-between p-2">

                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="text-white fs-2" for="tahun">Tahun : </label>
                                        <select class="form-control text-center" name="tahun" required>
                                            <?php
                                            if ($tahunGET == NULL) {
                                                echo '<option value="" disabled selected>-- Pilih Tahun --</option>';

                                                for ($i = 2022; $i <= 2025; $i++) {
                                                    if ($tahun == $i) {
                                                        echo '<option selected value=' . $i . '>' . date("Y", mktime(0, 0, 0, 1, 1, $i)) . '</option>' . "\n";
                                                    } else {
                                                        echo '<option value=' . $i . '>' . date("Y", mktime(0, 0, 0, 1, 1, $i)) . '</option>' . "\n";
                                                    }
                                                }
                                            } else {
                                                echo '<option value="" disabled>-- Pilih Tahun --</option>';

                                                for ($i = 2022; $i <= 2025; $i++) {
                                                    if ($tahunGET == $i) {
                                                        echo '<option selected value=' . $i . '>' . date("Y", mktime(0, 0, 0, 1, 1, $i)) . '</option>' . "\n";
                                                    } else {
                                                        echo '<option value=' . $i . '>' . date("Y", mktime(0, 0, 0, 1, 1, $i)) . '</option>' . "\n";
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="text-white fs-2" for="bulan">Bulan : </label>
                                        <select class="form-control text-center" name="bulan" required>
                                            <?php
                                            if ($bulanGET == NULL) {
                                                echo '<option value="" disabled>-- Pilih Bulan --</option>';

                                                for ($m = 1; $m <= 12; ++$m) {
                                                    if ($bulan == $m) {
                                                        echo '<option selected value=' . $m . '>' . date('F', mktime(0, 0, 0, $m, 1)) . '</option>' . "\n";
                                                    } else {
                                                        echo '<option  value=' . $m . '>' . date('F', mktime(0, 0, 0, $m, 1)) . '</option>' . "\n";
                                                    }
                                                }
                                            } else {
                                                echo '<option value="" disabled>-- Pilih Bulan --</option>';

                                                for ($m = 1; $m <= 12; ++$m) {
                                                    if ($bulanGET == $m) {
                                                        echo '<option selected value=' . $m . '>' . date('F', mktime(0, 0, 0, $m, 1)) . '</option>' . "\n";
                                                    } else {
                                                        echo '<option  value=' . $m . '>' . date('F', mktime(0, 0, 0, $m, 1)) . '</option>' . "\n";
                                                    }
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-xl-auto mt-2">
                                <button type="submit" class="btn btn-info mt-2 justify-content-start">Tampilkan</button>
                            </div>

                        </div>


                    </form>
                </div>
            </div>

            <div class="card-box">
                <div class="container-fluid">
                    <div class="p-2" style="overflow-x: auto;">
                        <table id="laporanmasuk" class="table table-bordered responsive nowrap" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="15%">Nama Barang</th>
                                    <th width="15%">Kode Barang</th>
                                    <th width="10%">Jumlah</th>
                                    <th width="10%">Tanggal</th>
                                    <th width="15%">Nama Pegawai</th>
                                    <th width="15%">Keterangan</th>
                                </tr>
                            </thead>
                        </table>


                    </div>
                </div>
                <!-- End Table Data Customer -->


            </div>
        </div>
    </div>
</div>