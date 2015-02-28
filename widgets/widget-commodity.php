
<table class="table table-striped commodity-table">
    <?php
    //crude oil, gasoline, fuel, lpg
    $energyQuotes = getEnergyQuotes();
    foreach( $energyQuotes  as $i => $quote ){
        echo '<tr>';
            echo '<td>'.$quote['descriptiveName'].'</td>';
            echo '<td>'.$quote['last'].'</td>';
            echo '<td><i class="fa fa-caret-'.$quote['arrowStatus'].'"></i></td>';
            echo '<td>'.str_replace('-','',$quote['currentPercent']).'%</td>';
        echo '</tr>';
    }
    ?>
</table>