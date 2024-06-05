<div class="footer-wrap pd-20 mb-20 bg-white mt-4">
    <div>Copyright &copy; My Infly Networks 2023</div>
</div>


<!-- welcome modal end -->
<!-- js -->
<script src="<?php echo base_url(); ?>vendors/scripts/core.js"></script>
<script src="<?php echo base_url(); ?>vendors/scripts/script.min.js"></script>
<script src="<?php echo base_url(); ?>vendors/scripts/process.js"></script>
<script src="<?php echo base_url(); ?>vendors/scripts/layout-settings.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/responsive.bootstrap4.min.js"></script>

<!-- buttons for Export datatable -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/vfs_fonts.js"></script>

<!-- Datatable Setting js -->
<script src="<?php echo base_url(); ?>vendors/scripts/datatable-setting.js"></script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- sweet alert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/scripts/select2.min.js"></script>


<!-- Ajax Show Data Customer -->
<script>
    $(document).ready(function() {
        $('#datacustomer').DataTable({
            "autoFill": true,
            "pagingType": 'numbers',
            "searching": true,
            "paging": true,
            "stateSave": true,
            "processing": true,
            "serverside": true,
            "ajax": {
                "url": "<?= base_url('admin/DataCustomer/C_Data_Customer/GetDataAjaxCustomer'); ?>",
            },
            "bDestroy": true
        })
    })
</script>

<!-- Ajax Show Data Customer Terminasi -->
<script>
    $(document).ready(function() {
        $('#terminasi').DataTable({
            "autoFill": true,
            "pagingType": 'numbers',
            "searching": true,
            "paging": true,
            "stateSave": true,
            "processing": true,
            "serverside": true,
            "ajax": {
                "url": "<?= base_url('admin/DataTerminasi/C_Data_Terminasi/GetDataAjax'); ?>",
            },
            "bDestroy": true
        })
    })
</script>


<!-- Alert Berhasil -->
<script>
    <?php if ($this->session->flashdata('berhasil_icon')) { ?>
        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'success',
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        toastMixin.fire({
            animation: true,
            title: '<?php echo $this->session->flashdata('berhasil_title') ?>'
        });

    <?php } ?>
</script>

<!-- Alert Gagal -->
<script>
    <?php if ($this->session->flashdata('gagal_icon')) { ?>
        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'warning',
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        toastMixin.fire({
            animation: true,
            title: '<?php echo $this->session->flashdata('gagal_title') ?>'
        });

    <?php } ?>
</script>

<!-- Edit Data Customer -->
<script>
    function EditDataCustomer(parameter_id) {
        Swal.fire({
            title: 'Yakin Melakukan Edit Data ?',
            text: "Data yang diedit tidak akan kembali",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Edit Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo site_url('admin/DataCustomer/C_Edit_Customer/EditCustomer') ?>/" + parameter_id;
            }
        })
    }
</script>

<!-- Delete Data Customer -->
<script>
    function DeleteCustomer(parameter_id) {
        Swal.fire({
            title: 'Yakin Melakukan Delete Data ?',
            text: "Data yang dihapus tidak akan kembali",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo site_url('admin/DataCustomer/C_Delete_Customer/DeleteDataCustomer') ?>/" + parameter_id;
            }
        })
    }
</script>

<!-- Terminasi Data Customer -->
<script>
    function TerminasiCustomer(parameter_id) {
        Swal.fire({
            title: 'Yakin Melakukan Terminasi Customer?',
            text: "Data yang terminasi tidak muncul di data pelanggan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Terminasi!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo site_url('admin/DataCustomer/C_Terminasi_Customer/TerminasiCustomer') ?>/" + parameter_id;
            }
        })
    }
</script>

<!-- Delete Data Terminasi Customer -->
<script>
    function DeleteTerminasi(parameter_id) {
        Swal.fire({
            title: 'Yakin Melakukan Delete Data ?',
            text: "Data yang dihapus akan aktif lagi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo site_url('admin/DataTerminasi/C_Delete_Terminasi/DeleteTerminasi') ?>/" + parameter_id;
            }
        })
    }
</script>

<!-- Edit Data Terminasi Customer -->
<script>
    function EditTerminasi(parameter_id) {
        Swal.fire({
            title: 'Yakin Melakukan Edit Data ?',
            text: "Data yang diedit tidak akan kembali",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Edit Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo site_url('admin/DataTerminasi/C_Edit_Terminasi/EditTerminasi') ?>/" + parameter_id;
            }
        })
    }
</script>

<!-- Button Search  -->
<script type="text/javascript">
    $('#pembelian_paket').each(function() {
        $(this).select2({
            placeholder: 'Pilih Paket',
            theme: 'bootstrap-5',
            dropdownParent: $(this).parent(),
        });
    });
    // Kota, Kecamatan dan Kelurahan
    $('#kota').each(function() {
        $(this).select2({
            placeholder: 'Pilih Kota / Kabupaten',
            theme: 'bootstrap-5',
            dropdownParent: $(this).parent(),
        });
    });
    $('#kecamatan').each(function() {
        $(this).select2({
            placeholder: 'Pilih Kecamatan',
            theme: 'bootstrap-5',
            dropdownParent: $(this).parent(),
        });
    });
    $('#kelurahan').each(function() {
        $(this).select2({
            placeholder: 'Pilih Kelurahan',
            theme: 'bootstrap-5',
            dropdownParent: $(this).parent(),
        });
    });

    // Select Function 
    $(document).ready(function() {
        $('#kota').on('change', function() {
            var id_kota = $(this).val();

            if (id_kota == '') {
                $('#kecamatan').prop('disabled', true);
            } else {
                $('#kecamatan').prop('disabled', false);
                $.ajax({
                    url: "<?php echo base_url('admin/DataCustomer/C_Add_Customer/getKecamatan') ?>",
                    type: "POST",
                    data: {
                        'id_kota': id_kota
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#kecamatan').html(data);
                    },
                    error: function() {
                        alert('Error..');
                    }

                });
            }
        });

        $('#kecamatan').on('change', function() {
            var id_kecamatan = $(this).val();

            if (id_kecamatan == '') {
                $('#kelurahan').prop('disabled', true);
            } else {
                $('#kelurahan').prop('disabled', false);
                $.ajax({
                    url: "<?php echo base_url('admin/DataCustomer/C_Add_Customer/getKelurahan') ?>",
                    type: "POST",
                    data: {
                        'id_kecamatan': id_kecamatan
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#kelurahan').html(data);
                    },
                    error: function() {
                        alert('Error..');
                    }

                });
            }
        });

    });
</script>

</body>


</html>