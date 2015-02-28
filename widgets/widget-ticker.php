<div class="ticker">
    <span class="">
        <?php
        //crude oil, gasoline, fuel, lpg
        $energyNames = ['Crude Oil', 'Gasoline', 'Fuel', 'LPG'];
        $energySymbols = ['UCO', 'UGA', 'FUEL', 'LPG'];
        $energyQuotes = array();
        foreach( $energySymbols  as $i => $symbol ){
            $quote = yfGetQuote($quote);

            $name = $energyNames[$i];
            $percent = yfGetPercent($quote['previousClose'], $quote['last']);
            $status = $percent < 0 ? 'down' : 'up';
            $last = $quote['last'];

            $energyQuotes[] = $quote;

            echo '<span class="item">'.$name.' <span class="stat"><i class="fa fa-arrow-'.$status.'"></i>'.$last.' ('.str_replace('-','',$percent).'%)</span> </span>';
        }
        ?>

        <!--<span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>
        <span class="item">Ethanol <span class="stat"><i class="fa fa-arrow-up"></i>0.04 (2.12%)</span> </span>-->
    </span>
</div>