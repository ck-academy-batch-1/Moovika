<?php
$Number1=$_POST['Number1'];
$Number2=$_POST['Number2'];
$operator=$_POST['operator'];
$Result='';
if(is_numeric($Number1) && is_numeric($Number2))
{
  switch($operator){
  case"Addition":
  {
    $Result = $Number1 + $Number2;
    break;
  }
  case"Subtraction":
  {
    $Result = $Number1 - $Number2;
    break;
  }
  case"Multiplication":
  {
    $Result = $Number1 * $Number2;
    break;
  }
  case"Division":
  {
    $Result = $Number1 / $Number2;
    break;
  }
}
}

?>
<html>
<body>

<form action="" method="post" id="quiz-form">
    <p> <input type="number"  name="Number1" id = "Number1" value="<?php echo $Number1; ?>"> <b>Number1</b><p>
    <p> <input type="number"  name="Number2" id = "Number2" value="<?php echo $Number2; ?>"> <b>Number2</b><p>
    <p><input readonly="readonly" name="Result" value="<?php echo $Result; ?>"> <b>Result</b></p>
    <input type="submit" name="operator" value="Addition" />
    <input type="submit" name="operator" value="Subtraction" />
    <input type="submit" name="operator" value="Multiplication" />
    <input type="submit" name="operator" value="Division" />



</body>
</form>
</html>