
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


    <tr>
        <td>Heating Oil</td>
        <td>0.03</td>
        <td><i class="fa fa-caret-up"></i></td>
        <td>1.40%</td>
    </tr>
    <tr>
        <td>RBOB Gasoline</td>
        <td>0.02</td>
        <td><i class="fa fa-caret-up"></i></td>
        <td>1.08%</td>
    </tr>
    <tr>
        <td>Natural Gas</td>
        <td>0.01 </td>
        <td><i class="fa fa-caret-up"></i></td>
        <td>0.19%</td>
    </tr>
</table>