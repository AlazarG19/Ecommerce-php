<?php
ob_start();
include("Header.php")
?>
<!-- owl carousel  -->
<?php
include("./Template/BannerArea.php")
?>
<!-- end ow carousel  -->
<!-- top sale  -->
<?php
require("./Template/TopSale.php")
?>
<!-- end top sale  -->
<!-- special prize -->
<?php
include("./Template/SpecialPrice.php") ?>
<!-- end of special prize  -->
<!-- banner ads  -->
<?php
include("./Template/BannerAds.php") ?>
<!-- end of banner ads  -->
<!-- newphone  -->
<?php
include("./Template/NewPhones.php") ?>
<!-- end of new phone  -->
<!-- blog  -->
<?php
include("./Template/Blogs.php") ?>
<!-- end of blog  -->
<?php
include("Footer.php")
?>