<?php
/**
 * Created by PhpStorm.
 * User: CollinsJumah
 * Date: 5/19/2019
 * Time: 09:25
 */
require 'rectangle.php';

$width=42;
$height=7;

$obj= new rectangle();
$obj->setSize($height,$width);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Rectangles</title>
</head>
<body>
<?php
echo '<p>
The area of a rectangle with width'.$width.' and height'.$height.' is:'.$obj->getArea().'
</p>';




?>



</body>
</html>
