<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="design.css">
    <title>Website MealPlan | Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <h3><?php echo $Name; ?></h3>
    <h3><?php echo $Gender; ?></h3>
    <h3><?php echo $Contact; ?></h3>
    <h3><?php echo $Email; ?></h3>
    <img src="img/<?php echo $image; ?>" alt="<?php echo $Name; ?>" width="200">
</body>
</html> 