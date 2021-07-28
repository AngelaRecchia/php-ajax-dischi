<?php
include 'albums.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Albums</title>
</head>
<body>
    
    <header class="py-3">
        <h2 class="text-center">Albums</h2>
    </header>

    <main>

        <div class="container">
            <div class="row row-cols-6 row-cols-md-4 row-cols-lg-5">

                <?php
                    foreach ($albums as $album) {
                ?>
                        <div class="col album text-center text-white my-3">

                            <img class="poster mb-2" src="<?php echo $album['poster']?>" alt="<?php echo $album['title']?>">
                            <div class="title"><?php echo $album['title']?></div>
                            <span class="year"><?php echo $album['year']?></span>
                            <span> &#9679; </span>
                            <span class="author"><?php echo $album['author']?></span>
                            
                            
                        </div>
                <?php
                    }
                ?>
            </div>
        </div>

    </main>

</body>
</html>
