 <!-- BiblioMedic -->

 <?php 
// fungsi pengecekan level untuk menampilkan menu sesuai dengan hak akses
// jika hak akses = Super Admin, tampilkan menu
if ($_SESSION['hak_akses']=='Super Admin') { ?>
 <!-- sidebar menu start -->
 <ul class="sidebar-menu">
     <li class="header">MAIN MENU</li>

     <?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif
	if ($_GET["module"]=="beranda") { ?>
     <li class="active">
         <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
     </li>
     <?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
     <li>
         <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
     </li>
     <?php
	}

  // jika menu data obat dipilih, menu data obat aktif
  if ($_GET["module"]=="obat" || $_GET["module"]=="form_obat") { ?>
     <li class="active">
         <a href="?module=obat"><i class="fa fa-folder"></i> Data Obat </a>
     </li>
     <?php
  }
  // jika tidak, menu data obat tidak aktif
  else { ?>
     <li>
         <a href="?module=obat"><i class="fa fa-folder"></i> Data Obat </a>
     </li>
     <?php
  }

	// jika menu user dipilih, menu user aktif
	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
     <li class="active">
         <a href="?module=user"><i class="fa fa-user"></i> Manajemen User</a>
     </li>
     <?php
	}
	// jika tidak, menu user tidak aktif
	else { ?>
     <li>
         <a href="?module=user"><i class="fa fa-user"></i> Manajemen User</a>
     </li>
     <?php
	}

	// jika menu ubah password dipilih, menu ubah password aktif
	if ($_GET["module"]=="password") { ?>
     <li class="active">
         <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
     </li>
     <?php
	}
	// jika tidak, menu ubah password tidak aktif
	else { ?>
     <li>
         <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
     </li>
     <?php
	}
	?>
 </ul>
 <!--sidebar menu end-->
 <?php
}
// jika hak akses = Manajer, tampilkan menu
elseif ($_SESSION['hak_akses']=='Manajer') { ?>
 <!-- sidebar menu start -->
 <ul class="sidebar-menu">
     <li class="header">MAIN MENU</li>

     <?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif
	if ($_GET["module"]=="beranda") { ?>
     <li class="active">
         <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
     </li>
     <?php
	}
	// jika tidak, menu beranda tidak aktif
	else { ?>
     <li>
         <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
     </li>
     <?php
	}

	// jika menu ubah password dipilih, menu ubah password aktif
	if ($_GET["module"]=="password") { ?>
     <li class="active">
         <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
     </li>
     <?php
	}
	// jika tidak, menu ubah password tidak aktif
	else { ?>
     <li>
         <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
     </li>
     <?php
	}
	?>
 </ul>
 <!--sidebar menu end-->
 <?php
}
// jika hak akses = Gudang, tampilkan menu
if ($_SESSION['hak_akses']=='Gudang') { ?>
 <!-- sidebar menu start -->
 <ul class="sidebar-menu">
     <li class="header">MAIN MENU</li>

     <?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif
  if ($_GET["module"]=="beranda") { ?>
     <li class="active">
         <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
     </li>
     <?php
  }
  // jika tidak, menu home tidak aktif
  else { ?>
     <li>
         <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
     </li>
     <?php
  }

  // jika menu data obat dipilih, menu data obat aktif
  if ($_GET["module"]=="obat" || $_GET["module"]=="form_obat") { ?>
     <li class="active">
         <a href="?module=obat"><i class="fa fa-folder"></i> Data Obat </a>
     </li>
     <?php
  }
  // jika tidak, menu data obat tidak aktif
  else { ?>
     <li>
         <a href="?module=obat"><i class="fa fa-folder"></i> Data Obat </a>
     </li>
     <?php
  }

	// jika menu ubah password dipilih, menu ubah password aktif
	if ($_GET["module"]=="password") { ?>
     <li class="active">
         <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
     </li>
     <?php
	}
	// jika tidak, menu ubah password tidak aktif
	else { ?>
     <li>
         <a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
     </li>
     <?php
	}
	?>
 </ul>
 <!--sidebar menu end-->
 <?php
}
?>