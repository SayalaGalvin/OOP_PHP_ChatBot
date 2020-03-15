<?php
    require_once('./dbConnection.php'); 
    $conn = new dbFunction(); // create object to call dbFunction class
    $result=$conn->getAllData(); //call function getAllData() using $con object
    
?>    
<!doctype html>
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
                    <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Chat Bot Controller</strong> </div>
		</div>
		<hr>
                <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse Answers</strong> <a href="chatAdd.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Answers</a></div>
			
                                        <hr>
		<div>
		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
                                                                                                                    <th>Id</th>
						<th>Question</th>
						<th>Answer</th>
                                                                                                                    <th>Active</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = mysqli_fetch_assoc($result)) 
                                        {  
                                         ?> 
                             
					<tr>
                                                                                                                    <td contenteditable="true"><?php echo $row['id'] ?></td>
						<td contenteditable="true"><?php echo $row['question'] ?></td>
						<td contenteditable="true"><?php echo $row['answer'] ?></td>
                                                                                                                    <td contenteditable="true"><?php echo $row['active'] ?></td>
						<td align="center">
                                                    <a href="chatEdit.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Update</a>
                                                    <a href="chatController.php?del=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
                               
                                        <?php } ?>
				</tbody>
			</table>
		</div>
		

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>


