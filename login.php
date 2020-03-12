 <?php

$items = array();
 $url="localhost";
 $user= "root";
 $pass="root";
 $dbname="haren";
$value= 0;
if(isset( $_POST['val'])){
  $value= $_POST['val'];
}
echo "<script>console.log('Debug Objects:' );</script>";

$num=0;
$connect=mysqli_connect($url,$user,$pass,$dbname);

$result="SELECT email,pass FROM haren";

 $sql=mysqli_query($connect,$result);


 while($row=mysqli_fetch_assoc($sql) ){
     /* add a new item */
     $num++;
     $items[$value] = array(
      'email' => $row['email'],
      'pass' => $row['pass'],

  );

}

$json_response = json_encode($items);
echo $json_response;

?>