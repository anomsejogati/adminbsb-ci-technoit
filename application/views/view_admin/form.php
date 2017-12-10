<?php 
    function rupiah($nilai, $pecahan = 0) {
	    return number_format($nilai, $pecahan, ',', '.');        
    }
?>
<script>
    tinymce.init({
        selector: "textarea",theme: "modern",height: 500,
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
             "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
       ],
       toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
       toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
       image_advtab: true ,
       
       external_filemanager_path:"<?= base_url()?>tempsys/plugins/filemanager/",
       filemanager_title:"Responsive Filemanager" ,
       external_plugins: { "filemanager" : "<?= base_url()?>tempsys/plugins/filemanager/plugin.min.js"}
     });
</script>

<?php if($content=="add-aboutus"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Tambah Aboutus</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="<?= site_url('aboutus/create')?>" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" required>
                                        <label class="form-label">Judul</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="deskripsi" cols="30" rows="15" class="form-control no-resize" required></textarea>
                                    <label class="form-label">Deskripsi</label>
                                </div>
                            </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="edit-aboutus"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Ubah Aboutus</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="<?= site_url('aboutus/update')?>" method="POST">
                            <?php foreach($getdata as $row){?>
                            <input type="hidden" name="id_about" value="<?= $row->id_about?>"/>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" value="<?= $row->judul?>" required>
                                        <label class="form-label">Judul</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="deskripsi" cols="30" rows="15" class="form-control no-resize" required><?= $row->deskripsi?></textarea>
                                    <label class="form-label">Deskripsi</label>
                                </div>
                            </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="add-kategori-post"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Tambah Kategori Post</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="<?= site_url('kategoripost/create')?>" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kategori_post" required>
                                        <label class="form-label">Kategori Post</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="edit-kategori-post"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Ubah Kategori Post</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="<?= site_url('kategoripost/update')?>" method="POST">
                            <?php foreach($getdata as $row){?>
                            <input type="hidden" name="id_katpost" value="<?= $row->id_katpost?>"/>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kategori_post" value="<?= $row->kategori_post?>" required>
                                        <label class="form-label">Kategori Post</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="add-post"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Tambah Post</h2>
                        </div>
                        <div class="body">
                            <?php $attributes = array('id' => 'form_validation'); 
                            echo form_open_multipart('post/create', $attributes);?>
                                <div class="row clearfix">    
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="tgl_post"/>
                                                <label class="form-label">Tgl. Post</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="id_katpost">
                                            <option value="">-- Kategori --</option>
                                            <?php foreach ($list1 as $cmb){
                                                echo "<option value='$cmb[id_katpost]'>$cmb[kategori_post]</option>";
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" >
                                        <label class="form-label">Judul</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="headline" >
                                        <label class="form-label">Headline</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="foto_header" placeholder="Foto Header">
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="form-line">
                                    <textarea name="isi_post" cols="30" rows="15" placeholder="Isi Post" ></textarea>
                                </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="edit-post"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Ubah Post</h2>
                        </div>
                        <div class="body">
                            <?php $attributes = array('id' => 'form_validation'); 
                            echo form_open_multipart('post/update', $attributes);?>
                            <?php foreach($getdata as $row){?>
                            <input type="hidden" name="id_post" value="<?= $row->id_post?>"/>
                                <div class="row clearfix">    
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="tgl_post" data-date-format="dd-mm-yyyy" value="<?php echo date('d-m-Y', strtotime($row->tgl_post))?>"/>
                                                <label class="form-label">Tgl. Post</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="id_katpost">
                                        <option value="<?php echo set_value('id_katpost');echo $row->id_katpost ?>"><?php echo set_value('kategori_post'); echo $row->kategori_post ?></option>
                                            <?php foreach ($list1 as $cmb){
                                                echo "<option value='$cmb[id_katpost]'>$cmb[kategori_post]</option>";
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" value="<?= $row->judul?>">
                                        <label class="form-label">Judul</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="headline" value="<?= $row->headline?>">
                                        <label class="form-label">Headline</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="foto_header" placeholder="Foto Header">
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="form-line">
                                    <textarea name="isi_post" cols="30" rows="15" placeholder="Isi Post" ><?= $row->isi_post?></textarea>
                                </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php } echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="add-kategori-layanan"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Tambah Kategori Layanan</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="<?= site_url('kategorilayanan/create')?>" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kategori_layanan" required>
                                        <label class="form-label">Kategori Layanan</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="edit-kategori-layanan"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Ubah Kategori Layanan</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="<?= site_url('kategorilayanan/update')?>" method="POST">
                            <?php foreach($getdata as $row){?>
                            <input type="hidden" name="id_katlay" value="<?= $row->id_katlay?>"/>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kategori_layanan" value="<?= $row->kategori_layanan?>" required>
                                        <label class="form-label">Kategori Layanan</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="add-layanan"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Tambah Layanan</h2>
                        </div>
                        <div class="body">
                            <?php $attributes = array('id' => 'form_validation'); 
                            echo form_open('layanan/create', $attributes);?>
                                <div class="row clearfix">    
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="id_katlay">
                                            <option value="">-- Kategori Layanan --</option>
                                            <?php foreach ($list1 as $cmb){
                                                echo "<option value='$cmb[id_katlay]'>$cmb[kategori_layanan]</option>";
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_layanan" >
                                        <label class="form-label">Nama Layanan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="form-line">
                                    <textarea name="detail_layanan" cols="30" rows="15" placeholder="Detail Layanan" ></textarea>
                                </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="edit-layanan"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Ubah Layanan</h2>
                        </div>
                        <div class="body">
                            <?php $attributes = array('id' => 'form_validation'); 
                            echo form_open('layanan/update', $attributes);?>
                            <?php foreach($getdata as $row){?>
                            <input type="hidden" name="id_layanan" value="<?= $row->id_layanan?>"/>
                                <div class="row clearfix">    
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="id_katlay">
                                        <option value="<?php echo set_value('id_katlay');echo $row->id_katlay ?>"><?php echo set_value('kategori_layanan'); echo $row->kategori_layanan ?></option>
                                            <?php foreach ($list1 as $cmb){
                                                echo "<option value='$cmb[id_katlay]'>$cmb[kategori_layanan]</option>";
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_layanan" value="<?= $row->nama_layanan?>">
                                        <label class="form-label">Nama Layanan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="form-line">
                                    <textarea name="detail_layanan" cols="30" rows="15" placeholder="Detail Layanan" ><?= $row->detail_layanan?></textarea>
                                </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php } echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="add-kategori-develop"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Tambah Kategori Develop</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="<?= site_url('kategoridevelop/create')?>" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kategori_develop" required>
                                        <label class="form-label">Kategori Develop</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="edit-kategori-develop"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Ubah Kategori Develop</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="<?= site_url('kategoridevelop/update')?>" method="POST">
                            <?php foreach($getdata as $row){?>
                            <input type="hidden" name="id_katdev" value="<?= $row->id_katdev?>"/>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kategori_develop" value="<?= $row->kategori_develop?>" required>
                                        <label class="form-label">Kategori Develop</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="add-develop"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Tambah Develop</h2>
                        </div>
                        <div class="body">
                            <?php $attributes = array('id' => 'form_validation'); 
                            echo form_open('develop/create', $attributes);?>
                                <div class="row clearfix">    
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="id_katdev">
                                            <option value="">-- Kategori Develop --</option>
                                            <?php foreach ($list1 as $cmb){
                                                echo "<option value='$cmb[id_katdev]'>$cmb[kategori_develop]</option>";
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="harga" >
                                        <label class="form-label">Harga</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="form-line">
                                    <textarea name="des_produk" cols="30" rows="15" placeholder="Deskripsi Produk" ></textarea>
                                </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="edit-develop"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Ubah Develop</h2>
                        </div>
                        <div class="body">
                            <?php $attributes = array('id' => 'form_validation'); 
                            echo form_open('develop/update', $attributes);?>
                            <?php foreach($getdata as $row){?>
                            <input type="hidden" name="id_dev" value="<?= $row->id_dev?>"/>
                                <div class="row clearfix">    
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="id_katdev">
                                        <option value="<?php echo set_value('id_katdev');echo $row->id_katdev ?>"><?php echo set_value('kategori_develop'); echo $row->kategori_develop ?></option>
                                            <?php foreach ($list1 as $cmb){
                                                echo "<option value='$cmb[id_katdev]'>$cmb[kategori_develop]</option>";
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="harga" value="<?= $row->harga?>">
                                        <label class="form-label">Harga</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="form-line">
                                    <textarea name="des_produk" cols="30" rows="15" placeholder="Deskripsi Produk" ><?= $row->des_produk?></textarea>
                                </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php } echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="add-admin"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Tambah Admin</h2>
                        </div>
                        <div class="body">
                            <?php $attributes = array('id' => 'form_validation'); 
                            echo form_open_multipart('admin/create', $attributes);?>
                                <div class="row clearfix">    
                                    <div class="col-sm-2">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="id_admin"/>
                                                <label class="form-label">ID. Admin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_admin"/>
                                                <label class="form-label">Nama Admin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="level">
                                            <option value="">-- Level --</option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Operator">Operator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="foto" placeholder="Foto">
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>

<?php if($content=="edit-admin"){?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form : Ubah Admin</h2>
                        </div>
                        <div class="body">
                            <?php $attributes = array('id' => 'form_validation'); 
                            echo form_open_multipart('admin/update', $attributes);?>
                            <?php foreach($getdata as $row){?>
                                <div class="row clearfix">    
                                    <div class="col-sm-2">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="id_admin" value="<?= $row->id_admin?>" disabled/>
                                                <label class="form-label">ID. Admin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_admin" value="<?= $row->nama_admin?>"/>
                                                <label class="form-label">Nama Admin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="level">
                                            <option value="<?= $row->level?>"><?= $row->level?></option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Operator">Operator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="foto" placeholder="Foto">
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <?php } echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

<?php } ?>