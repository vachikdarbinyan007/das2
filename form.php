<?php
if(isset($_POST['sub'])){
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $country=$_POST['country'];

    $con=mysqli_connect('localhost','root','','mysqldb2');
    // ugharkel baza
    $query="INSERT INTO tab VALUES('','$name','$email','$country')";
    mysqli_query($con,$query);
    // vercnel bazaic
    $sql="SELECT name,email,country FROM tab";
    $result=mysqli_query($con,$sql);
}
?>
<?php
    while($x=mysqli_fetch_assoc($result)){
        
    
?>
<div>
    <div><?php echo $x["name"]?></div>
    <div><?php echo $x["email"]?></div>
    <div><img src="<?php echo $x["country"]?>" alt="image" width="50px"></div>
</div>
<?php
    };
?>