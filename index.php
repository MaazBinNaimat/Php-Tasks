<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

    <table border="1px">
        <tbody>

            <?php 
            $num = 5;
            for($i = 1; $i <= 10; $i++){
                if($i %2 == 0){
                    ?>


            <tr style="background-color: greenyellow">
                <td>
                    <?php
                    echo $num
                    ?>
                </td>
                <td>x</td>
                <td>
                    <?php
                    echo $i
                    ?>
                </td>
                <td>=</td>
                <td>
                    <?php
                    echo $num * $i
                    ?>
                </td>
            </tr>

            <?php
            }else{
                ?>
            <tr style="background-color: aqua;">
                <td>
                    <?php
                        echo $num
                        ?>
                </td>
                <td>x</td>
                <td>
                    <?php
                        echo $i
                        ?>
                </td>
                <td>=</td>
                <td>
                    <?php
                        echo $num * $i
                        ?>
                </td>
            </tr>
            <?php
            }
        }
            
            ?>

        </tbody>
    </table>







</body>

</html>