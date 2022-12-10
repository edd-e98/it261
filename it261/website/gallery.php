<?php
    //variable[key] = 'value'
    //in this case: pokemon[$name] = $image
    $pokemon['Piplup'] = 'piplu_Water-type pokemon.';
    $pokemon['Eevee'] = 'eevee_Normal-type pokemon.';
    $pokemon['Pikachu'] = 'pikac_Electric-type pokemon.';
    $pokemon['Dragonair'] = 'drago_Dragon-type pokemon.';
    $pokemon['Munchlax'] = 'munch_Normal-type pokemon.';
    include('./includes/header.php');
?>
    <table>
        <?php foreach($pokemon as $name => $image): ?>
            <tr>
                <td> <img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ?>"> </td>
                <td><?php echo str_replace('_', ' ', $name) ?></td>
                <td><?php echo substr($image, 6) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php include('./includes/footer.php'); ?>