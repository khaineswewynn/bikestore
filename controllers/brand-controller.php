<?php
include_once("../models/brand.php");
class BrandController{

    function addBrand($name)
    {     
        $brand=new Brand();   
        $result=$brand->insertBrand($name);
        return $result;
    }
    function getBrands()
    {
        $brand=new Brand();  
        $brands=$brand->getAllBrands();
        return $brands;
    }
    function getBrandById($id)
    {
        $brand=new Brand();
        $brandinfo=$brand->getBrandById($id);
        return $brandinfo;
    }
    function updateBrand($id,$name)
    {
        $brand=new Brand();
        $result=$brand->updateBrand($id,$name);
        return $result;
    }
    function deleteBrand($id)
    {
        $brand=new Brand();
        $result=$brand->deleteBrand($id);
        return $result;
    }
    function searchBrand($data)
    {
        $brand=new Brand();
        $result=$brand->search($data);
        return $result;
    }
}

?>