<?php
    $servername = "Enter your database IP here";
    $username = "Enter your database username here";
    $password = "Enter your user password here";
    $dbname = "Enter your database name here";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if ( $_SERVER['REQUEST_METHOD'] != 'POST' ) {return;}

    // Check to see if the $_POST['discordId'] exist
    if (isset($_POST['discordId'])) {
        // SHA256SUM discordId
        $discordId = hash('sha256', (get_magic_quotes_gpc() ? stripslashes($_POST['discordId']) : $_POST['discordId']));

        // Check to see if record already exists
        $exists = "SELECT * FROM discord WHERE name LIKE '{$_POST['discordId']}'";

        if ($existsResult=mysqli_query($conn,$exists))
          {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($existsResult);
          if ($rowcount == 0) {
              // Write discordId hash to database
              $sql = "INSERT INTO `discord` (`name`, `hash`) VALUES ('{$_POST['discordId']}', '{$discordId}')";
              if ($conn->query($sql) === TRUE) {
                  $result[0] = array(
                      'Status' => 'Success',
                      'discordId' => $discordId,
                  );
              } else {
                $result[0] = array(
                    'Status' => 'Error',
                    'discordId' => $conn->error,
                );
              }
          }else{
              $result[0] = array(
                  'Status' => 'Success',
                  'discordId' => $discordId,
              );
          }
          echo json_encode($result);
      }

    }

    if (isset($_POST['nearId'])) {
        // Data validate nearId

        // SHA256SUM nearId
        $nearId = hash('sha256', (get_magic_quotes_gpc() ? stripslashes($_POST['nearId']) : $_POST['nearId']));

        // Check to see if record already exists
        $exists = "SELECT * FROM near WHERE wallet LIKE '{$_POST['nearId']}'";
        if ($existsResult=mysqli_query($conn,$exists))
          {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($existsResult);
          if ($rowcount == 0) {
              // Write nearId hash to database
              $sql = "INSERT INTO `near` (`wallet`, `hash`) VALUES ('{$_POST['nearId']}', '{$nearId}')";
              if ($conn->query($sql) === TRUE) {
                  $result[0] = array(
                      'Status' => 'Success',
                      'nearId' => $nearId,
                  );
              } else {
                $result[0] = array(
                    'Status' => 'Error',
                    'nearId' => $conn->error,
                );
              }
          }else{
              $result[0] = array(
                  'Status' => 'Success',
                  'nearId' => $nearId,
              );
          }
        echo json_encode($result);
        }
    }
    $conn->close();

    return;
?>
