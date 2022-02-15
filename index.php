<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Basic Page Structure</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css"  type="text/css" />
		

		<link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css" />

		<script src="js/jquery.js" type="text/javascript"></script>
	</head>
	<body class="body">
		<div class="container">
			<div class="row shadow-bg">
				<div class="col-md-12">
                    <div class="card w-100">
                        <div class="row card-body">
	                        <div class="col-md-12">
	                            <form action="" method="post" id="myForm">
	                              <h5 class="text-danger mb-4">INPUT STRING : (Article Title, Tutorial Title or Any webpage title)</h5>		
								  <div class="form-group">
								    <input type="text" class="form-control" id="title" name="title" value="<?php if(isset($_POST['title'])){
	                        			echo $_POST['title'];
	                        		}?>" name="title" placeholder="" required>
								  </div>
								  <div class="form-row">
								  	<div class="form-group col-md-8">
								      <div class="wrapper">
										 <input type="radio" name="select" value="-" <?php if(isset($_POST['select']) && $_POST['select'] == '-')  echo ' checked="checked"';?> id="option-1" required>
										 <input type="radio" name="select" value="_" <?php if(isset($_POST['select']) && $_POST['select'] == '_')  echo ' checked="checked"';?> id="option-2" required>
										   <label for="option-1" class="option option-1">
										     <!-- <div class="dot"></div> -->
										      <span>Separate with dash (-)</span>
										      </label>
										   <label for="option-2" class="option option-2">
										     <!-- <div class="dot"></div> -->
										      <span>Separate with underscore (_)</span>
										   </label>
									   </div>
								    </div>

								    <div class="form-group col-md-4">
								    	<div class="form-check">
								    	  <div class="custom-checkbox">
								    	  	<input class="form-check-input" type="checkbox" name="numbers" id="gridCheck" <?php if(isset($_POST['numbers'])) echo 'checked="checked"' ?> />
								    	  </div>	
									      
									      <label class="form-check-label" for="gridCheck">
									        Remove numbers
									      </label>
									    </div>
								    </div>
								  </div>

								  <div class="form-row">
								    <div class="form-group col-md-8">
								      <!-- <label for="inputCity">City</label> -->
								      <button type="submit" name="generateSlug" class="form-control" id="generateSlug">(GENERATE SLUG)</button>
								    </div>
								    <div class="form-group col-md-2">
								      <button type="clear" name="clear" class="form-control common" id="clear" onclick="clearForm('myForm'); return false;">CLEAR</button>
								    </div>
								    <div class="form-group col-md-2">
								      <button type="button" name="reset" class="form-control common" id="reset" onClick="window.location.reload();" >RESET</button>
								    </div>
								  </div>
								</form>
	                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-5">
                    <div class="card w-100">
                        <div class="row card-body">
	                        <div class="col-md-12">
	                        	<h5 class="text-danger mb-4">OUTPUT : (Clean URL slug)</h5>
	                        	
	                        	<?php 
	                        		if(isset($_POST['title'])){
	                        			if(isset($_POST['select'])){
	                        				$title = $_POST['title'];
	                        				$newTitle = str_replace(' ', $_POST['select'], $title);
		                        				if(isset($_POST['numbers'])){
			                        				$newTitle = preg_replace('/\d/', ' ', $title);
			                        				$newTitle = preg_replace('/\s+/', ' ',$newTitle);
			                        				$newTitle = str_replace(' ', $_POST['select'], $newTitle);
		                        				}
	                        			}

	                        			echo "<span id='slug'>".$newTitle."</span>";
	                        		}
	                        	?>
	                        </div>
	                        <div class="col-md-12 mt-3">
	                        	<div class="copied">Copied</div>
	                        </div>
	                        <div class="col-md-12">
	                        	<button type="button" name="copy" id="copy" class="form-control mt-4" id="inputCity"><i class="fa fa-copy"></i>COPY</button>
	                        </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		
		<script src="js/custom.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>





