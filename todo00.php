<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

<input type="text" name="toDoEntry" id="toDoEntry">
<input type="submit" value="add">

<?php
if($_POST){
    echo "<ul><li>".$_POST['toDoEntry']."</li></ul>";
}
?>
<script>
</script>

</body>
</html>