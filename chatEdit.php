<?php
require_once('./dbConnection.php'); 
    $conn = new dbConnection(); // creat object to call dbFunction Class
    $result = mysqli_query($conn->connection,"SELECT * FROM question WHERE id='" . $_GET['id'] . "'");//edit values passing and searching
    $row = mysqli_fetch_array($result); //display edit values
   
?>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	
	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body> 
 <div class="container">
    <div class="card">
      <form name="frmUser" method="post" action="chatController.php">
        <div class="card-header"><strong>Update Answer</strong> </div>

        <div class="card-body">
            <div class="col-sm-6">
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<br>
<div lass="form-group">
Question: <br>
<input type="text" name="question" class="txtField" value="<?php echo $row['question']; ?>" required>
            </div>
<div lass="form-group">
Answer :<br>
<input type="text" name="answer" class="txtField" value="<?php echo $row['answer']; ?>" required>
</div>
<div lass="form-group">
Active:<br>
<input type="text" name="active" class="txtField" value="<?php echo $row['active']; ?>" required>
 </div>
<br>
<div lass="form-group">
<input type="submit" name="update" value="Update" class="btn btn-success">
<a href="chatBack.php" class="btn btn-danger"> Cancel </a>
</div>
        </div>
        </div>     
</form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </div>   
</body>
</html>