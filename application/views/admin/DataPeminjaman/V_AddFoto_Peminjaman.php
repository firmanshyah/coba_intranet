<div class="mobile-menu-overlay"></div>

<div class="main-container flex-grow-1">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Header Tambah Pelanggan -->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Tambah Foto Peminjaman Barang</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Data Foto Peminjaman</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Form
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Header End Tambah Pelanggan -->

            <!-- Form Tambah Pelanggan -->
            <div class="card-box p-5">
                <form method="POST" action="<?php echo base_url('admin/DataPeminjaman/C_AddFoto_Peminjaman/TambahFotoPeminjaman') ?>" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Nama Pegawai <span class="text-danger">*</span></label>
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
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Tanggal Foto<span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control" type="date" name="tanggal_peminjaman" placeholder="Tanggal Foto Peminjaman..." required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Foto Peminjaman <span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input type="file" name="foto_peminjaman1" accept="image/*" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Foto Peminjaman<span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input type="file" name="foto_peminjaman2" accept="image/*" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-success mt-2 justify-content-end"><i class="bi bi-plus-circle"></i> Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- End Form Tambah Pelanggan -->


        </div>
    </div>
</div>