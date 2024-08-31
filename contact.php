<?php
$conn = mysqli_connect('localhost','root','','test');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['query'];
    $sql = "insert into contact(name,email,query)values('$name','$email','$query')";
    $data = mysqli_query($conn,$sql);
    if($data){ ?>
        <script>
            alert('message send successful');
            window.location.href="index.php";
        </script>
    <?php
}else{
    echo "sql error";
}
}

?>