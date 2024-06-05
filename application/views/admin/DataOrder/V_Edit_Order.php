<div class="mobile-menu-overlay"></div>

<div class="main-container flex-grow-1">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Edit Purchase Order</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Data Order</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Form
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Form Edit Customer -->
            <div class="card-box p-5">

                <?php foreach ($DoneOrder as $data) : ?>
                    <form method="POST" action="<?php echo base_url('admin/DataOrder/C_Edit_Order/OrderSave') ?>">

                        <div class="form-group row">
                            <div class="row">
                                <input type="hidden" class="form-control" name="id_purchase_order" value="<?php echo $data['id_purchase_order'] ?>" readonly>
                                <input type="hidden" class="form-control" name="no_purchase_order" value="<?php echo $data['no_purchase_order'] ?>" readonly>
                                <input type="hidden" class="form-control" name="no_purchase_request" value="<?php echo $data['no_purchase_request'] ?>" readonly>
                                <input type="hidden" class="form-control" name="id_stockBarang" value="<?php echo $data['id_stockBarang'] ?>" readonly>
                                <input type="hidden" class="form-control" name="id_barang" value="<?php echo $data['id_barang'] ?>" readonly>
                                <input type="hidden" class="form-control" name="jumlah_pembelian_awal" value="<?php echo $data['jumlah_order'] ?>" readonly>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Nama Pembelian <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <select id="nama_pembelian" name="nama_pembelian" class="form-control" required>
                                    <option value="" disabled selected>Pilih Paket :</option>
                                    <?php foreach ($NamaBarang as $namabarang) : ?>
                                        <option value="<?php echo $namabarang['id_barang']; ?>" <?= $data['id_barang'] == $namabarang['id_barang'] ? 'selected' : null ?>><?php echo $namabarang['nama_barang']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> No Pesanan<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="no_pesanan" value="<?php echo $data['no_pesanan'] ?>" placeholder="Masukkan no pesanan / kode transaksi..." required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Nama Toko / Supplier<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="nama_supplier" value="<?php echo $data['nama_supplier'] ?>" placeholder="Masukkan nama toko / supplier..." required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Tanggal Order<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="date" name="tanggal_order" value="<?php echo $data['tanggal'] ?>" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Harga Barang<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="number" min="0" name="harga_barang" value="<?php echo $data['harga_barang'] ?>" placeholder="Masukkan harga barang..." required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Jumlah Pembelian<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="number" min="0" name="jumlah_pembelian" value="<?php echo $data['jumlah_order'] ?>" placeholder="Masukkan harga barang..." required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Keterangan<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="keterangan" value="<?php echo $data['keterangan'] ?>" placeholder="Masukkan keterangan..." required>
                            </div>
                        </div>

                        <div class=" form-group row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success mt-2 justify-content-end"><i class="bi bi-plus-circle"></i> Simpan</button>
                            </div>
                        </div>

                    </form>
                <?php endforeach; ?>
            </div>
            <!-- End Form Edit Customer -->


        </div>
    </div>
</div>