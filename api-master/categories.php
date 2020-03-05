<?php
$json = file_get_contents("http://rdapi.herokuapp.com/category/read.php");

$data = json_decode($json,true);
$list = $data['records'];


?>
<br>
<link rel="stylesheet" type="text/css" href="css/style.css">
<h1> Category list </h1>

<table id="list">
    <tr>
        <th>Category ID</th>
        <th>Category Name</th>
    </tr>
<?php
foreach($list as $value){
?>
    <tr>
        <td><?php echo $value['id'];?></td>
        <td><?php echo $value['name'];?></td>
    </tr>
<?php
}
    ?>
</table>

