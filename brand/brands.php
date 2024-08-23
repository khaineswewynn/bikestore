<?php
// session_start();
// if(!isset($_SESSION['username']))
// {
//     header('location:login.php');
// }
include_once ("../layouts/navbar.php");
include_once "../controllers/brand-controller.php";
$brandController=new BrandController();
$brands=$brandController->getBrands();
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
                            <?php
                                if(isset($_GET['msg']))
                                {
                                    if($_GET['msg']=='success')
                                    {
                                        echo "<span class='alert alert-success'>Brand is successfully added</span>";
                                    }
                                    else if($_GET['msg']=='updatesuccess')
                                    {
                                        echo "<span class='alert alert-success'>Brand is successfully updated</span>";
                                    }
                                    else if($_GET['msg']=='updatefail')
                                    {
                                        echo "<span class='alert alert-danger'>Error in updating brand name.</span>";
                                    }
                                    else if($_GET['msg']=='deleted')
                                    {
                                        
                                        echo "<span class='alert alert-danger'>Successfully delete brand.</span>";
                                    }
                                    else if($_GET['msg']=='faildelete')
                                    {
                                        echo "<span class='alert alert-danger'>Error in deletion of brand name.</span>";
                                    }
                                    else{
                                        echo "<span class='alert alert-danger'>Error in adding brand name.</span>";
                                    }
                                }
                            ?>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="create-brand.php" class="btn btn-dark">Create Brand</a>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="name" id="" class="form-control search" placeholder="Enter brand name">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary btnSearch">Search</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Brand Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <?php
                                        $count=1;
                                            foreach($brands as $brand)
                                            {
                                                echo "<tr id=".$brand['brand_id'].">";
                                                echo "<td>".$count++."</td>";
                                                echo "<td>".$brand['brand_name']."</td>";
                                                echo "<td><a class='btn btn-info mx-2' href='read-brand.php?id=".$brand['brand_id']."'>Read</a><a class='btn btn-warning mx-2' href='edit.brand.php?id=".$brand['brand_id']."'>Edit</a><a class='btn btn-danger' href='delete-brand.php?id=".$brand['brand_id']."'>Delete</a><button class='btn btn-dark btnDelete'>Delete Ajax</button></td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php
include_once("../layouts/footer.php");
?>