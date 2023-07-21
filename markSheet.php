<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        /* height: 550px; */
    }
</style>

<body>
    <!-- input form -->
    <div class="container  mt-5">
        <div class="row">
            <h3 class="my-5 d-flex justify-content-center">
                Please Insert Your
                <small class="text-muted">DATA</small>
            </h3>
        </div>
        <!-- form -->
        <form method="post">
    
            <!-- name -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control" name="name" />
                <label class="form-label" for="form6Example3">Student Name</label>
            </div>

            <!-- Std id -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="number" name="stdId" id="form6Example1" class="form-control" />
                        <label class="form-label" for="form6Example1">Student ID</label>
                    </div>
                </div>
                <!-- Subjects -->
                <div class="col">
                    <div class="form-outline">
                        <input type="number" name="english" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">English Result</label>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="number" name="physics" id="form6Example1" class="form-control" />
                        <label class="form-label" for="form6Example1">physics Result</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="number" 
                        name="psychology" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">psychology Result</label>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="number" name="chemistry" id="form6Example1" class="form-control" />
                        <label class="form-label" for="form6Example1">Chemistry Result</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="number" name="biology" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">Biology Result</label>
                    </div>
                </div>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="result">Check Your Result</button>
        </form>
    </div>
    <!-- php -->
    <?php

        if (isset($_POST['result'])) {
            # code...
            $name = $_POST['name'];
            $stdId = $_POST['stdId'];
            $english = $_POST['english'];
            $physics = $_POST['physics'];
            $psychology = $_POST['psychology'];
            $chemistry = $_POST['chemistry'];
            $biology = $_POST['biology'];

            // for print
            $total = NULL;
            $percentage = NULL;
            $grade = NULL;
            $remark = NULL;
            // Obtain Marks
            $obtain = 500;

            // echo $name . $stdId . $english;

            // total marks
            $total = $english + $physics + $psychology + $chemistry + $biology;

            

            // Persentage
            $percentage = ($total / $obtain) * 100;

            // Remarks
            if($percentage >= 90){
                $grade = "A";
                $remark = "Exelent";
            }else if($percentage >= 80 && $percentage < 90){
                $grade = "B";
                $remark = "Great";
            }else if ($percentage >= 60 && $percentage < 80) {
                $grade = "C";
                $remark = "Nice";
            }else {
                $grade = "E";
                $remark = "Need Work Hard";
            }
        }else{
            echo "please insert the data";
        }

    ?>


    <!-- table -->
    <div class="container my-5 py-5">
        <table border="1">
            <thead>
                <tr style="text-align:center;">
                    <th>Std ID</th>
                    <th>Std Name</th>
                    <th>English</th>
                    <th>Physics</th>
                    <th>psychology</th>
                    <th>Chemistry</th>
                    <th>Biology</th>
                    <th>Obtain Marks</th>
                    <th>Total Marks</th>
                    <th>Persentage</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr style="text-align:center">
                <!-- std data -->
                    <td>
                        <?php
                 echo $stdId;
                 ?>
                    </td>
                    <td>
                        <?php
                 echo $name;
                 ?>
                    </td>
                    <!-- subject output -->
                    <td>
                        <?php
                echo $english; 
                ?>
                    </td>
                    <td>
                        <?php
                echo $physics;
                ?>
                    </td>
                    <td>
                        <?php
                echo $psychology;
                ?>
                    </td>
                    <td>
                        <?php
                echo $chemistry; 
                ?>
                    </td>
                    <td>
                        <?php
                echo $biology; 
                ?>
                    </td>
                    <!-- obtain -->
                    <td>
                        <?php
                echo $obtain; 
                ?>
                    </td>
                    <!-- total marks -->
                    <td>
                        <?php
                echo $total;
                ?>
                    </td>
                    <!-- persentage -->
                    <td>
                        <?php
                echo $percentage; 
                ?>
                    </td>
                    <!-- grade -->
                    <td>
                        <?php
                echo $grade; 
                ?>
                    </td>
                    <!-- Remarks -->
                    <td>
                        <?php
                echo $remark; 
                ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>