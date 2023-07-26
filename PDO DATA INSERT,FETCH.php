<?php
$server='mysql:host=localhost;dbname=students';
$user="root";
$password="";
$pdo= new PDO($server,$user,$password);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">english</label>
                <input type="number" name="english" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">urdu</label>
                <input type="number" name="urdu" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">physics</label>
                <input type="number" name="physics" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">chemistry</label>
                <input type="number" name="chemistry" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">maths</label>
                <input type="number" name="maths" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-primary" name="insert">insert data</button>
            <button type="submit" class="btn btn-primary" name="view">view data</button>
        </form>
    </div>

    <?php
if(isset($_POST['insert'])){
   $name= $_POST['name'];
   $english= $_POST['english'];
   $urdu= $_POST['urdu'];
   $physics= $_POST['physics'];
   $chemistry= $_POST['chemistry'];
   $maths= $_POST['maths'];
   $obtain = $english + $urdu + $physics + $chemistry + $maths;
   $total = 500;
   $percentage = ($obtain / $total) * 100;
   $grade = '';
   $remarks = '';
   if($percentage >= 90){
    $grade = 'A+1';
    $remarks = 'EXELENT';
   }elseif($percentage >= 80 && $percentage < 90){
    $grade = 'A';
    $remarks = 'Greate Job';
   }elseif($percentage >= 70 && $percentage < 80){
    $grade = 'B';
    $remarks = 'Nice';
   }elseif($percentage >= 60 && $percentage < 70){
    $grade = 'C';
    $remarks = 'Good';
   }elseif($percentage >= 40 && $percentage < 60){
    $grade = 'D';
    $remarks = 'Done';
   }else {
    $grade = 'E';
    $remarks = 'Need Work Hard';
   }
    //    
   $query=$pdo->prepare('insert into marksheet(name,english,urdu,physics,chemistry,maths,obtain,total,percentage,grade,remarks)values
   (:name,:english,:urdu,:physics,:chemistry,:maths,:obtain,:total,:percentage,:grade,:remarks)');
   $query->bindParam('name',$name);
   $query->bindParam('english',$english);
   $query->bindParam('urdu',$urdu);
   $query->bindParam('physics',$physics);
   $query->bindParam('chemistry',$chemistry);
   $query->bindParam('maths',$maths);
   $query->bindParam('obtain',$obtain);
   $query->bindParam('total',$total);
   $query->bindParam('percentage',$percentage);
   $query->bindParam('grade',$grade);
   $query->bindParam('remarks',$remarks);
   $query->execute();
//    echo "<script>alert('stored sucessfully')</script>";
}
?>

    <!-- table -->
    <div class="container my-5 py-5">
        <table border="1" style="width:100%;" id="table">
            <thead>
                <tr style="text-align:center;">
                    <th>Std ID</th>
                    <th>Std Name</th>
                    <th>English</th>
                    <th>Physics</th>
                    <th>psychology</th>
                    <th>Chemistry</th>
                    <th>Biology</th>
                    <th>Total Marks</th>
                    <th>Obtain Marks</th>
                    <th>Persentage</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if('view'){
                    $view= $pdo->query('select * from marksheet');
        $res = $view->fetchAll(PDO::FETCH_ASSOC);
        foreach($res as $std ){
            ?>

                <tr style="text-align:center;">
                    <td>
                        <?php echo $std['id'] ?>
                    </td>
                    <td>
                        <?php echo $std['name'] ?>
                    </td>
                    <td>
                        <?php echo $std['english'] ?>
                    </td>
                    <td>
                        <?php echo $std['urdu'] ?>
                    </td>
                    <td>
                        <?php echo $std['physics'] ?>
                    </td>
                    <td>
                        <?php echo $std['chemistry'] ?>
                    </td>
                    <td>
                        <?php echo $std['maths'] ?>
                    </td>
                    <td>
                        <?php echo $std['obtain'] ?>
                    </td>
                    <td>
                        <?php echo $std['total'] ?>
                    </td>
                    <td>
                        <?php echo $std['percentage'] ?>
                    </td>
                    <td>
                        <?php echo $std['grade'] ?>
                    </td>
                    <td>
                        <?php echo $std['remarks'] ?>
                    </td>
                    <td>
                        <button class="btn btn-primary">edit</button>
                    </td>
                    <td>
                        <button class="btn btn-outline-primary">delete</button>
                    </td>

                </tr>
                <?php
        }
                }

        
        ?>
            </tbody>
        </table>
    </div>
    <!-- view btn -->
</body>
<?php

    echo "<script>
   $(document).ready(function(){
    $('#view').click(function(){
    $('#table').show();
    });
   });
    </script>";


?>
</html>
