<?php
//localhost server
// $link = mysqli_connect("localhost", "root", "", "vcfconverter");
// test server
$link = mysqli_connect("localhost", "vcf_conv", "lvkMcrlVCqCV", "test_vcf");

if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
}


?>
   