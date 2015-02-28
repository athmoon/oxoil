<div class="ticker">
    <span class="">
        <?php
        //crude oil, gasoline, fuel, lpg
        $energyQuotes = getEnergyQuotes();
        foreach( $energyQuotes  as $i => $quote ){
            echo '<span class="item">'.$quote['descriptiveName'].' <span class="stat"><i class="fa fa-arrow-'.$quote['arrowStatus'].'"></i>'.$quote['last'].' ('.str_replace('-','',$quote['currentPercent']).'%)</span> </span>';
        }
        ?>
    </span>
</div>