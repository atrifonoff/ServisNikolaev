






<?php
/**
 * Created by PhpStorm.
 * User: krisko
 * Date: 27.06.17
 * Time: 16:20
 */

require 'Client.php';

?>

<form action="inputForm.php" method="get">

    Client name: <input type="text" name="clientname"/>
    <input type="submit" name="input" />

</form>


<?php


if (isset($_GET['input']))
{



    echo getClientName($clientName).'<br>';
    echo $_GET['clientname'];

}