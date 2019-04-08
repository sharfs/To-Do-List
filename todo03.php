<?php
session_start();
if($_POST){
  header('location:todo03.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

<div>
  <h2>My To-Do List:</h3><br>
<input type="text" name="todoEntry" id="todoEntry">
<input type="submit" value="Add">
</div>
</form>

<?php
// if($_POST){
//     echo "<ul><li>".$_POST['todoEntry']."</li></ul>";
// }
if(isset($_POST['todoEntry'])){
    if(!(isset($_SESSION['listItems']))){
        $_SESSION['listItems'] = array();
        $_SESSION['listItems'][]=$_POST['todoEntry'];
      
    }else{$_SESSION['listItems'][] = $_POST['todoEntry'];
        
    }
}
echo "<ul>";
       foreach ($_SESSION['listItems'] as $items)
       echo "<li>" .$items. "</li>";
        "</ul>"
?>
<script>
$(document).ready(function(){
  var itemDone = 0;

  $("li").click(function(){
      var numCheck = $(this).index();
      console.log(numCheck);
    if(itemDone == 0){
    $(this).css("text-decoration","line-through");
    sessionStorage.setItem($(this).index(),1);
    itemDone = 1;
    console.log (itemDone);
    }else{ (itemDone == 1)
       $(this).css("text-decoration","none");
       sessionStorage.setItem($(this).index(),0);
    itemDone = 0;
    console.log (itemDone);
      };
  }
  );
 $('li').each(function(i){
    if(sessionStorage.getItem(i)==1){
      $(this).css("text-decoration","line-through");
      $(this).css("color", "red");
      $(this).css("cursor", "pointer");
}
 });

});
</script>


    
</body>

</html>