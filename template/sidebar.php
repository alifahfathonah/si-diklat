<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url() ?>/assets/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text">SI-DIKLAT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-1 mb-1 d-flex">
            <div class="info">
                <a href="#" class="d-block"><i class="fas fa-user-circle mr-1"></i><b>
                        <?= $_SESSION['nm_user'] ?>
                    </b></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Menu</li>
                <?php if ($_SESSION['level'] == 1) { ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/" class="nav-link <?php if ($page == 'dashboard') {
                                                                                echo 'active';
                                                                            } ?>">
                            <i class="nav-icon fa fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview  <?php if (
                                                            $page == 'user' || $page == 'materi' || $page == 'tutor' || $page == 'ruangan'
                                                            || $page == 'instansi'
                                                        ) {
                                                            echo 'menu-open';
                                                        } ?>">
                        <a href="#" class="nav-link <?php if (
                                                        $page == 'user' || $page == 'materi' || $page == 'tutor' || $page == 'ruangan'
                                                        || $page == 'instansi'
                                                    ) {
                                                        echo 'active';
                                                    } ?>">
                            <i class="nav-icon fa fa-database"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/user/" class="nav-link <?php if ($page == 'user') {
                                                                                            echo 'active';
                                                                                        } ?>">
                                    <i class="fas fa-user mr-1"></i>
                                    <p>Data Pengguna</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/materi/" class="nav-link <?php if ($page == 'materi') {
                                                                                                echo 'active';
                                                                                            } ?>">
                                    <i class="fas fa-list mr-1"></i>
                                    <p>Data Materi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/tutor/" class="nav-link <?php if ($page == 'tutor') {
                                                                                                echo 'active';
                                                                                            } ?>">
                                    <i class="fas fa-user-tie mr-1"></i>
                                    <p>Data Tutor</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/ruangan/" class="nav-link <?php if ($page == 'ruangan') {
                                                                                                echo 'active';
                                                                                            } ?>">
                                    <i class="fas fa-person-booth mr-1"></i>
                                    <p>Data Ruangan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>/admin/instansi/" class="nav-link <?php if ($page == 'instansi') {
                                                                                                echo 'active';
                                                                                            } ?>">
                                    <i class="fas fa-building mr-1"></i>
                                    <p>Data Instansi</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/diklat/" class="nav-link <?php if ($page == 'diklat') {
                                                                                        echo 'active';
                                                                                    } ?>">
                            <i class="nav-icon fa fa-calendar-week"></i>
                            <p>
                                Data Diklat
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/peserta/" class="nav-link <?php if ($page == 'peserta') {
                                                                                        echo 'active';
                                                                                    } ?>">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                Data Peserta
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/pendaftaran/" class="nav-link <?php if ($page == 'pendaftaran') {
                                                                                            echo 'active';
                                                                                        } ?>">
                            <i class="nav-icon fa fa-file-signature"></i>
                            <p>
                                Data Pendaftaran Diklat
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/kehadiran/" class="nav-link <?php if ($page == 'kehadiran') {
                                                                                            echo 'active';
                                                                                        } ?>">
                            <i class="nav-icon fa fa-user-check"></i>
                            <p>
                                Data Kehadiran Diklat
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">Laporan</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-print"></i>
                            <p>
                                Laporan Cetak
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_diklat">
                                    <p><i class="fa fa-file-alt mr-1"></i> Diklat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_peserta">
                                    <p><i class="fa fa-file-alt mr-1"></i> Peserta Diklat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_kehadiran">
                                    <p><i class="fa fa-file-alt mr-1"></i> Kehadiran Peserta Diklat</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } else if ($_SESSION['level'] == 2) { ?>

                    <li class="nav-item">
                        <a href="<?= base_url() ?>/admin/" class="nav-link <?php if ($page == 'dashboard') {
                                                                                echo 'active';
                                                                            } ?>">
                            <i class="nav-icon fa fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">Laporan</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-print"></i>
                            <p>
                                Laporan Cetak
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_diklat">
                                    <p><i class="fa fa-file-alt mr-1"></i> Diklat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_peserta">
                                    <p><i class="fa fa-file-alt mr-1"></i> Peserta Diklat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#lap_kehadiran">
                                    <p><i class="fa fa-file-alt mr-1"></i> Kehadiran Peserta Diklat</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/peserta/" class="nav-link <?php if ($page == 'dashboard') {
                                                                                    echo 'active';
                                                                                } ?>">
                            <i class="nav-icon fa fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>/peserta/pendaftaran/" class="nav-link <?php if ($page == 'pendaftaran') {
                                                                                                echo 'active';
                                                                                            } ?>">
                            <i class="nav-icon fa fa-file-signature"></i>
                            <p>
                                Pendaftaran Diklat
                            </p>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

    </div>
    <!-- /.sidebar -->
</aside>

<div class="modal fade" id="lap_diklat" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Laporan Data Diklat</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/diklat/cetak') ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dari Tanggal</label>
                                <input type="date" class="form-control" name="tgl1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sampai Tanggal</label>
                                <input type="date" class="form-control" name="tgl2">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Materi</label>
                                <select name="id_materi" class="form-control select2" style="width: 100%;">
                                    <option value="">-- Pilih --</option>
                                    <?php $data = $con->query("SELECT * FROM materi ORDER BY id_materi DESC"); ?>
                                    <?php foreach ($data as $row) : ?>
                                        <option value="<?= $row['id_materi'] ?>"><?= $row['nm_materi'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group float-right">
                            <button type="submit" name="cetak" class="btn btn-info"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="lap_peserta" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Laporan Data Peserta Diklat</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/peserta/cetak') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Diklat</label>
                                <select name="id_diklat" class="form-control select2" style="width: 100%;">
                                    <option value="">-- Pilih --</option>
                                    <?php $data = $con->query("SELECT * FROM diklat ORDER BY tgl_mulai DESC"); ?>
                                    <?php foreach ($data as $row) : ?>
                                        <option value="<?= $row['id_diklat'] ?>"><?= $row['tema'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Asal Instansi</label>
                                <select name="id_instansi" class="form-control select2" style="width: 100%;">
                                    <option value="">-- Pilih --</option>
                                    <?php $data = $con->query("SELECT * FROM instansi ORDER BY id_instansi DESC"); ?>
                                    <?php foreach ($data as $row) : ?>
                                        <option value="<?= $row['id_instansi'] ?>"><?= $row['nm_instansi'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group float-right">
                            <button type="submit" name="cetak" class="btn btn-info"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="lap_kehadiran" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Laporan Data Kehadiran Peserta Diklat</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/kehadiran/cetak') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Berdasarkan Diklat</label>
                                <select name="id_diklat" class="form-control select2" style="width: 100%;" required>
                                    <option value="">-- Pilih --</option>
                                    <?php $data = $con->query("SELECT * FROM diklat ORDER BY tgl_mulai DESC"); ?>
                                    <?php foreach ($data as $row) : ?>
                                        <option value="<?= $row['id_diklat'] ?>"><?= $row['tema'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group float-right">
                            <button type="submit" name="cetak" class="btn btn-info"><i class="fa fa-print"> </i> Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>