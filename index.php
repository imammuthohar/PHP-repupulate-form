<?php
 if (isset($_GET["pesan"])){
 $pesan = "<p> {$_GET["pesan"]} <p>";
 }
 else {
 $pesan = "";
 }

 
 if (isset($_GET["nama"])){
 $nilai_nama = $_GET["nama"];
     }
     else {
     $nilai_nama = "";
}

if (isset($_GET["absen"])){
    $nilai_absen = $_GET["absen"];
        }
        else {
        $nilai_absen = "";
   }
   
if (isset($_GET["nim"])){
    $nilai_nim = $_GET["nim"];
        }
        else {
        $nilai_nim = "";
   }

   if (isset($_GET["tanggallahir"])){
    $nilai_tanggallahir = $_GET["tanggallahir"];
        }
        else {
        $nilai_tanggallahir = "";
   }


   if (isset($_GET["alamat"])){
    $nilai_alamat = $_GET["alamat"];
        }
        else {
        $nilai_alamat = "";
   }


   if (isset($_GET["jeniskelamin"])){
    $nilai_jeniskelamin = $_GET["jeniskelamin"];
        }
        else {
        $nilai_jeniskelamin = "";
   }


   if (isset($_GET["username"])){
    $nilai_username = $_GET["username"];
        }
        else {
        $nilai_username = "";
   }

   if (isset($_GET["email"])){
    $nilai_email = $_GET["email"];
        }
        else {
        $nilai_email = "";
   }

   if (isset($_GET["password"])){
    $nilai_password = $_GET["password"];
        }
        else {
        $nilai_password = "";
   }

   if (isset($_GET["repassword"])){
    $nilai_repassword = $_GET["repassword"];
        }
        else {
        $nilai_repassword = "";
   }

   if (isset($_GET["target1"])){
    $nilai_target1 = $_GET["target1"];
        }
        else {
        $nilai_target1 = "";
   }
   
   if (isset($_GET["target2"])){
    $nilai_target2 = $_GET["target2"];
        }
        else {
        $nilai_target2 = "";
   }

   if (isset($_GET["target3"])){
    $nilai_target3 = $_GET["target3"];
        }
        else {
        $nilai_target3 = "";
   }
   
   
   
    
   
    
    
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
 <div>
 <h1>Form Registrasi</h1>
 
 <form action="proses.php" method="post">
        
 <fieldset>
    <legend>Biodata</legend>
    <?php 
    echo " <div class='pesan'> $pesan </div> " 
    ?>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" value="<?php echo $nilai_nama ?>">

        <label for="nama">No. Absen : </label>
        <select name="absen" id="">
    <?php
    for ($i = 1; $i <= 40; $i++) {
        if ($i == $nilai_absen) {
            echo "
            <option value='$i' selected> $i </option>
            ";
        } else {
            echo "
            <option value='$i'> $i </option>
            ";
        }
    }
    ?>
</select>

        
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim" value="<?php echo $nilai_nim ?>">
        
        
        <label for="tanggallahir" >Tanggal Lahir : </label>
        <input type="date" name="tanggallahir" id="date" value="<?php echo $nilai_tanggallahir ?>" >
        
        
        <label for="alamat">Alamat </label>
        <textarea name="alamat" id="alamat" cols="25"> <?php echo $nilai_alamat ?> </textarea>
        
        
        <label>Jenis Kelamin</label>

<?php
// Jika nilai kelamin sudah diset
if ($nilai_jeniskelamin == "laki-laki") {
    echo '
    <label>
        <input type="radio" name="jeniskelamin" value="laki-laki" checked>
        Laki-laki
    </label><br>';
    echo '
    <label>
        <input type="radio" name="jeniskelamin" value="perempuan">
        Perempuan
    </label>';
} elseif ($nilai_jeniskelamin == "perempuan") {
    echo '
    <label>
        <input type="radio" name="jeniskelamin" value="laki-laki">
        Laki-laki
    </label><br>';
    echo '
    <label>
        <input type="radio" name="jeniskelamin" value="perempuan" checked>
        Perempuan
    </label>';
} else {
    // Jika belum ada pilihan yang dipilih, tampilkan tanpa checked
    echo '
    <label>
        <input type="radio" name="jeniskelamin" value="laki-laki">
        Laki-laki
    </label><br>';
    echo '
    <label>
        <input type="radio" name="jeniskelamin" value="perempuan">
        Perempuan
    </label>';
}
?>


         
     </fieldset>

        
        
        <fieldset>
            <legend>Acount</legend>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo $nilai_username ?>"  />
        
        
        <label for="email">Email </label>
        <input type="text" name="email" id="email" value="<?php echo $nilai_email ?> "/>
        
        
        <label for="pass">Password</label>
        <input type="password" name="password" id="pass" value="<?php echo $nilai_password ?>" />
        
        

        <label for="repass">Ulangi Password</label>
        <input type="password" name="repassword" id="repass" value="<?php echo $nilai_repassword ?>" />

       </fieldset>

     <fieldset>
        <legend>Kompetensi</legend>
        <label for="html"> 
        <input type="checkbox" name="target1" value="HTML" id="html">
        Menguasai HTML</label>
        
        <label for="css"> 
        <input type="checkbox" name="target2" value="CSS" id="css">
        Paham CSS</label>
        
        <label for="php"> 
        <input type="checkbox" name="target3" value="PHP" id="php">
        Mastering PHP</label>
        
        </fieldset>

 
<button name="submit" type="submit">Kirim Data</button>
 
 </form>

 </div>
</body>
</html>