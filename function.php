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
?>