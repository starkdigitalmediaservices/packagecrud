<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>{{ $action }} Product</h2>
		<form action="/action_page.php">
			<div class="form-group">
				<label for="product_name">Product Name</label>
				<input type="text" class="form-control" id="product_name" name="product_name">
			</div>
			<div class="form-group">
				<label for="product_price">Product Price</label>
				<input type="text" class="form-control" id="product_price" name="product_price">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
</html>