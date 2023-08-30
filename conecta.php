<?php
$con = mysqli_connect("sql.freedb.tech", "freedb_leonardo2023", "TpQW&JQwxrJeUT9", "freedb_DataBaseLeo");
mysqli_set_charset($con,"utf8");
if (!$con) {
    echo "Debugging erron:".mysqli_connect_errno().PHP_EOL;
    echo "Debugging erron:".mysqli_connect_error().PHP_EOL;
    exit;
}
else{
    echo "Conectado com sucesso!";
}
?>