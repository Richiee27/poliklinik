<!DOCTYPE html>
<html>
<head>
	<title>Halaman Dokter</title>
	<link rel="stylesheet" href="style_sheet.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="assets/ipb-logo.png">
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<!--
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

	<a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Login Multi Level Dengan PHP</a> - www.malasngoding.com</a>
	-->
	
	    <div class="top-left">
        <img src="./assets/logo-udinus.png" alt="logo-udinus">
        <p class="title">
            POLY
        </p>
        <p class="define">
            Clinic Universitas Dian Nuswantoro
        </p>
        
    </div>
    <div class="top-right">
        <p class="page-title">
      <p> 
			<b>Halaman Admin</b>
			<br>
			Halo : <b><?php echo $_SESSION['username']; 
			 			$username = $_SESSION["username"];
						 function GetNama($username)
        					{
            					print $username;
        					}
			          ?></b>
			<br>
			</b> Anda telah login sebagai <b><?php echo $_SESSION['level']; 
						 $level = $_SESSION["level"];
						 function GetLevel($level)
        					{
            					print $level;
        					}
			          ?></b>.
	  </p>
        </p>
				
        <div class="logout-button">
            <a href="logout.php"> 
                <b> Logout </b>
            </a>
        </div>
    </div>
	<div class="horizontal-menu">
        <img src="./assets/logo-udinus.png" alt="profile">
        <div class="nama">
            <h2><?php getNama($username) ?></h2>
            <h6><?php getLevel($level) ?></h6>
        </div>
        <ul>
            <li><a href="halaman_admin.php">Home</a></li>
            <li><a href="manage_poli.php">Manage Poli</a></li>
        </ul>
    </div>
	
	    <div class="main-menu">
        <div class="antrian-container">
 
		<form action="save_poli.php" method="post">
			<label>Identitas Poli</label>
			<input type="text" name="id_poli" class="form_login" placeholder="Identitas Poli.." required="required">
			<label>Nama Poli</label>
			<input type="text" name="nama_poli" class="form_login" placeholder="Nama Poli.." required="required">
			
			<label>Keterangan Poli</label>
			<input type="text" name="keterangan_poli" class="form_login" placeholder="Keterangan Poli .." required="required">
 			
			<input type="submit" class="tombol_login_baru" value="SAVE"style="background-color: #04AA6D";style="background: #2aa7e2";>
 
			<br/>

		</form>
		
	</div>
</div>
</body>
</html>