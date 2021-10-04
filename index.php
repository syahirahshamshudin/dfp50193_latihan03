<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas PHP</h1>
    <?php
    // komen satu baris
    /*komen banyak baris */
    
    $a = 'Syahirah';
    echo "<h2>Hello $a</h2>"; #output

    $hadir= false;
    $umur = 20;
    $nokp = '010513020242'

    ?>

    <p>
        <?php
        echo 20 . 21;
        ?>
    </p>

    <p>
        <?php
        $bandar = 'Alor Setar';
        $baru = 'Bandar';
        for($x = 0; $x < strlen($bandar); $x++){
            $baru .= $bandar[$x] . '-';
        }
        echo $baru;
        ?>
    </p>
</body>
</html>