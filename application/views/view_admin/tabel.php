<?php 
    function rupiah($nilai, $pecahan = 0) {
	    return number_format($nilai, $pecahan, ',', '.');        
    }
?>

<?php if($content=="tabel-aboutus"){?>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Aboutus
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?= site_url('aboutus/add')?>">[+] Tambah</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Judul</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($data_aboutus as $row){ ?>
                                        <tr>
                                            <td><?= $row->id_about; ?></td>
                                            <td><?= $row->judul; ?></td>
                                            <td>
                                            <a title="Ubah" href="<?= site_url('aboutus/edit/'.$row->id_about)?>"><button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">border_color</i></button></a>
                                            <a title="Hapus" href="<?= site_url('aboutus/delete/'.$row->id_about)?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete_sweep</i></button></a>
                                            </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

<?php } ?>

<?php if($content=="tabel-kategori-post"){?>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kategori Post
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?= site_url('kategoripost/add')?>">[+] Tambah</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kategori Post</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                        <th>Kategori Post</th>
                                        <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($getdata as $row){ ?>
                                        <tr>
                                            <td><?= $row->id_katpost; ?></td>
                                            <td><?= $row->kategori_post; ?></td>
                                            <td>
                                            <a title="Ubah" href="<?= site_url('kategoripost/edit/'.$row->id_katpost)?>"><button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">border_color</i></button></a>
                                            <a title="Hapus" href="<?= site_url('kategoripost/delete/'.$row->id_katpost)?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete_sweep</i></button></a>
                                            </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

<?php } ?>

<?php if($content=="tabel-post"){?>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Post
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?= site_url('post/add')?>">[+] Tambah</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th width=5%>No.</th>
                                            <th width=15%>Tgl. Post</th>
                                            <th width=60%>Judul</th>
                                            <th width=20%></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width=5%>No.</th>
                                            <th width=15%>Tgl. Post</th>
                                            <th width=60%>Judul</th>
                                            <th width=20%></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1; foreach($getdata as $row){ ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= date('d-M-Y', strtotime($row->tgl_post)); ?></td>
                                            <td><?= $row->judul."<br>Kategori : ".$row->kategori_post."<br><b><font color='red'>Status Aktif : ".$row->post_aktif."</font>   | <font color='blue'>Suka : ".$row->jml_like."</font>   | User : ".$row->nama_admin."</b>"; ?></td>
                                            <td class="center">
                                                <a title="Ubah" href="<?= site_url('post/edit/'.$row->id_post)?>"><button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">border_color</i></button></a>
                                                <a title="Hapus" href="<?= site_url('post/delete/'.$row->id_post)?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete_sweep</i></button></a>
                                                <?php if($row->post_aktif == "0" ){ ?>
                                                    &nbsp;<a title="Set Aktif" href="<?= site_url('post/aktif/'.$row->id_admin)?>"><button type="button" class="btn bg-grey btn-circle waves-effect waves-circle waves-float"><i class="material-icons">location_searching</i></button></a>
                                                    <?php }else{?>
                                                    &nbsp;<a title="Set non Aktif" href="<?= site_url('post/non_aktif/'.$row->id_admin)?>"><button type="button" class="btn bg-deep-orange btn-circle waves-effect waves-circle waves-float"><i class="material-icons">lock</i></button></a>
                                                    <?php }?>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

<?php } ?>

<?php if($content=="tabel-kategori-layanan"){?>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kategori Layanan
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?= site_url('kategorilayanan/add')?>">[+] Tambah</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kategori Layanan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                        <th>Kategori Layanan</th>
                                        <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($getdata as $row){ ?>
                                        <tr>
                                            <td><?= $row->id_katlay; ?></td>
                                            <td><?= $row->kategori_layanan; ?></td>
                                            <td>
                                            <a title="Ubah" href="<?= site_url('kategorilayanan/edit/'.$row->id_katlay)?>"><button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">border_color</i></button></a>
                                            <a title="Hapus" href="<?= site_url('kategorilayanan/delete/'.$row->id_katlay)?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete_sweep</i></button></a>
                                            </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

<?php } ?>

<?php if($content=="tabel-layanan"){?>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Layanan
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?= site_url('layanan/add')?>">[+] Tambah</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Layanan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                        <th>Layanan</th>
                                        <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($getdata as $row){ ?>
                                        <tr>
                                            <td><?= $row->id_layanan; ?></td>
                                            <td><?= $row->nama_layanan."<br>Kategori : ".$row->kategori_layanan."&nbsp;&nbsp; | <b>User : ".$row->nama_admin."</b>"; ?></td>
                                            <td>
                                            <a title="Ubah" href="<?= site_url('layanan/edit/'.$row->id_layanan)?>"><button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">border_color</i></button></a>
                                            <a title="Hapus" href="<?= site_url('layanan/delete/'.$row->id_layanan)?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete_sweep</i></button></a>
                                            </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

<?php } ?>

<?php if($content=="tabel-kategori-develop"){?>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kategori Develop
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?= site_url('kategoridevelop/add')?>">[+] Tambah</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kategori Develop</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                        <th>Kategori Develop</th>
                                        <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($getdata as $row){ ?>
                                        <tr>
                                            <td><?= $row->id_katdev; ?></td>
                                            <td><?= $row->kategori_develop; ?></td>
                                            <td>
                                            <a title="Ubah" href="<?= site_url('kategoridevelop/edit/'.$row->id_katdev)?>"><button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">border_color</i></button></a>
                                            <a title="Hapus" href="<?= site_url('kategoridevelop/delete/'.$row->id_katdev)?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete_sweep</i></button></a>
                                            </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

<?php } ?>

    <?php if($content=="tabel-develop"){?>
                <!-- Basic Examples -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Data Develop
                                </h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="<?= site_url('develop/add')?>">[+] Tambah</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Develop</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>
                                            <th>Develop</th>
                                            <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php foreach($getdata as $row){ ?>
                                            <tr>
                                                <td><?= $row->id_dev; ?></td>
                                                <td><?= $row->des_produk."<br>Kategori : ".$row->kategori_develop."&nbsp;&nbsp; | <b>User : ".$row->nama_admin."</b>"; ?></td>
                                                <td>
                                                <a title="Ubah" href="<?= site_url('develop/edit/'.$row->id_dev)?>"><button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">border_color</i></button></a>
                                                <a title="Hapus" href="<?= site_url('develop/delete/'.$row->id_dev)?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete_sweep</i></button></a>
                                                </td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Examples -->

    <?php } ?>

    <?php if($content=="tabel-admin"){?>
                <!-- Basic Examples -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Data Admin
                                </h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="<?= site_url('admin/add')?>">[+] Tambah</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID. Admin</th>
                                                <th>Nama Admin</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>
                                            <th>Nama Admin</th>
                                            <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php foreach($getdata as $row){ ?>
                                            <tr>
                                                <td><?= $row->id_admin; ?></td>
                                                <td><?= $row->nama_admin."<br>Level : ".$row->level."&nbsp;&nbsp; | <b>Aktif : ".$row->aktif." &nbsp; | Status : ".$row->status_login."</b>"; ?></td>
                                                <td>
                                                    <a title="Ubah" href="<?= site_url('admin/edit/'.$row->id_admin)?>"><button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">border_color</i></button></a>
                                                    <a title="Hapus" href="<?= site_url('admin/delete/'.$row->id_admin)?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete_sweep</i></button></a>
                                                    <a title="Reset Password" href="<?= site_url('admin/reset_password/'.$row->id_admin)?>"><button type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float"><i class="material-icons">settings_backup_restore</i></button></a>
                                                    <?php if($row->aktif == "0" ){ ?>
                                                    &nbsp;<a title="Set Aktif" href="<?= site_url('admin/aktif/'.$row->id_admin)?>"><button type="button" class="btn bg-grey btn-circle waves-effect waves-circle waves-float"><i class="material-icons">location_searching</i></button></a>
                                                    <?php }else{?>
                                                    &nbsp;<a title="Set non Aktif" href="<?= site_url('admin/non_aktif/'.$row->id_admin)?>"><button type="button" class="btn bg-deep-orange btn-circle waves-effect waves-circle waves-float"><i class="material-icons">lock</i></button></a>
                                                    <?php }?>
                                                </td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Examples -->

    <?php } ?>