<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OriStore</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../../assets/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../assets/css/index.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../assets/css/bootstrapcss/bootstrap.min.css">

         <!-- font-awesome -->
        <link rel="stylesheet" href="../../assets/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />

        <!-- AOS MASTER -->
        <link rel="stylesheet" href="../../assets/css/aos-master/aos-master/dist/aos.css">

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
</head>
<body id="beranda" >

<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['role']==""){
		header("location:../../login?auth=0");
	}

   
    if(!$_SESSION['auth']) {
        header('location:../../login?auth=forbidden');
    }
 
?>
    
        <?php
        include "template/navbar.php";
        ?>      
        
    <div class="">

        <?php
            $queries = array();
            parse_str($_SERVER['QUERY_STRING'], $queries);
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
            switch ($queries['halaman'])
            {
            case 'produk';
                
                include 'template/produk.php';
                break;
            case 'transaksi';
            
                include 'template/transaksi.php';
                break;
            case 'profile';
            
                include 'template/profile.php';
                break;
            case 'riwayat';
            
                include 'template/riwayattransaksi.php';
                break;

            case '404';

                include 'template/page404.php';
                break;
            case '404produk';

                include 'template/page404produk.php';
                break;

            default:
            case 'home';
                include 'template/home.php';
                break;
            }
        ?>

    </div>

        <?php
        include "template/footer.php";
        ?>        

        <script src="../../assets/js/bootstrapjs/bootstrap.bundle.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
        <script src="../../assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../../assets/js/datatables-simple-demo.js"></script>
        <script src="../../assets/css/aos-master/aos-master/dist/aos.js"></script>
        <script>
        AOS.init();
      </script>
</body>
</html>