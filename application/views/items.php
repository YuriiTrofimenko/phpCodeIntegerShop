<!-- tyaa 15 -->
<!-- Представление списка товаров -->
<?php
echo '<h2>'.$title.'</h2>';
echo '<table>';
foreach($items as $c)
{
    echo '<tr>';
    echo '<td>'.$c['itemname'].'</td>';
    echo '<td>'.$c['pricein'].'</td>';
    echo '<td>'.$c['pricesale'].'</td>';
    echo '<td>'.$c['info'].'</td>';
    echo '</tr>';
}
echo '</table>';
