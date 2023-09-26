<?php include('dbconnect.php');
$sql="SELECT * FROM order_vegetable";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>".$row['fullname']."</td>";
        echo "<td>".$row['vegetable']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['district']."</td>";
        echo "<td>".$row['area']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>";
    }
}

$sql="SELECT * FROM order_fruits";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>".$row['fullname']."</td>";
        echo "<td>".$row['Fruits']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['district']."</td>";
        echo "<td>".$row['area']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>";
    }
}

$sql="SELECT * FROM order_herbalplants";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>".$row['fullname']."</td>";
        echo "<td>".$row['herbalplants']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['district']."</td>";
        echo "<td>".$row['area']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>";
    }
}
?>