<?php 
$string='';
foreach($_POST as $key=>$value){
    if($key=='tab' || $key=='okey'){
        continue;
    }else{
    $string.="'$value',";
    }
}
$tab=$_POST['tab'];
//this line is to used for delete the extra , whic is added last of the string.
$string = substr($string, 0, -1);
$conn=mysqli_connect('localhost','root','','crud') or die('Failed');
$sql="INSERT INTO $tab VALUES('0',$string)";
$result = mysqli_query($conn, $sql) or die("Unsuccessful.");
mysqli_close($conn);
header('location:form.php');



?>