<?php require_once 'atas.nav.php'; ?>
<br><br><br><br>
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40 nk-teal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="<?php if($titlePage=="Beranda") echo 'active';?>"><a href="home"><i class="fas fa-laptop"></i> Dasbor</a>
                        </li>
                        <li class="<?php if($titlePage=="Software") echo 'active';?>"><a data-toggle="tab" href="#mastersoftware"><i class="fas fa-database"></i> Master Software</a>
                        </li>
                        <li class="<?php if($titlePage=="Hardware") echo 'active';?>"><a data-toggle="tab" href="#masterhardware"><i class="fas fa-database"></i> Master Hardware</a>
                        </li>
                        <li class="<?php if($titlePage=="User") echo 'active';?>"><a data-toggle="tab" href="#masteruser"><i class="fas fa-database"></i> Master User</a>
                        </li>
                        <li class="<?php if($titlePage=="Pakar") echo 'active';?>"><a data-toggle="tab" href="#profil"><i class="fas fa-user"></i> Profil</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="mastersoftware" class="tab-pane notika-tab-menu-bg animated slideInDown <?php if($titlePage=="Software") echo 'active';?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="software.kerusakan"><i class="fas fa-cog"></i> KERUSAKAN</a>
                                </li>
                                <li><a href="software.gejala"><i class="fas fa-search"></i> GEJALA/DIAGNOSA</a>
                                </li>
                                <li><a href="software.solusi"><i class="fas fa-check-square"></i> SOLUSI</a>
                                </li>
                                <li><a href="software.relasi"><i class="fas fa-code-branch"></i> RELASI KERUSAKAN <i class="fas fa-arrow-right"></i> GEJALA <i class="fas fa-arrow-right"></i> SOLUSI</a>
                                </li>
                            </ul>
                        </div>
                        <div id="masterhardware" class="tab-pane notika-tab-menu-bg animated slideInDown <?php if($titlePage=="Hardware") echo 'active';?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="hardware.kerusakan"><i class="fas fa-cog"></i> KERUSAKAN</a>
                                </li>
                                <li><a href="hardware.gejala"><i class="fas fa-search"></i> GEJALA/DIAGNOSA</a>
                                </li>
                                <li><a href="hardware.solusi"><i class="fas fa-check-square"></i> SOLUSI</a>
                                </li>
                                <li><a href="hardware.relasi"><i class="fas fa-code-branch"></i> RELASI KERUSAKAN <i class="fas fa-arrow-right"></i> GEJALA <i class="fas fa-arrow-right"></i> SOLUSI</a>
                                </li>
                            </ul>
                        </div>
                        <div id="masteruser" class="tab-pane notika-tab-menu-bg animated slideInDown <?php if($titlePage=="User") echo 'active';?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="user.lihat.php"><i class="fas fa-table"></i> DAFTAR USER</a>
                                </li>
                            </ul>
                        </div>
                        <div id="profil" class="tab-pane notika-tab-menu-bg animated slideInDown <?php if($titlePage=="Pakar") echo 'active';?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="pakar.profil"><i class="fas fa-user-tie"></i> DETAIL PROFIL</a>
                                </li>
                                <li><a href="pakar.pengaturan"><i class="fas fa-user-edit"></i> PENGATURAN</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
