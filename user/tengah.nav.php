<?php require_once 'atas.nav.php'; ?>
<br><br><br><br>
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40 nk-cyan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                      <li class="<?php if($titlePage == "Beranda") echo 'active'; ?>"><a href="home"><i class="fas fa-home"></i> Beranda</a>
                      </li>
                        <li class="<?php if($titlePage == "Software" && "Hardware") echo 'active'; ?>"><a data-toggle="tab" href="#Home"><img src="../assets/img/ico_kerusakan_hp.png" width="27px" height="27px"> Diagnosa</a>
                        </li>
                        <li class="<?php if($titlePage == "Riwayat") echo 'active'; ?>"><a data-toggle="tab" href="#hasil"><i class="fas fa-history"></i> Riwayat Diagnosa</a>
                        </li>
                        <li><a data-toggle="tab" href="#profil"><i class="fas fa-user"></i> Profil</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in notika-tab-menu-bg animated slideInDown <?php if($titlePage == "Software" && "Hardware") echo 'active'; ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="software.human"><i class="fas fa-mobile-alt"></i> SOFTWARE</a>
                                </li>
                                <li><a href="hardware.human"><i class="fas fa-cogs"></i> HARDWARE</a>
                                </li>
                            </ul>
                        </div>
                        <div id="hasil" class="tab-pane notika-tab-menu-bg animated slideInDown <?php if($titlePage == "Riwayat") echo 'active'; ?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="human.history"><i class="fas fa-mobile-alt"></i> RIWAYAT DIAGNOSA KERUSAKAN</a>
                                </li>
                            </ul>
                        </div>
                        <div id="profil" class="tab-pane notika-tab-menu-bg animated slideInDown">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="human.profil"><i class="fas fa-grin"></i> DETAIL PROFIL</a>
                                </li>
                                <li><a href="human.pengaturan"><i class="fas fa-cog"></i> PENGATURAN</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
