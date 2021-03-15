<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="../js-library/jquery.min.js"></script>
    <script src="../js-library/popper.min.js"></script>
    <script src="../js-library/bootstrap.min.js"></script
    <title>Exercise 7</title>
</head>

<body class="bg-dark text-white">
<?php
function capitalize($str)
{
    $new = explode(" ", $str);
    $newStr="";
    foreach ($new as $word){
        $newStr.=ucfirst($word)." ";
    }
    return $newStr;
}
?>
<div class="container-fluid text-center">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto mt-5">
        <input type="text" name="string" id="string" placeholder="Type Your String Here" class="form-control mb-3">
        <input type="submit" name="Capitalize" id="Capitalize" value="Capitalize" class="btn btn-primary">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo capitalize($_POST["string"]);
    }
    ?>
</div>
</body>

</html>