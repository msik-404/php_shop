<!DOCTYPE HTML>
<html lang="en">
<body>
<head>
    <title>Index</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>

<h1>Main page</h1>

<?php
require_once("code_base.php");
$diff_table_btn = new Btn_Form("Choose table", "f_btn_submit", NULL, "choose_table.php", "r_btn");
$diff_table_btn->create();

$diff_table_btn = new Btn_Form("Add record", "f_btn_submit", NULL, "add_record.php", "r_btn");
$diff_table_btn->create();
?>

</body>
</html>