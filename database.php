<?php

$db_host="localhost";
$db_user="root";
$db_password= "";
$db_name= "mysaeducation";

//create connection
$con= new mysqli($db_host,$db_user,$db_password,$db_name);

// check connection
if($con->connect_error)
{
    die ("connection failed :");
}
//echo "connected successfull<hr><br>";


if(isset($_REQUEST['submit']))
{
    //checking for empty field
    if(($_REQUEST['Cadidate_name']=="") || ($_REQUEST['Cadidate_mail']=="") || ($_REQUEST['ubject']=="") || ($_REQUEST['Cadidate_phone_number']=="") || ($_REQUEST['Cadidate_location']=="") || ($_REQUEST['Cadidate_message']==""))
    {
        echo "<small>fill all field...</small><hr>";
    }
    else
    {
        //insert sql statement
        $sql="INSERT INTO mysa(Cadidate_name,Cadidate_mail,ubject,Cadidate_phone_number,Cadidate_location,Cadidate_message) VALUES (?,?,?,?,?,?)";

        //prepared statement
        $result=$con->prepare($sql);

        if($result)
        {
            //bind variable to prepared statement as parameters
            $result->bind_param('sssiss',$Cadidate_name,$Cadidate_mail,$ubject,$Cadidate_phone_number,$Cadidate_location,$Cadidate_message);

            //variable and values
            $Cadidate_name=$_REQUEST['Cadidate_name'];
$Cadidate_mail=$_REQUEST['Cadidate_mail'];
$ubject=$_REQUEST['ubject'];
$Cadidate_phone_number=$_REQUEST['Cadidate_phone_number'];
$Cadidate_location=$_REQUEST['Cadidate_location'];
$Cadidate_message=$_REQUEST['Cadidate_message'];

            //execute prepared statement
            $result->execute();

            //number of row affected
          //  echo $result->affected_rows."Row inserted <br>";
        }
        //close prepared statement
    
    }
}
/*

//send form to to email

$Cadidate_name=$_REQUEST['Cadidate_name'];
$Cadidate_mail=$_REQUEST['Cadidate_mail'];
$ubject=$_REQUEST['ubject'];
$Cadidate_phone_number=$_REQUEST['Cadidate_phone_number'];
$Cadidate_location=$_REQUEST['Cadidate_location'];
$Cadidate_message=$_REQUEST['Cadidate_message'];

 //checking for empty field
 if(empty($Cadidate_name) || empty($Cadidate_mail) || empty($ubject)|| empty($Cadidate_phone_number) || empty($Cadidate_location) || empty($Cadidate_message))
 {
     echo "<small>fill all field...</small><hr>";
 }
 else
 {
     mail("tilakraaj793@gmail.com" , "Mysa", "Subject :$ubject" , "from :$Cadidate_name <$Cadidate_mail>", "Phone number :$Cadidate_phone_number", "Location :$Cadidate_location" , "Message :$Cadidate_message");
     echo "<script type='text/javascript'>alert('your message sent successfuly');
     window.history.log(-1);
     </script>"
 }
 */
?>