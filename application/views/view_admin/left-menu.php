<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?= base_url('media/foto-admin/source/'.$this->session->userdata('foto'))?>" width="58" height="58" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('nama_admin');?></div>
                    <div class="email"><?= $this->session->userdata('level');?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="<?= site_url('sysadmin/logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?= base_url()?>tempsys/index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('aboutus')?>">
                            <i class="material-icons">layers</i>
                            <span>Tentang TechnoIT</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Konten Umum</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?= site_url('kategoripost')?>">Kategori Post</a>
                            </li>
                            <li>
                                <a href="<?= site_url('post')?>">Data Post</a>
                            </li>
                            <li role="seperator" class="divider"></li>
                            <li>
                                <a href="<?= site_url('kategorilayanan')?>">Kategori Layanan</a>
                            </li>
                            <li>
                                <a href="<?= site_url('layanan')?>">Data Layanan</a>
                            </li>
                            <li role="seperator" class="divider"></li>
                            <li>
                                <a href="<?= site_url('kategoridevelop')?>">Kategori Develop</a>
                            </li>
                            <li>
                                <a href="<?= site_url('develop')?>">Data Develop Produk</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Order</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?= site_url('kategoriorder')?>">Kategori Order</a>
                            </li>
                            <li>
                                <a href="<?= site_url('order')?>">Data Order</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header"><a href="<?= site_url('admin')?>">Data Admin</a></li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminSYS - TechnoIT</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>