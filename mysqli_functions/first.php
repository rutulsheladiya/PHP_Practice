<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "openai";

$conn = mysqli_connect($servername, $username, $password);
if ($conn) {
    $db = mysqli_select_db($conn, $dbname);
    if ($db) {
        // $sql  = "select *  from employee";
        // $result = mysqli_query($conn, $sql);
        // echo "<pre>";
        // // print_r($result);
        // // $data = mysqli_fetch_object($result);
        // // print_r($data);
        // while ($row = mysqi_fetch_object($result)) {
        //     print_r($row);
        // }
        // $count = mysqli_num_rows($result);
        // echo "Total Number Row In Table Is  : ".$count;



        // // mysqli_fetch_assoc()
        // $sql  = "select *  from employee";
        // $result = mysqli_query($conn, $sql);
        // // $row = mysqli_fetch_assoc($result);

        // // while($row = mysqli_fetch_assoc($result)){
        // //     echo "<pre>";
        // //     print_r($row); 
        // // }

        // // fetch all data and print it in table
        // $output = "
        //        <table border='1'>
        //        <tr>
        //           <th>id</th>
        //           <th>name</th>
        //           <th>mobile</th>
        //           <th>age</th>
        //        </tr>
        // ";
        // while ($row = mysqli_fetch_assoc($result)) {

        //     $output .= "
        //  <tr>
        //     <td>{$row['empid']}</td>
        //     <td>{$row['empname']}</td>
        //     <td>{$row['mobileno']}</td>
        //     <td>{$row['age']}</td>
        //  </tr> ";
        // }
        // $output .= "</table>";
        // echo $output;

        // // mysqli_fetch_row() => fetch the single from datbase and return it in the form of index array
        // $sql  = "select *  from employee";
        // $result = mysqli_query($conn, $sql);
        // // $row = mysqli_fetch_row($result);
        // // echo "<pre>";
        // // print_r($row);
        // $row = mysqli_fetch_row($result);
        // while($row = mysqli_fetch_row($result)){
        //     echo "<pre>";
        //     print_r($row);
        //     // print_r($row[1]);   // => badha array mathi name print karse kem ke 1 number ni position upr name che atle
        // }



        // mysqli_fetch_array(result,resulttype) => it will fetch the one / first record from the db and return it in the form of index and associative array
        $sql  = "select *  from employee";
        $result = mysqli_query($conn, $sql);
        // both index and associative array
        // $row = mysqli_fetch_array($result);
        // echo "<pre>";
        // print_r($row);
        // while ($row = mysqli_fetch_array($result)) {
        //     echo "<pre>";
        //     print_r($row);
        // }

        // associative array
        // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        // echo "<pre>";
        // print_r($row);
        // while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        //     echo "<pre>";
        //     print_r($row);
        // }

        // index array
        //    while( $row = mysqli_fetch_array($result,MYSQLI_NUM)){
        //     echo"<pre>";
        //     print_r($row);
        //    }

        // mysqli_fetch_all() => it will fetch all the row from the database and return it it in multidimentional index and associative array.
        $sql = "select * from employee";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
        echo "<pre>";
        print_r($row); 

        foreach ($row as $data) {
            // echo $data[0] . " " . $data[1] . " " . $data[2] . " " . $data[3]."<br>";  // for index array
            echo $data['empid'] . " " . $data['empname'] . " " . $data['mobileno'] . " " . $data['age']."<br>";
        }
    } else {
        echo "database was not found";
    }
} else {
    echo "connection failed" . mysqli_connect_error();
}
