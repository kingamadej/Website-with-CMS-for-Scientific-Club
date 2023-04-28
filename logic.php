<?php

    //console

    //function console_log($output, $with_script_tags = true) {
        //$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
    //');';
       // if ($with_script_tags) {
            //$js_code = '<script>' . $js_code . '</script>';
      //  }
       // echo $js_code;
  //  }
    //function wh_log($log_msg)
    //{
        //$log_filename = "log";
       // if (!file_exists($log_filename)) 
      //  {
            // create directory/folder uploads.
          //  mkdir($log_filename, 0777, true);
       // }
        //$log_file_data = $log_filename.'/log_' . date('d-M-Y') . '.log';
        // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
      //  file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
   // } 
    // call to function
    //wh_log("this is my log message");

    //consol end

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "login", "password", "database_name"); 

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on wpisy page
    $sql = "SELECT * FROM data ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $file = $_FILES['image']['name']; //stores the original filename from the client
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO data(title, image, content) VALUES('$title', '$file', '$content')";
        mysqli_query($conn, $sql);
      
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        if (file_exists($target_file)) {
            echo $sql;
            header("Location: wpisy.php?info=added");
        }else {
            move_uploaded_file($_FILES['image']['tmp_name'], "$target_file"); //stores the name of the temporary file
            header("Location: wpisy.php?info=added");
        }

       

        //echo $sql;

        //header("Location: wpisy.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        mysqli_query($conn, $sql);
        

        header("Location: wpisy.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $file = $_FILES['image']['name'];
        $content = $_REQUEST['content'];

        if ($_FILES["image"]["name"] == "") {
            //wh_log($file."|end");
            $sql = "UPDATE data SET title = '$title', content = '$content' WHERE id = $id";
            if(!mysqli_query($conn, $sql)){
                echo "sql error";
            }
        }
        else {
            //wh_log($file."|end");
            $sql = "UPDATE data SET title = '$title', image = '$file', content = '$content' WHERE id = $id";
            if(!mysqli_query($conn, $sql)){
                echo "sql error";
            }
            $target_dir = "img/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
            if (file_exists($target_file)) {
                header("Location: wpisy.php");
            }else {
                move_uploaded_file($_FILES['image']['tmp_name'], "$target_file"); //stores the name of the temporary file
            }

        }
        header("Location: wpisy.php");
        exit();    
        
        //wh_log($file."|end");
        //$sql = "UPDATE data SET title = '$title', image = '$file', content = '$content' WHERE id = $id";
        //if(!mysqli_query($conn, $sql)){
            //echo "sql error";
        //}

      // $target_dir = "img/";
       // $target_file = $target_dir . basename($_FILES["image"]["name"]);

        //if (file_exists($target_file)) {
            //header("Location: wpisy.php");
        //}else {
           // move_uploaded_file($_FILES['image']['tmp_name'], "$target_file"); //stores the name of the temporary file
       // }
       
    }

    //send img from current id to input as a default choice in edit page

?>
