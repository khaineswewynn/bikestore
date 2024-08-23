<?php
// session_start();
// if(!isset($_SESSION['username']))
// {
//     header('location:login.php');
// }
include_once("../layouts/navbar.php");
include_once("../controllers/brand-controller.php");
if(isset($_POST['submit']))
{
    if(!empty($_POST['brand']))
    {
        $brand=$_POST['brand'];
    }

$brandController=new BrandController();
$result=$brandController->addBrand($brand);
var_dump($result);
if($result)
    header('location:brands.php?msg=success');
else
    header('location:brands.php?msg='.$result);
}
?>
        <div id="layoutSidenav">
            <?php
            include_once("../layouts/sidebar.php");
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row">
                            Brand Information
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="" method="post">
                                    <div class="mt-5">
                                        <label for="" class="form-label"> Brand Name</label>
                                        <input type="text" name="brand" id="" class="form-control">
                                    </div>
                                    <div class="mt-5">
                                        <button class="btn btn-dark" name="submit">Add Brand</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
<?php
include_once("../layouts/footer.php");
?>