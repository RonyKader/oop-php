<?php 
    include('Http/CreateClass.php'); 
    include('Http/Visibility.php'); 
    include('Http/InheritanceClass.php'); 
    include('Http/ConstructClass.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming - PHP</title>
</head>
<body>
    <h2>Output</h2>
    <hr>
    <?php 
        //Class One [Bsic class creation and uses]
        // $obj = new CreateClass('World');
        // $obj->ship();

        // Class Two [Visibility and Inheritance]
        // $visibility = new Visibility();

        // echo $visibility->showPrivateMethod();
        // echo $visibility->showProtectedMethod();
        // echo $visibility->showVisibilityMethod();

        // Class Three [Inheritance, Construct]
        // $inheritance = new ChildClassData();
        // echo $inheritance->ChildMethodShow();

        $construct = new ConstructClass(22,33);

        echo $construct->getCalculation();



    ?>
</body>
</html>