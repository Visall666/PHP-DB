<?php
    // function to run query
    function query($sql){
        $con = mysqli_connect(SERVER, USER, PASSWORD, DB);
        $result = null;
        if($con){
            $result = mysqli_query($con, $sql);
        }
        mysqli_close($con);
        return $result;
    }

    // function to run scalar select 
    function scalar_query($sql){
        $con = mysqli_connect(SERVER, USER, PASSWORD, DB);
        $row = [];
        if ($con) {
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
            }
        }
        mysqli_close($con);
        return $row;
    }

    // function to run non query such as delete insert and update
    function non_query($sql){
        $con = mysqli_connect(SERVER, USER, PASSWORD, DB);
        $result = false;
        if($con){
            $x= mysqli_query($con, $sql);
            if ($x) {
                $result = true;
            }
        }
        mysqli_close($con);
        return $result;
    }
?>