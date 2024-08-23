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
                                New Customer
                            </div>
                        </div>
                    </div>
                </main>
<?php
include_once("layouts/footer.php");
?>ain