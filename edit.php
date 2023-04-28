<?php
    session_start();
    
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: logowanie.php');
        exit();
    }
    include "logic.php";

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link href="aktualnosci-panel.css?<?=filemtime("aktualnosci-panel.css")?>" rel="stylesheet" type="text/css" />
   <!--<link rel="stylesheet" href="aktualnosci-panel.css" type="text/css" />-->

   <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"/>
    
    <link href="css/fontello.css?<?=filemtime("css/fontello.css")?>" rel="stylesheet" type="text/css" />

    <title>Wpis edycja</title>
</head>
<body>
    <div class="pomoc"><a class="strzalka" onclick="kontrolka128()"><i class="demo-icon icon-left"></i></a>&emsp;&ensp;<a href="logout.php">Wyloguj się&nbsp;<i class="demo-icon icon-logout"></i></a></div>
   <div class="container mt-5">
        <?php foreach($query as $q){ ?>
            <form method="POST" enctype="multipart/form-data">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <input type="text" maxlength="50" placeholder="Tytuł wpisu" class="form-control my-3 bg-dark text-white text-center" name="title" required value="<?php echo $q['title']?>">
                
                <input disabled type="text" value="<?php echo "Obecnie: ".$q['image']?>" class="zdjecie mb-1 form-control wejscie">
                <br></br>
                <?php echo"<img src='".'img/'.$q['image']."' class='mb-1 mt-1' width='40%' height='auto'>";?> 
                <br></br>
                <input type="file" name="image" accept="image/png, image/gif, image/jpeg" class="zdjecie mb-3 form-control">
                <textarea name="content" id="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?php echo $q['content']?></textarea>
                <button class="btn btn-dark my-3" name="update">Uaktualnij</button>
            </form>
        <?php } ?>    
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!--ckeditor5-->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
    .create( document.querySelector( '#content' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
    </script>

<script>
    
    function kontrolka128()
    {
        /*confirm("Czy na pewno chcesz usunąć tą podstronę?");*/
        if (window.confirm('Czy na pewno chcesz opuścić edytowany wpis bez zapisu?'))
        {
        window.open('wpisy.php', '_self');
        };
    }
</script>
   
</body>
</html>