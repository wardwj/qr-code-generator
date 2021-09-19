<?php
	
	// Define empty variable
	$url = null;
	
	// Check if url has been submitted
	if (isset($_POST['url'])) {

		// Include qr code generator
		include 'inc/qr-code-generator.php';

	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>QR Code Generator</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
	    <main class="container">
	    	<div class="row justify-content-center py-5">
	    		<div class="col-12 col-md-6">
			    	<div class="card">
			    		<div class="card-body">
					        <h1>QR Code Generator</h1>
					        <form action="/" method="POST" class="">
					            <div>
					                <label for="url">URL</label><br>
					                <input type="text" class="form-control" id="url" name="url" value="<?php echo $url ?>"><br>
					            </div>
					            <div>
					                <input type="submit" value="Generate" name="submit" class="btn btn-primary">
					            </div>
					        </form>
					        <?php 
					        if (isset($imgSrc)) { ?>
						        <div class="d-flex justify-content-center align-items-center">
						        	<img src="<?php echo $imgSrc?>">
						        </div>
					        <?php } ?>
					    </div>
					</div>
				</div>
		    </div>
	    </main>
	</body>
</html>
