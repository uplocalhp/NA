<?php
$content = 'officer';
include '../auth/Sessionpersist.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags
===================================================================================================-->
    <title>Hello, world!</title>
    <meta charset="utf-8">
    <META NAME="robots" CONTENT="noindex,onfollow">
    <!-- END Required meta tags 
===================================================================================================-->


    <?php
    include '../components/head/head.php'
    ?>
    <link rel="stylesheet" href="../css/style-navbar.css">

</head>

<body>

    <!-- Navigation
=================================================================================================== -->
    <?php
    include('../components/navbar/navbaradmin.php');
    ?>

    <!-- END Navigation
=================================================================================================== -->
    <br><br>


    <!-- *** Page Content 
=================================================================================================-->
    <div class="container">

        <!-- Page Heading 
=================================================================================================-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
        <!--END Page Heading 
=================================================================================================-->

        <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
        </h1>
        <div class="row">

            <!-- while แสดงรูปภาพ
================================================================================================= -->
            <?php
            require "../db/connect.php";
            $Squery = "SELECT * FROM tagmaster ORDER BY Tag DESC";
            if ($result = mysqli_query($con, $Squery)) {
                while ($img = mysqli_fetch_array($result)) {

            ?>
                    <!-- END while แสดงรูปภาพ
================================================================================================= -->


                    <!-- card แสดงรูปภาพ
 =================================================================================================-->

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card card-1">
                            <div class="boximg">
                                <img src="<?php echo $img['path']; ?>" class="card-img-top" alt="..." style="width: 100%;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">สินค้าประเภท <?php echo $img['Tag']; ?></h5>
                                <form action='../admin/admin-item.php' method="POST">
                                    <input type='hidden' name='directory' value=" <?php echo $img["Tag"] ?>" />
                                    <button type="submit" class="btn btn-outline-primary btn-auto btn-block">More</button>
                                </form>
                                <button type="submit" class="btn btn-outline-danger btn-auto btn-block">Delete</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
            <?php
                }
            }

            ?>
        </div>

        <!-- card แสดงรูปภาพ
 =================================================================================================-->

        <!-- Pagination  
=================================================================================================-->
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
        <!--END Pagination  
=================================================================================================-->

    </div>
    <!-- /.container -->

    <!--***END  Page Content 
=================================================================================================-->

    <!-- Footer 
=================================================================================================-->
    <?php
    include('../components/footer.php')
    ?>
    <!--END Footer 
=================================================================================================-->
</body>

</html>