<?php
include_once "../controllers/brand-controller.php";

$data=$_POST['value'];
$brandController=new BrandController();
$brands=$brandController->searchBrand($data);
$output="";
$count=1;
foreach($brands as $brand)
{
    $output .="<tr>";
    $output.="<td>".$count++."</td>";
    $output.="<td>".$brand['brand_name']."</td>";
    $output.="<td><a class='btn btn-info mx-2' href='read-brand.php?id=".$brand['brand_id']."'>Read</a><a class='btn btn-warning mx-2' href='edit.brand.php?id=".$brand['brand_id']."'>Edit</a><a class='btn btn-danger' href='delete-brand.php?id=".$brand['brand_id']."'>Delete</a><button class='btn btn-dark btnDelete'>Delete Ajax</button></td>";
    $output.="</tr>";
}
echo $output;
?>