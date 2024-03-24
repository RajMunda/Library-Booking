<?php session_start(); 
    if(isset($_SESSION['user'])){

        include 'Database/connection.php';
        $sql = 'SELECT * FROM `libraries`';
        $result = $conn->query($sql);
        $isFound = 0;
        while($row=$result->fetch_assoc()){
            if($_GET['lib_id'] == $row['id']){
                $isFound = 1;
                break;
            }
        }
        if($isFound){

            $sql = 'SELECT * FROM `libraries` WHERE `id`='.$_GET['lib_id'];
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $title=$row['library_name'];
            include './includes/top.php';
?>
    <style>
        .img-fluid{
            width: 100%;
            max-height: 65vh;
        }
    </style>
    <!--Main Part-->

    <div class="container my-2">
        <div class="row">
            <div class="col-md-6">
            <div class="image-container">
                <img src="./uploads/<?php echo $row['image']; ?>" class="img-fluid" alt="Description of the image">
            </div>
            </div>
            <div class="col-md-6">
            <div class="text-container">
                <h1><?php echo $row['library_name']; ?></h1>
                <h3><?php echo $row['about']; ?></h3>
                <p><?php echo $row['location']; ?></p>
                <h2>Available slots are:</h2>
                <select name="lib_slot" id="lib_slot">
                    <option value="">Choose your preffered slot</option>
                    <?php
                        $sql = 'SELECT * FROM `slot` WHERE `lib_id` = ' . $row['id'];
                        $result = $conn->query($sql);
                        while($row=$result->fetch_assoc()){
                            echo"<option value='$row[slot_id]'>$row[s_start] to $row[s_end]</option>";
                        }
                    ?>
                </select>
            </div>
            </div>
        </div>
    </div>
<?php
            include './includes/bottom.php';
        }else{
            echo'
                <script> 
                    alert("Please select a valid library"); 
                    window.location.href = "./index.php";
                </script>
                ';
        }
    }else {
        echo'
            <script> 
                alert("Please login to continue"); 
                window.location.href = "./login.php";
            </script>
            ';
    }
?>