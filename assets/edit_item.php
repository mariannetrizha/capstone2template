<?php 

$id =$_GET['id']; 

$file = file_get_contents('items.json');
$items = json_decode($file,true); 

echo '
<div class ="form-group">
	<label>Product name</label>
	<input type="text" value="'.$items[$id]['name'].'" name="productname" class="form-control" placeholder="Product name">
	<label>Image</label>
	<img src=" '.$items[$id]['image'].'"> 
	<input type="file" value="'.$items[$id]['image'].' class="form-control" name="image">
	<br>
  	<label>Price</label>
    <input type="number" value="'.$items[$id]['price'].' class="form-control" name="price">
    <br>
    <label>Description</label>
    <textarea class="form-control"> '.$items[$id]['description'].' </textarea name="description">
</div>';

$categories =['category 1', 'category 2', 'category 3']; 
echo 
'<label>Category</label>
<select class="form-control" name="itemCategory">'; 
	foreach ($categories as $category) {
		if ($items[$id]['category'] === $category)
			echo '<option selected>'.$category.'</option>';
		else 
			echo '<option>'.$category.'</option>';
	}
echo'
	</select>
</div>';
