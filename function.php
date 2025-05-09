<?php
    // function to run query
    function query($sql) {
        $conn = mysqli_connect(SERVER, USER, PASSWORD, DB); // connect db
        $result = null; 
        if ($conn) { // check whether connect or not
            //mysqli_query(connection, query, resultmode)
            $result = mysqli_query($conn, $sql); // true: run SQL statement stored in $sql  
        }
        mysqli_close($conn);
        return $result;
    }

    // function to run scalar select 
    function scalar_query($sql){
        $conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
        $row = [];
        if ($conn) {
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
            }
        }
        mysqli_close($conn);
        return $row;
    }

    // function to run non query such as delete insert and update
    function non_query($sql){
        $conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
        $result = false;
        if($conn){
            $x= mysqli_query($conn, $sql);
            if ($x) {
                $result = true;
            }
        }
        mysqli_close($conn);
        return $result;
    }

    // function to alert success
    function delete_success()
    {
        $sms = "";
        if(isset($_SESSION['success']))
        {
            $sms = " 
                <div class=\"alert alert-success alert-dismissible fade show\" >
                    <strong>Information!</strong> Data has been removed successfully!
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            unset($_SESSION['success']);
        }
        echo $sms;
    }

    function alert_success()
    {
        $sms = "";
        if(isset($_SESSION['success']))
        {
            $txt = $_SESSION['success'];
            $sms = "
                <div class=\"alert alert-success alert-dismissible fade show\" >
                    <strong>Information!</strong> $txt
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            unset($_SESSION['success']);
        }
        echo $sms;
    }

    function alert_error()
    {
        $sms = "";
        if(isset($_SESSION['error']))
        {
            $txt = $_SESSION['error'];
            $sms = "
                <div class=\"alert alert-danger alert-dismissible fade show\" >
                    <strong>Warning!</strong> $txt
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            unset($_SESSION['error']);
        }
        echo $sms;
    }

    function upload($name, $dir)
    {
        $path = "";
        if($_FILES[$name]['name'] !='')
        {
            $ext = pathinfo($_FILES[$name]['name'], PATHINFO_EXTENSION);  // jpg, png ...
            $path = $dir . md5(date('Y-m-d-h:i:s')) . "." . $ext;
            if(move_uploaded_file($_FILES[$name]['tmp_name'], '../' . $path))
            {
                return $path;
            }
        }
        return $path;
    }
?>