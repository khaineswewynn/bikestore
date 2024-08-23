<?php
include_once "../layouts/navbar.php";
include_once "../controllers/brand-controller.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $brandController=new BrandController();
    $brand=$brandController->getBrandById($id);
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
                            <div class="col-6 mt-5">
                                <h2>Brand Name: <?php echo $brand['brand_name'];?></h2>
                            </div>
                        </div>
                        
                       
                    </div>
                </main>
<?php
include_once("../layouts/footer.php");
?>