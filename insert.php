


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <h2 class="text-center text-success" > SUccessfully inserted </h2>


    <div class="container">

    <a  href="index.php"><button class="btn btn-primary float-right ">Add</button></a>
    <br>
    <br>
        <table class="table table-bordered table-hover table-striped ">
        <thead>
            <th>Username</th>
            <th>email</th>
            <th>password</th>

        </thead>
        <tbody>
            <?php
                require_once('includes/connection.php');
                $ref = 'contact/';
                $fetchdata = $database->getReference($ref)->getValue();
                if($fetchdata > 0){

        
                foreach($fetchdata as $keys => $row){

                

            ?>

            <tr> 

            <td> <?php echo $row['name'] ?> </td>
            <td> <?php echo $row['email'] ?></td>
            <td> <?php echo $row['phone'] ?> </td>

            </tr>
            <?php

            }
        }
        else echo "<b class='text-danger'> you dont have information in database  </b> "
            ?>
            
        </tbody>
</table>

    </div>







<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-analytics.js"></script>
<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-firestore.js"></script>
</body>
</html>



