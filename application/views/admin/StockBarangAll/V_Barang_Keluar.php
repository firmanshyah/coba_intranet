<div class="mobile-menu-overlay"></div>

<div class="main-container flex-grow-1">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Header Keluar Barang Aktivasi-->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Keluar Barang</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Data Barang</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Form
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Header End Keluar Barang Aktivasi -->

            <!-- Form Keluar Barang Aktivasi -->
            <div class="card-box p-5">

                <?php foreach ($DataStock as $data) : ?>
                    <form method="POST" action="<?php echo base_url('admin/StockBarangAll/C_Barang_Keluar/TambahBarangKeluar') ?>">
                        <div class="form-group row">
                            <div class="row">
                                <input type="hidden" class="form-control" name="id_stockBarang" id="id_stockBarang" value="<?php echo $data['id_stockBarang'] ?>" readonly>
                                <input type="hidden" class="form-control" name="id_barang" id="id_barang" value="<?php echo $data['id_barang'] ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Nama Barang <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" placeholder="Masukkan Nama Barang..." readonly />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Jumlah <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="number" name="jumlah" min="0" max="<?php echo $StockBarang ?>" value="0" />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Tanggal<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="date" name="tanggal" placeholder="Tanggal..." />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Pegawai Yang Mengeluarkan <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <select id="id_pegawai" name="id_pegawai" class="form-control" required>
                                    <option value="">Pilih Pegawai :</option>
                                    <?php foreach ($DataPegawai as $dataPegawai) : ?>
                                        <option value="<?php echo $dataPegawai['id_pegawai']; ?>">
                                            <?php echo $dataPegawai['nama_pegawai']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Keterangan</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="keterangan" value="" placeholder="Masukkan Keterangan..." />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success mt-2 justify-content-end"><i class="bi bi-plus-circle"></i> Simpan</button>
                            </div>
                        </div>

                    </form>
                <?php endforeach; ?>
            </div>
            <!-- End Form Keluar Barang Aktivasi -->

        </div>
    </div>
</div>