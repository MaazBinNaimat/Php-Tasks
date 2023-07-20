<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        height: 300px;
        width: 300px;
        text-align: center;

    }
</style>

<body>

    <table border="1">
        <tbody>

            <?php
$std = [
    ["ali",005,"cpsism"],
    ["wajid",006,"dism"],
    ["aliya",017,"adsc2"],
    ["wajidah",116,"hdsc1"],
    ["alishah",115,"hdsc2"]
];

for ($i=0; $i < count($std) ; $i++) { 
    # code...
    if ($i%2==0) {
        # code...

        ?>
            <tr style="background-color: greenyellow;">
                <?php
    for ($h=0; $h < count($std[$i]); $h++) { 
        # code...
       
       
        ?>
                <td>
                    <?php
    echo $std[$i][$h];
    ?>
                </td>
                <?php

}
}else{
    ?>
            <tr style="background-color: aqua;">
                <?php
    for ($h=0; $h < count($std[$i]); $h++) { 
        # code...
       
       
        ?>
                <td>
                    <?php
    echo $std[$i][$h];
    ?>
                </td>
                <?php
    }
}


   
}

?>

        </tbody>
    </table>




</body>

</html>