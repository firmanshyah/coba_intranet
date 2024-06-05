<div class="mobile-menu-overlay"></div>

<div class="main-container flex-grow-1">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Header Tambah Pelanggan -->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Tambah Pegawai</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo base_url('admin/DataPegawai/C_Data_Pegawai') ?>">Data Pegawai</a>
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
                <form method="POST" action="<?php echo base_url('admin/DataPegawai/C_Add_Pegawai/TambahPegawai') ?>" enctype="multipart/form-data">

                    <div class=" form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Nama Pegawai <span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control" name="nama_pegawai" placeholder="Masukkan nama pegawai..." />
                            <div class="bg-danger">
                                <small class="text-white"><?php echo form_error('nama_pegawai'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> NIK <span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control" name="nik" placeholder="Masukkan No Induk Karyawan..." />
                            <div class="bg-danger">
                                <small class="text-white"><?php echo form_error('nik'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Telephone<span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control" name="no_telpon" placeholder="Masukkan No Telephon..." />
                            <div class="bg-danger">
                                <small class="text-white"><?php echo form_error('no_telpon'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Alamat<span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control" name="alamat_pegawai" placeholder="Masukkan Alamat..." />
                            <div class="bg-danger">
                                <small class="text-white"><?php echo form_error('alamat_pegawai'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Pendidikan<span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <select name="pendidikan_pegawai" id="pendidikan_pegawai" class="custom-select col-12">
                                <option disabled selected>Pilih Pendidikan</option>
                                <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                            <div class="bg-danger">
                                <small class="text-white"><?php echo form_error('pendidikan_pegawai'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Jabatan<span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control" name="jabatan" placeholder="Masukkan Jabatan..." />
                            <div class="bg-danger">
                                <small class="text-white"><?php echo form_error('jabatan'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Tanggal Masuk<span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control" type="date" name="tanggal_masuk" placeholder="Tanggal Masuk..." />
                            <div class="bg-danger">
                                <small class="text-white"><?php echo form_error('tanggal_masuk'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Gaji<span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input class="form-control" name="gaji" placeholder="Masukkan Gaji..." />
                            <div class="bg-danger">
                                <small class="text-white"><?php echo form_error('gaji'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;"> Foto<span class="text-danger">*</span></label>
                        <div class="col-sm-12 col-md-9">
                            <input type="file" name="photo" accept="image/*" class="form-control-file form-control height-auto" required>
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