<html>
    <body>
        <h1>¿Cuantas unidades del producto?</h1>
        <select name="" id="">
            <?php foreach (range(1, 5) as $num ) {  ?>
                <option value="<?php echo $num; ?>"> <?php echo $num; ?> unidad </option>
            <?php }  ?>
        </select>
    </body>
</html>