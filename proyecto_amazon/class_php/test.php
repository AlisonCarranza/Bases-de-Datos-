<?php
    // Create connection to Oracle
    $conn = oci_connect("hr", "oracle");
    if (!$conn) {
    $m = oci_error();
    echo $m['message'], "\n";
    exit;
    }
    else {
    print "Connected to Oracle!"."<br><br>";
    }
    $sql = 'select * from employees';
    $stmt = oci_parse($conn, $sql);
    oci_execute($stmt);
    while ( $row = oci_fetch_assoc($stmt) ) {
        echo $row["FIRST_NAME"]."<br>";
    }
    // Close the Oracle connection
    oci_close($conn);
?>