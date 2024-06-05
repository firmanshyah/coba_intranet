<div class="mobile-menu-overlay"></div>

<div class="main-container flex-grow-1">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Header Keluar Barang Aktivasi Modem-->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Keluar Barang Aktivasi</h4>
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
            <!-- Header End Keluar Barang Aktivasi Modem-->

            <!-- Form Keluar Barang Aktivasi Modem -->
            <div class="card-box p-5">

                <?php foreach ($DataStock as $data) : ?>
                    <form method="POST" action="<?php echo base_url('admin/StockBarangAktivasi/C_Barang_Keluar/TambahBarangKeluar') ?>">
                        <div class="form-group row">
                            <div class="row">
                                <input type="hidden" class="form-control" name="id_stockBarang" id="id_stockBarang" value="<?php echo $data['id_stockBarang'] ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Nama Barang <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" placeholder="Masukkan Nama Barang..." readonly />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Nama Customer <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <select id="id_customer" name="id_customer" class="form-control" required>
                                    <option value="">Pilih Nama Customer :</option>
                                    <?php foreach ($CustomerModem as $dataCustomer) : ?>
                                        <option value="<?php echo $dataCustomer['id_customer']; ?>">
                                            <?php echo $dataCustomer['nama_customer']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> SN Modem <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="kode_barang" value="" placeholder="Masukkan SN Modem..." required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Pilih Adaptor</label>
                            <div class="col-sm-12 col-md-9">
                                <select id="adaptor" name="adaptor" class="form-control">
                                    <option value="">Pilih Adaptor :</option>
                                    <?php foreach ($DataAdaptor as $dataAdaptor) : ?>
                                        <option value="<?php echo $dataAdaptor['id_stockBarang']; ?>">
                                            <?php echo $dataAdaptor['nama_barang'] . ' = ' . $dataAdaptor['jumlah_stockBarang']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Pilih Kabel</label>
                            <div class="col-sm-12 col-md-9">
                                <select id="id_kabel" name="id_kabel" class="form-control" required>
                                    <option value="">Pilih Kabel :</option>
                                    <?php foreach ($DataKabel as $dataKabel) : ?>
                                        <option value="<?php echo $dataKabel['id_stockBarang']; ?>">
                                            <?php echo $dataKabel['nama_barang'] . ' = ' . $dataKabel['jumlah_stockBarang']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Ukuran Kabel </label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="number" name="ukuran_kabel" id="ukuran_kabel" min="0" max="" value="0" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Hitam UPC Outdor<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="Hitam_UPC" min="0" max="<?php echo $Hitam_UPC ?>" value="0" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Kuning APC (Hijau)<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="number" name="Kuning_APC" min="0" max="<?php echo $Kuning_APC ?>" value="0" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Kuning UPC (Biru)<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="number" name="Biru_UPC" min="0" max="<?php echo $Biru_UPC ?>" value="0" />
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
            <!-- End Form Keluar Barang Aktivasi Modem-->

        </div>
    </div>
</div>