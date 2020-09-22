<tr>
    <?php foreach($categorias as $categoria): ?>
        <th><?=$categoria?></th>
    <?php endforeach; ?>
    
    <!-- Se puede hacer de las dos maneras -->
    <!-- <?php foreach($categorias as $categoria){
        echo "<th>$categoria</th>";
    } ?> -->
</tr>