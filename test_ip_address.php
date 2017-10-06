
<form action="" action="get">
        <input type="text" name="ip_address">
    <input type="submit" value="Check ip-address">

</form>

<?php
$ip_addr = isset($_GET['ip_address']) ? $_GET['ip_address'] : '' ;
if(preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/",$ip_addr))
{
    echo "correct";
}else{
    echo "no correct";
}
?>

