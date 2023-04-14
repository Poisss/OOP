<form action="" method="post">
    a<input type="number" name="a" required>
    b<input type="number" name="b" required><br><br>   
    <select name="type" id="">
        <option value="1">
            плюс
        </option>
        <option value="2">
            минус
        </option>
        <option value="3">
            умножение
        </option>
        <option value="4">
            деление
        </option>
    </select><br><br>
    <input type="submit">   
</form>
<?php

include_once "MathSelect.php";

if(!isset($_POST)){
    $math=new MathSelect($_POST['a'],$_POST['b'],$_POST['type']);
?>
    <input type="text" value="<?$math?>" readonly>
<?php    
}