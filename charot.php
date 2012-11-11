<?php
// Server in the this format: <computer>\<instance name> or 
// <server>,<port> when using a non default port number
//                phpinfo();

$query = $this->db->conn_id->prepare('SELECT * FROM rooms');
                    $query->execute($currCandidate);
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $ret[] = $row;
                    }

//                $serverName = "DARYLL-PC\SQLEXPRESS"; //serverName\instanceName
//                $connectionInfo = array("Database" => "hotel_callope");
//                
//                
//                $conn = sqlsrv_connect($serverName, $connectionInfo);
//                
//                if ($conn) {
//                    echo "Connection established.<br />";                    
//                } else {
//                    echo "Connection could not be established.<br />";
//                    die(print_r(sqlsrv_errors(), true));
//                }
//                
//                $query = sqlsrv_query($conn, 'SELECT * FROM rooms');
//                
//                while( $row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC) ) {
//      echo var_dump($row);
//}
                
//                while ($obj = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
//                    echo var_dump($obj);
//                }

//$sql = "SELECT FirstName, LastName FROM SomeTable";
//$stmt = sqlsrv_query( $conn, $sql );
//if( $stmt === false) {
//    die( print_r( sqlsrv_errors(), true) );
//}
//
//while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
//      echo $row['LastName'].", ".$row['FirstName']."<br />";
//}
                     
                
                ?>