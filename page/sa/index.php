<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SAdmin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../../assets/css/styles.css" rel="stylesheet" />
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

    <script type="text/javascript">
        function display_c() {
            var refresh = 1000; // Refresh rate in milliseconds
            mytime = setTimeout(display_ct, refresh);
        }

        function display_ct() {
            var x = new Date();

            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: 'numeric',
                minute: '2-digit',
                second: '2-digit',
                timeZoneName: 'short' // Set timeZoneName to an empty string
            };

            // Get the user's local time zone
            var userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

            // Set the time zone for the date object
            var x1 = x.toLocaleString('en-US', {
                ...options,
                timeZone: userTimeZone
            });

            document.getElementById('ct').innerHTML = x1;
            dt = display_c();
        }

        // Initial call to start displaying time
        display_c();
    </script>

</head>

<body onload=display_ct();>

    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['role'] == "") {
        header("location:../../login?auth=0");
    }


    if (!$_SESSION['auth']) {
        header('location:../../login?auth=forbidden');
    }

    ?>

    <?php
    include "template/navbar.php";
    ?>


    <main>
        <div class="container-fluid">

            <?php
            $queries = array();
            parse_str($_SERVER['QUERY_STRING'], $queries);
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            switch ($queries['halaman']) {
                case 'dataadmin';

                    include 'template/dataadmin.php';
                    break;
                case 'dataproduk';

                    include 'template/dataproduk.php';
                    break;

                case 'datauser';

                    include 'template/datauser.php';
                    break;
                case 'profile';

                    include 'template/profile.php';
                    break;
                case '404';

                    include 'template/page404.php';
                    break;

                default:
                case 'dashboard';
                    include 'template/dashboard.php';
                    break;
            }
            ?>

        </div>
        <!-- /.container-fluid -->
    </main>
    <?php
    include "template/footer.php";
    ?>

    <script src="../../assets/js/bootstrapjs/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
    <script src="../../assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/js/datatables-simple-demo.js"></script>
</body>

</html>