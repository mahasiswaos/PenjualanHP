<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo URL::to('/Handphone'); ?>"><i class="glyphicon glyphicon-home"></i> Penjualan Handphone </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Pembeli <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/pembeli/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Tambah Data Pembeli</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/pembeli/view'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Tabel</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-asterisk"></i> Hp <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/Hp/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Tambah Data Hp</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/Hp'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-transfer"></i> TRANSAKSI<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/transaksi/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Tambah Data Transaksi</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/transaksi'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table Transaksi</a></li>
                </ul>
            </li>
        </ul>
        <!--        <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i> 
        <?php
        if (Auth::check()) {
            $user = Auth::user();
            echo $user->username;
        }
        ?>
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo URL::to('/login/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    </li>
                </ul>-->

    </div>
    <!-- /.navbar-collapse -->
</nav>