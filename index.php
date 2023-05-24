<?php
$host = 'db';
$user = 'admin';
$pass = 'paSSword';
$sdb  = 'app';
$conn = new mysqli($host, $user, $pass, $sdb);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   $base = false;
} else {
   echo "Connected to MySQL server successfully!";
   $base = true;
}

if($base){
    if(isset($_POST['add']))
    {
        $dtask = $_POST['task'];
        $sql = "INSERT INTO tasks (task)VALUES('$dtask')";
        $conn->query($sql);
    }

    $sql = 'SELECT * FROM tasks';

    if ($result = $conn->query($sql)) {
        if ($result->num_rows > 0 )  {
            while ($data = $result->fetch_object()) {
                $tasks[] = $data;
            }
            $rows = true;
        }
        else {
            $rows = false;    
        }
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Simple App</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
      html,
      body {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <h2>To do Tasks</h2>
    <p>Add a new task</p>
    <form action="index.php" method = "POST">
        <input type="text" name="task">
        <input type="submit" name="add" value="ADD">
    </form>
    <ul>
        <?php
        if ($rows){
            foreach ($tasks as $task)
            {
                echo'<br>';
                echo'<li>'.$task->task.'</li>';
            }
        }
        ?>
    </ul>
  </body>
</html>