<?php
    // Create connection to Oracle
    $conn = oci_connect("HR", "oracle");
    if (!$conn) {
    $m = oci_error();
    echo $m['message'], "\n";
    exit;
    }
    else {
    print "Connected to Oracle!"."<br><br>";
    }
    $sql = 'select * from tbl_articulos';
    $stmt = oci_parse($conn, $sql);
    oci_execute($stmt);
    while ( $row = oci_fetch_assoc($stmt) ) {
        echo $row["CODIGO_ARTICULO"]."<br>";
    }
    // Close the Oracle connection
    oci_close($conn);
?>