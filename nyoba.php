<!DOCTYPE HTML>
<html>
    <head>
</head>
<body>
    <?php
    $abc = array(
        "Bob"=>"2000",
        "Sally"=>"4000",
        "Charlie"=>"600",
        "Clare"=>"0"
    );
    $i=1;
    $arrLength = count($abc);
    echo "Jumlah Pegawai ada : $arrLength"."<br>";
    foreach ($abc as $pegawai => $value){
        echo "$i. $pegawai"." telah dibayar- "."$".$value."<br>";
        $i++;
    } 
    ?>
</body>
</html>