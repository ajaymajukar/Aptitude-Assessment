<?php
include "../class/users.php";
$cat=new users;
$category=$cat->cat_shows();
//print_r($category);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Enter Questions</h1>

          <div class="table-responsive">
            <table class="table table-striped">
			<?php
			if(isset($_GET['msg'])  && !empty($_GET['msg']))
			{
				echo "<p>Data Inserted Successfilly</p>";
			}
			?>
			
			
  <form method="post" action="add_quiz.php">
    <div class="form-group">
      <label for="text">Questions:</label>
      <input type="text" class="form-control" name="qus" placeholder="Enter question">
    </div>
	    <div class="form-group">
      <label for="text">option-1:</label>
      <input type="text" class="form-control" name="op1" placeholder="Enter option-1">
    </div>
	    <div class="form-group">
      <label for="text">option-2:</label>
      <input type="text" class="form-control" name="op2"  placeholder="Enter  option-2">
    </div>
	    <div class="form-group">
      <label for="text">option-3:</label>
      <input type="text" class="form-control" name="op3"  placeholder="Enter  option-3">
    </div>
	    <div class="form-group">
      <label for="text">option-4:</label>
      <input type="text" class="form-control" name="op4" placeholder="Enter  option-4">
    </div>
	    <div class="form-group">
      <label for="text">answer:</label>
      <input type="text" class="form-control" name="ans" placeholder="Enter  answer">
    </div>
	<div class="from-group">
	<select class="form-control" id="sell" name="cat">
	
	<option value="" >choose category</option>
	<?php
	foreach($category as $c)
	{
		echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
	}
	
	
	?>
	
	
	</select>
	</div>
    <button type="submit" class="btn btn-default">Submit</button><br>
  </form>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
