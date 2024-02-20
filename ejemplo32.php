<! -- Valores del input text -- !>
<! -- Valores del input radio -- !>
<! -- Valores input checkbox -- !>
<! -- Valores select option -- !>
<! -- Valores textarea 4:20: -- !>


<?php

$txtNombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$lsAnime = "";

$txtComentario = "";



if ($_POST)
{
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:""; // If ternario
    $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:""; // If ternario

    $chkphp = (isset($_POST['chkphp'])=="si")?"checked":"";
    $chkhtml = (isset($_POST['chkhtml'])=="si")?"checked":"";
    $chkcss = (isset($_POST['chkcss'])=="si")?"checked":"";

    $lsAnime = (isset($_POST['lsAnime']))?$_POST['lsAnime']: "";

    $txtComentario = (isset($_POST['txtComentario']))?$_POST['txtComentario']:"";

    // Instrucción de insertar
    // Rutina de algún cálculo
    // Aqui puedes alterar esos valores para mostrar diferentes valores
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_POST) {?>
    <strong>Hola </strong>: <?php echo $txtNombre; ?>
    <br/>
    <strong>Tu lenguaje es </strong>: <?php echo $rdgLenguaje; ?>
    <br/>
    <strong>Estas aprendiendo: </strong><br/>
    - <?php echo ($chkphp=="checked")?"PHP":""; ?><br/>
    - <?php echo ($chkhtml=="checked")?"HTML":""; ?><br/>
    - <?php echo ($chkcss=="checked")?"CSS":""; ?><br/>
    <strong>Te gusta el anime: </strong>
    <?php echo $lsAnime; ?>
    <br/>
    <strong>Tu mensaje es </strong><?php echo $txtComentario; ?>
    <?php } ?>

    <form action="ejemplo32.php" method="post">
        Nombre:<br/>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br/>
        ¿Te gusta?:<br/>
        <br/> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="lenguaje" value="php" id=""><br/>
        <br/> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""; ?> name="lenguaje" value="html" id=""><br/>
        <br/> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""; ?> name="lenguaje" value="css" id=""><br/>
        <br/>       
        Esás aprendiendo...
        <br/> php: <input type="checkbox" <?php echo $chkphp; ?> value="si" name="chkphp" id="">
        <br/> html: <input type="checkbox" <?php echo $chkhtml; ?> value="si" name="chkhtml" id="">
        <br/> css: <input type="checkbox" <?php echo $chkcss; ?> value="si" name="chkcss" id="">
        <br/>

        ¿Qué anime te gusta?
        <br/>
        <select name="lsAnime" id="">

            <option value="">Ninguna Serie</option>
            <option value="naruto" <?php echo ($lsAnime=="naruto")?"selected":""; ?>>Naruto</option>
            <option value="bleach" <?php echo ($lsAnime=="bleach")?"selected":""; ?>>Bleach</option>
            <option value="dragon" <?php echo ($lsAnime=="dragon")?"selected":""; ?>>Bragon Ball</option>     

        </select>
        <br/>

    ¿Tienes alguna duda?<br/>
    <textarea name="txtComentario" id="" cols="30" rows="10">

<?php echo $txtComentario; ?>

    </textarea>
    <br/>

        <input type="submit" value="Enviar información">

    </form>
</body>
</html>