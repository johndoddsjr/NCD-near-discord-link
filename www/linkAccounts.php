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

    if ( $_SERVER['REQUEST_METHOD'] != 'POST' ) {
        $result[0] = array(
            'Status' => 'Error',
            'Reason' => 'E01: An error occured',
        );
        echo json_encode($result);
        $conn->close();
        return;
    }

    if (isset($_POST['discordId']) && isset($_POST['nearId'])) {
        $discordId = $_POST['discordId'];
        $nearId = $_POST['nearId'];

        $sql = "INSERT INTO `link` (`discordId`, `nearId`) VALUES ('{$discordId}', '{$nearId}')";

        if ($conn->query($sql) === TRUE) {
            $result[0] = array(
                'Status' => 'Success',
                'Reason' => 'Accounts Linked',
            );
        } else {
          $result[0] = array(
              'Status' => 'Error',
              'Reason' => 'E02: An error occured',
          );
        }
    }else{
        $result[0] = array(
            'Status' => 'Error',
            'Reason' => 'E03: An error occured',
        );
    }

    echo json_encode($result);
    $conn->close();

    return;
 ?>
