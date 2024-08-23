<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
include_once("layouts/navbar.php");
?>
        <div id="layoutSidenav">
            <?php
            include_once("layouts/sidebar.php");
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <a href="create-customer.php" class="btn btn-dark">Create new customer</a>
                                <a href="export.php" class="btn btn-dark">Export CSV</a>
                                <a href="import.php" class="btn btn-dark">Import CSV</a>
                            </div>
                        </div>
                    </div>
                </main>
<?php
include_once("layouts/footer.php");
?>ain