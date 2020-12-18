<!-- This file performs adding new Doctor Records and shows the lists of added Doctors from Database. -->

<?php 
   include 'assets/conn/conn.php';  // This file setsup connection from database.
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- <section> -->

        <!-- <div class="container my-5"> -->
            <!-- <div class="row">

                <div class="col-md jumbotron add"> -->
                   

<!-- A Div for displaying added Patients's Records from Database after adding. -->
                <!-- <div class="col-md jumbotron doc-list ">
                    <h3 class="display-7 ">Patient Records</h3> -->
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col ">Patient Id</th>
                                <th scope="col ">Date</th>
                                <!-- <th scope="col ">Time</th> -->
                                <th scope="col ">Name</th>
                                <th scope="col ">Age</th>
                                <th scope="col ">Sex</th>
                                <th scope="col ">Address</th>
                                <th scope="col ">Mobile</th>
                                <th scope="col ">Referred by</th>
                                <th scope="col ">Total</th>
                                <!-- <th scope="col ">Discount</th>
                                <th scope="col ">Net Total</th>
                                <th scope="col ">Advance</th> -->
                                <th scope="col ">Remaining amount</th>
                                <th scope="col ">Edit</th>
                                <th scope="col ">Delete</th>

                            </tr>
                        </thead>
                        <tbody>

<!-- PHP Query for fetching Patients's data from database and displaying in the <table> format. -->
                        <?php
                            $selectquery = " SELECT * from patients ORDER BY pid DESC";

                            $query = mysqli_query($con,$selectquery);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_assoc($query)){
                            ?>
                                <tr>
                                    <th scope="row ">#PAT<?php echo $res['pid']; ?></th>
                                    <td><?php echo $res['date']; ?></td>
                                    <!-- <td><?php echo $res['time']; ?></td> -->
                                    <td><?php echo $res['pname']; ?></td>
                                    <td><?php echo $res['age']; ?></td>
                                    <td><?php echo $res['sex']; ?></td>
                                    <td><?php echo $res['paddress']; ?></td>
                                    <td><?php echo $res['mobile']; ?></td>
                                    <td><?php echo $res['referredBy']; ?></td>
                                    <td><?php echo $res['total']; ?></td>
                                    
                                    <td><?php echo $res['remainingAmt']; ?></td>

                                    <!-- HyperLink for Editing/Updating data in database, by passing every data in a variable. -->
                                    <td><a href="invoice.php?id=<?php
                                     echo $res['pid']
                                     ?>&date=<?php
                                     echo $res['date']
                                     ?>&time=<?php
                                     echo $res['time']
                                     ?>&patientAddress=<?php
                                     echo $res['paddress']
                                     ?>&name=<?php
                                     echo $res['pname']
                                     ?>&mobile=<?php
                                     echo $res['mobile']
                                     ?>&age=<?php
                                     echo $res['age']
                                     ?>&sex=<?php
                                     echo $res['sex']
                                     ?>">
                                     <i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                   
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                <!-- </div> -->

            <!-- </div>
    </section> -->


    
    <script src="https://use.fontawesome.com/0a050084c3.js"></script>
     
    <script>
        alert (<?php echo $res['date'] ?>);
    </script>
    <script src="assets/js/check_phone.js"></script>
</body>

</html>
