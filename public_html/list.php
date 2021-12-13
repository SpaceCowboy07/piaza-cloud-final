<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php
        $name = htmlspecialchars($_POST['shopping']);
        $power = htmlspecialchars($_POST['power']);
        $rank = htmlspecialchars($_POST['visit']);
        $school = htmlspecialchars($_POST['school']);
        $email = htmlspecialchars($_POST['email']);
        $email = htmlspecialchars($_POST['dish']);
        $email = htmlspecialchars($_POST['dog']);
    ?>
    <h3>Went shooping <?= $shopping?>!</h3>
    <h3>Power has been cut off. <?= $power?></h3>
    <h3>Visited Grandma. <?= $vist?></h3>
    <h3>Did all the Homework! <?= $school?></h3>
    <h3>Sent out important email. <?= $email?></h3>
    <h3>Cleaned all the dished. <?= $dish?></h3>
    <h3>Walked the dog! <?= $dog?></h3>
</body>
</html>