<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
    </button>
        <a class="navbar-brand" href="<?php echo base_url().'mobile/home'?>">Apotek Sehat</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="<?php echo base_url().'mobile/home'?>">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-stethoscope"></i> Produk<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="drp" href="<?php echo base_url().'mobile/menu/obatluar'?>">
                        <i class="fa fa-medkit"></i> Ethical
                    </a>
                </li>

                <li>
                    <a class="drp" href="<?php echo base_url().'mobile/menu/obatdalam'?>">
                        <i class="fa fa-medkit"></i> Generic
                    </a>
                </li>
            </ul>
        </li>
        
        
        <?php if($this->session->userdata('online') == TRUE):?>
        <li>
            <a href="<?php echo base_url().'mobile/menu/cart'?>">
                <i class="fa fa-shopping-cart"></i> Keranjang (<?=$this->cart->total_items();?>)
            </a>
        </li>
         <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-paper-plane-o"></i> Pesanan<span class="caret"></span></a>
            <ul class="dropdown-menu">
                 <li>
                    <a href="<?php echo base_url().'mobile/tracker'?>">
                        <i class="fa fa-info"></i> &nbsp; Status
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'mobile/konfirmasi'?>">
                        <i class="fa fa-exchange"></i> Konfirmasi
                    </a>
                </li>
                
                <li>
                    <a href="<?php echo base_url().'mobile/myfood'?>">
                        <i class="fa fa-history"></i> Riwayat
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="<?php echo base_url().'mobile/member/logout'?>">
                <i class="fa fa-sign-out"></i> Keluar
            </a>
        </li>
        &nbsp;&nbsp;
        <?php else:?>					
        <li>
            <a href="<?php echo base_url().'mobile/member/register'?>">
                <i class="fa fa-user"></i> Daftar
            </a>
        </li>
        <li>
            <a href="<?php echo base_url().'mobile/member'?>">
                <i class="fa fa-sign-in"></i> Masuk
            </a>
        </li>
        &nbsp;&nbsp;
        <?php endif;?>
    </ul>
</nav>