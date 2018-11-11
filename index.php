<!DOCTYPE html>
<html>
<head>
	<title>Pay for something</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h2>Pay for something</h2>
			<form action="checkout.php" method="post">
				<div class="form-group">
					<label for="item">Product</label>
					<input type="text" name="product" class="form-control">
				</div>

				<div class="form-group">
					<label for="amount">Price</label>
					<input type="text" name="price" class="form-control">
				</div>

				<input type="submit" class="btn btn-primary" value="Pay">
			</form>
			<br>
			<p>You'll be taken to PayPal to complete your payment.</p>
		</div>
	</div>
</div>
</body>
</html>