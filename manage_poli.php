<!DOCTYPE html>
<html>
<head>
	<title>Halaman Dokter</title>
	<link rel="stylesheet" href="style_sheet.css">
    <link rel="icon" type="image/png" href="assets/logo-udinus.png">
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

    <div style="margin-top:300px;margin-left:300px">
		<h4><a href="tambah_poli.php">Tambah Data Poli</a></h4>
        <table width="1027" style=" padding: 15px;">
            <tr style="background-color: #04AA6D;
                color: white;">
                <th width="109">
                    Id Poli               </th>
                <th width="282">
                    Nama Poli             </th>
                <th width="489">
                    Keterangan            </th>
                <th width="127">
                    Action                </th>
            </tr>
            
                
                <?php 
				include "koneksi.php";
                $query = mysqli_query($connect ,"select * from poli");
                    while($data=mysqli_fetch_array($query))
                        {
                            ?>
                            <tr>
                                    <td>
                                        <?php echo $data['id_poli'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['nama_poli'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['keterangan_poli']?>
                                    </td>
                                    <td>
                                        <?php 
										echo "<a href='edit_poli.php?id_poli=".$data['id_poli']."'>Edit||</a>";
										echo "<a href='hapus_poli.php?id_poli=".$data['id_poli']."'>Hapus</a>";

										?>
                                    </td>
                            </tr>
                            <?php
                        }
                ?>
            
      </table>
    </div>

</body>
</html>