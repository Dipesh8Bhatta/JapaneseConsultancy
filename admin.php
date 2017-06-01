<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database = "nippon_database";

// define variables and set to empty values
$commentErr = "";
$fieldname = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["comment"])) {
    $commentErr = "Email is required";
  }else {
    $comment = test_input($_POST["comment"]);

    // Create new connnection.
    $conn = new mysqli($servername, $username, $password, $database);

    //Check connnection.
    if($conn -> connect_error){
      die("Connection failed: " . $conn->connect_error);
    }else {
      echo "Connected successfully <br>";
    }

    // //Create a databse.
    // $sqlDatabase = "CREATE DATABASE nippon_database";
    //
    // if($conn->query($sqlDatabase) === TRUE){
    //   echo "Database create successfully <br>";
    // }else{
    //   echo "Error creating database". $conn->error;
    // }
    //
    // //Create table.
    // $sqlTable = "CREATE TABLE nippon_database.IndexTable(
    //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //   fieldname VARCHAR(25) NOT NULL,
    //   fieldcontent TEXT,
    //   modifiedby VARCHAR(25)
    // )";
    //
    // if ($conn -> query($sqlTable) === TRUE) {
    //   echo "Table created successfully <br>";
    // }else{
    //   echo "Error creating table.". $conn->error;
    // }
    $fieldname = $_POST['fieldname'];

    $sqlUpdate = "UPDATE IndexTable SET fieldcontent='$comment' WHERE fieldname = '$fieldname'";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
}

//validation
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>

 <html>
 <head>
   <title>Admin Panel</title>
 </head>
 <body>
   <div>
     <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       <select name="fieldname">
         <option value="">Select a person:</option>
         <option value="PrincipalSpeech">Principal Speech Field</option>
         <option value="2">Lois Griffin</option>
         <option value="3">Joseph Swanson</option>
         <option value="4">Glenn Quagmire</option>
       </select>
       <br>
         Comment: <textarea name="comment" rows="5" cols="40"><?php echo isset($_POST['comment']) ? $_POST['comment'] : $comment;?></textarea>
         <span class="error"><?php echo $commentErr;?></span>
       <br>
       <input type="submit" name="submit" value="Submit">
     </form>
   </div>
 </body>
 </html>
