<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <?php include('navbar.php'); ?>
    <section id="contact" class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2 style="margin-top: 9.5%;font-size:350%;" class="fw-bold">Let's Connect</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, ipsa!</p>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col md-12 p-0 pb-4">
                    <form action="contact.php" method="post" class="bg-light p-4 m-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" name="name" placeholder="Your Full Name" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="email" name="email" placeholder="Your Email" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea name="query" placeholder="Your Query Here" required class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <button name="submit" class="btn btn-warning btn-lg btn-block mt-3">Send Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'test');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $query = $_POST['query'];
        $sql = "insert into contact(name,email,query)values('$name','$email','$query')";
        $data = mysqli_query($conn, $sql);
        if ($data) { ?>
            <script>
                alert('message send successful');
                window.location.href = "index.php";
            </script>
    <?php
        } else {
            echo "sql error";
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>

</body>

</html>