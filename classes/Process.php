<?php
    $con = new mysqli("localhost","root","","ajax_crud");
    $action = $_POST['action'];
    $action();

    // Data Insert
    function insert(){
        global $con;
        $empName = $_POST['emp_name'];
        $empEmail = $_POST['emp_email'];
        $empPhone = $_POST['emp_phone'];
        $empStatus = $_POST['emp_status'];

        $sql = "INSERT INTO `employee`(`emp_name`, `emp_email`, `emp_phone`, `emp_status`) VALUES ('$empName','$empEmail','$empPhone','$empStatus')";
        $result = $con->query($sql);

        if($result){
            echo "Data Insert Successfully";
        }
    }

    // Data Show
    function show(){
        global $con;
        $result = $con->query("SELECT * FROM `employee`");
        $i = 1;
        foreach($result as $employee){ ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $employee['emp_name']; ?></td>
                <td><?php echo $employee['emp_email']; ?></td>
                <td><?php echo $employee['emp_phone']; ?></td>
                <td>
                    <?php 
                        if($employee['emp_status'] == 1){?>
                            <button href="" class="btn btn-success btn-sm" id="activeBtn" value="<?php echo $employee['id']; ?>"><i class="fa-solid fa-user-check"></i></button>
                        <?php 
                        }else{
                            ?>
                            <button href="" class="btn btn-danger btn-sm" id="inactiveBtn" value="<?php echo $employee['id']; ?>"><i class="fa-solid fa-user-xmark"></i></button>
                            <?php
                        }
                    ?>
                </td>
                <td>
                    <button class="btn btn-warning btn-sm"><i class="fa fa-pen-to-square fa-sm"></i></button>
                    <button class="btn btn-danger btn-sm" id="deleteBtn" value="<?php echo $employee['id']; ?>"><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#deleteModal"></i></button>
                </td>
            </tr>

        <?php

        }

    }

    // Active to Inactive Button
    function activeToInactive(){
        global $con;
        $id = $_POST['id'];
        $result = $con->query("UPDATE `employee` SET `emp_status`='0' WHERE id='$id'");
    }

    // Inactive to Active Button
    function inactiveToActive(){
        global $con;
        $id = $_POST['id'];
        $result = $con->query("UPDATE `employee` SET `emp_status`='1' WHERE id='$id'");
    }


    // Delete Employee
    function destroy(){
        global $con;
        $id = $_POST['id'];
        $result = $con->query("DELETE FROM `employee` WHERE id='$id'");
    }
?>