<?php
date_default_timezone_set("asia/ho_chi_minh");
include("controllers/c_user.php");
$c_user=new C_user();
if(isset($_GET["func"]))
{
	$c_user->thoat_dang_nhap();	
}
$c_user->Hien_thi_dang_nhap();
?>