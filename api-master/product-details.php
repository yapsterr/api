<?php
$id = $_GET['id'];
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php?id=".$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];

$value = $list;
?>
<html> 
    <head>  
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <br>
<div id="container">
    <div class="navbar">
        <a href="index.php?page=home" id = "home">Home</a>
        <a href="index.php?page=product" id = "product">Show</a>
        <a href="index.php?page=categories" id = "category">Category</a>
        <a href="index.php?page=create" id = "create">Create</a>
    </div>
        <div id="content">
		
            <div class="form-style-5">
				<h1> Product Details </h1>
				<form>
					Product <input type="text" value="<?php echo $value['name'];?>"> 
					Description <input type="text" value="<?php echo $value['description'];?>"> 
					Price <input type="text" value="<?php echo $value['price'];?>">
					<div id ="link">
							<a href="form_update.php?id=<?php echo $id ?>">Update</a> or
							<a href="pro_delete.php?id=<?php echo $id ?>">Delete</a> </li>
						</div>
				</form>
                    
			</div> 
		</div>  
</div>		
</html>