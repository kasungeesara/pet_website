<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>feedback</title>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="feed.css" rel="stylesheet" type="text/css">
<style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #ccc;
  padding: 8px;
  text-align: left;
}

th {
  background-color: yellow;
}

</style>
</head>

<body>
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-light"><img src="img/logo.png" width="90" height="90" alt=""/>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  	      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
  	        <ul class="navbar-nav mr-auto">
  	          <li class="nav-item active"> <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> </li>
  	          <li class="nav-item"> <a class="nav-link" href="aboutus.html">About us&nbsp;</a> </li>
  	          <li class="nav-item"> <a class="nav-link" href="blog.html">Blog&nbsp;</a></li>
  	          <li class="nav-item"> <a class="nav-link" href="ourteam.html">Our Team&nbsp;</a></li>
  	          <li class="nav-item"> <a class="nav-link" href="contact.html">Contact us&nbsp;</a></li>
  	          <li class="nav-item"> <a class="nav-link" href="sign.html">Login &amp; Sign in&nbsp;</a></li>
                <li class="nav-item"> <a class="nav-link" href="feedback1.php">Feedback&nbsp;</a></li>
  	          <li class="nav-item dropdown">
  <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
  	              <a class="dropdown-item" href="#">Something else here</a> </div>
            </li>
            </ul>
</div>
        </nav>
  <div class="container">
	  <div class="container">
        <h1>FEEDBACK<img src="img/honest.jpeg" width="80" height="80" alt=""/></h1>
        <form id="feedbackForm" action="feed.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
          </div>

            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" rows="4" required></textarea>
            </div>

            <button type="submit" class="done-btn">Submit Feedback</button>
        </form>
    </div>
    <?php
      include("dbmain.php");
      $sql = "SELECT * FROM feedtb";
      $result = $conn->query($sql);
    
    ?>
    <table border="1">
        <tr>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Feedback</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                        <td>
                            <?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['feedback']; ?></td>
                            <td><a href="feedupdate.php?id=<?php echo $row['id']; ?>">update</a></td>
                            <td><a href="feeddel.php?id=<?php echo $row['id']; ?>">delete</a></td>

                        </tr>
                <?php        }
                }

                ?>
            </tbody>
        </tr>
    </table><br>
  </div>
</body>
</html>
