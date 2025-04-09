<?php
// $host = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbname = "book_db";

// // Create connection
// $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// // Check connection
// if ($conn->connect_error) {
// error_log("Connection failed: " . $conn->connect_error); // Log connection error
// die("Connection failed: " . $conn->connect_error);
// }

// if (isset($_POST['send'])) {
// // $name = mysqli_real_escape_string($connection, $_POST['name']);
// // $email = mysqli_real_escape_string($connection, $_POST['email']);
// // $password= mysqli_real_escape_string($connection, $_POST['password']);

// $name = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// $stmt =$conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

// $stmt->bind_param("sss", $name, $email, $password);

// $stmt->execute();


// if (mysqli_query($connection, $stmt)) {
// header('Location:home.php');
// exit();
// } else {
// echo "Error: " . mysqli_error($connection);
// }
// } else {
// echo 'Something went wrong, please try again';
// }

// mysqli_close($connection);




?>



<html>

<body>
  <from method="post">

    <?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "book_db";

    // Create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = trim($_POST['username']);
      $email = trim($_POST['email']);
      $password = trim($_POST['password']);

      // Password Hashing for security
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      // Prepare SQL statement to insert data
      $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sss", $username, $email, $hashed_password);

      // Execute and check if inserted
      if ($stmt->execute()) {
        echo "User registered successfully!";
      } else {
        echo "Error: " . $stmt->error;
      }

      // Close connections
      $stmt->close();
      $conn->close();
    }


    
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "book_db";

    // Create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        error_log("Connection failed: " . $conn->connect_error); // Log connection error
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "connected successfully";
    }
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    //echo "data insert succefully"
    //$stmt = $conn->prepare("INSERT INTO your_table (column1, column2) VALUES (?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    // Set parameters and execute
    //$value1 = "Sample Data 1";
    //$value2 = "Sample Data 2";
    $stmt->execute();

    //$stmt->execute();

    echo "New record inserted successfully";

    // Close connection
    $stmt->close();
    $conn->close();
    ?>

  </from>
</body>

</html>