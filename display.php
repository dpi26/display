<?php
include("database.php");

$query="SELECT * FROM form";
$data=mysqli_query($conn,$query) or die("Error in query:".mysqli_error($conn));
$total = mysqli_num_rows($data);
 if($total != 0)
{ 
    ?> 
    //--------table section-------
    <table border="2px" colspan="7" width="90%">
    <tr colspan="4">
    <th width="5%">id</th>
    <th width="8%">First Name</th>
    <th width="8%">Last  Name</th>
    <th width="8%">Password</th>
    <th width="8%">confirm password</th>
    <th width="14%">Email</th>
    <th width="9%" >Contact no.</th>
    <th width="10%">Address</th>
    <th width="15%">Operations</th>
    </tr>
    //---------------X-----------
    <?php
   
    while($result=mysqli_fetch_assoc($data))
    {
         echo"<tr>
            <td> ".$result['id']."</td>
            <td> ".$result['First_name']."</td>
            <td> ".$result['Last_name']."</td>
            <td> ".$result['pass']."</td>
            <td> ".$result['Confirm_Password']."</td>
            <td> ".$result['Email']." </td>
            <td> ".$result['Phone_no']." </td>
            <td> ".$result['paddress']." </td>

            <td> <a href='update.php?id=$result[id]'> Operations</a></td>
         </tr> ";
   }
}
else{
    echo" no record fount";
}
?>
    </table>
 

   