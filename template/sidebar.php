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
                                Pendaftaran Diklat
                            </p>
                        </a>
                    </li>

                    <!-- <li class="nav-header">Laporan</li>
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
                                <a href="#" class="nav-link" target="_blank">
                                    <p>- Atlet</p>
                                </a>
                            </li>
                        </ul>
                    </li> -->
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

                    <!-- <li class="nav-header">Laporan</li>
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
                                <a href="#" data-toggle="modal" data-target="#lap_perolehan" class="nav-link">
                                    <p>- Perolehan Medali</p>
                                </a>
                            </li>
                        </ul>
                    </li> -->
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

<div class="modal fade" id="lap_perolehan" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Data Perolehan Medali</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" target="_blank" action="<?= base_url('admin/medali/cetak') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pilih Tahun</label>
                                <select class="form-control" name="tahun" required>
                                    <option value=""> -- Pilih -- </option>
                                    <?php
                                    $mulai = date('Y');
                                    for ($i = $mulai; $i < $mulai + 5; $i++) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    }
                                    ?>
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

<div class="modal fade" id="lap_cabang" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Data Perolehan Medali Pecabang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" target="_blank" action="<?= base_url('admin/medali/cetak-cabang') ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pilih Tahun</label>
                                <select class="form-control" id="thn" name="tahun" required>
                                    <option value=""> -- Pilih -- </option>
                                    <?php
                                    $mulai = date('Y');
                                    for ($i = $mulai; $i < $mulai + 5; $i++) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" id="gjl" hidden>
                                <label>Cabang Olahraga</label>
                                <select class="form-control" name="cabang" required>
                                    <option disabled selected> -- Pilih -- </option>
                                    <option value="Atletik">Atletik</option>
                                    <option value="Dayung">Dayung</option>
                                    <option value="Gulat">Gulat</option>
                                    <option value="Judo">Judo</option>
                                    <option value="Karate">Karate</option>
                                    <option value="Panahan">Panahan</option>
                                    <option value="Renang">Renang</option>
                                    <option value="Tae Kwon Do">Tae Kwon Do</option>
                                    <option value="Tinju">Tinju</option>
                                    <option value="Voli Pasir">Voli Pasir</option>
                                    <option value="Kempo">Kempo</option>
                                </select>
                            </div>
                            <div class="form-group" id="gnp" hidden>
                                <label>Cabang Olahraga</label>
                                <select class="form-control" name="cabang" required>
                                    <option disabled selected> -- Pilih -- </option>
                                    <option value="Sepak Bola">Sepak Bola</option>
                                    <option value="Pencak Silat">Pencak Silat</option>
                                    <option value="Bulutangkis">Bulutangkis</option>
                                    <option value="Sepak Takraw">Sepak Takraw</option>
                                    <option value="Tenis Lapangan">Tenis Lapangan</option>
                                    <option value="Tenis Meja">Tenis Meja</option>
                                    <option value="Voli Indoor">Voli Indoor</option>
                                    <option value="Bola Basket">Bola Basket</option>
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

<div class="modal fade" id="lap_klasemen" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Data Klasemen Medali</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" target="_blank" action="<?= base_url('admin/medali/cetak-klasemen') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pilih Tahun</label>
                                <select class="form-control" name="tahun" required>
                                    <option value=""> -- Pilih -- </option>
                                    <?php
                                    $mulai = date('Y');
                                    for ($i = $mulai; $i < $mulai + 5; $i++) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    }
                                    ?>
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