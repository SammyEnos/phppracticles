<?php
    $n1 = $_POST[tex1];
    $n2 = $_POST{text2}
    $ans = '';
    if(op == '='){
        $ans =$n1+$n2;

    }

    else if ($op == '-') {
        $ans =$n1-$n2;
    } 

    if(op == '*'){
       $ans =$n1*$n2; 
    }

    else if ($op == '/') {
        $ans =$n1/$n2;
    } 
       
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initila-scale-1">
<head>
	<title>Syntax Calculator</title>
</head>

<body>
    <form method="post">
        <input type="text" name="txt1"><br><br>
        <input type="text" name="txt2"><br><br>
        <input type="text" name="ans" value="<?php echo $ans;?>"><br><br>
        <input type="submit" name="btnop" value="+">
        <input type="submit" name="btnop" value="-">
        <input type="submit" name="btnop" value="*">
        <input type="submit" name="btnop" value="/">
        <input type="submit" name="btnop" value="%">
        

    </form>
    
</body>
</html>