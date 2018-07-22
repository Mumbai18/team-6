<?php include_once("../admin/db_connection.php");
?>
<?php

$SQL = "SELECT  * from donor_details";
$header = '';
$result ='';
$exportData = mysqli_query ($conn,$SQL ) or die ( "Sql error : " . mysqli_error($SQL) );

$fields = mysqli_num_fields ( $exportData );

for ( $i = 0; $i < $fields; $i++ )
{
    $header = mysqli_field_name( $exportData , $i ) . "\t";
}

while( $row = mysqli_fetch_row( $exportData ) )
{
    $line = '';
    foreach( $row as $value )
    {
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim( $line ) . "\n";
}
$result = str_replace( "\r" , "" , $result );

if ( $result == "" )
{
    $result = "\nNo Record(s) Found!\n";
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=export.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result";

?>
<html>
<body>
<form action="export.php" method="post" name="export_excel">

    <div class="control-group">
        <div class="controls">
            <button type="submit" id="export" name="export" class="btn btn-primary button-loading" data-loading-text="Loading...">Export MySQL Data to CSV/Excel File</button>
        </div>
    </div>
</form>
</body>
</html>