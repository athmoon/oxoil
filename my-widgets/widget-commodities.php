<!--<div class="widget-commodities">
    <ul class="list-inline">
        <li>Crude Oil <span><b style="color:#008800;">0.13</b></span><span><b style="color:#008800;"> (0.26%)</b></span></li>
        <li>Crude Oil <span><b style="color:#008800;">0.13</b></span><span><b style="color:#008800;"> (0.26%)</b></span></li>
        <li>Crude Oil <span><b style="color:#008800;">0.13</b></span><span><b style="color:#008800;"> (0.26%)</b></span></li>
        <li>Crude Oil <span><b style="color:#008800;">0.13</b></span><span><b style="color:#008800;"> (0.26%)</b></span></li>
    </ul>
</div>-->
<?=link_js('js/jquery.jticker.js')?>
<script type="text/javascript">
    jQuery(function($) {
        $('.ticker').jTicker({
            offset: 2
        });
    });
</script>
<style type="text/css">
    .ticker {
        background-color: #d0d5d1;
        color: #584c56;
        padding: 7px;
        font-size: 12px;
        font-family:'roboto Condensed', sans-serif;
    }
    .ticker .desc { margin: 0 5px; }
    .ticker .up-stock {
        color:#008800;
        font-weight: bold;
    }
    .ticker .down-stock {
        color:#cc0000;
        font-weight: bold;
    }
    .ticker.energy{
        background-color: #f1f1f1;
    }
    .ticker-group{
        border: 2px solid #ccc;
        margin-top: 30px;
    }
</style>
<div class="ticker-group">
    <div class="ticker metal">
    <span>
        <span class="desc">Copper </span> <span class="down-stock"><i class="fa fa-arrow-down"></i> 0.01 (0.47%)</span>
        <span class="desc">Gold 100 oz. </span> <span class="up-stock"><i class="fa fa-arrow-up"></i> 2.30 (0.17%)</span>
        <span class="desc">Gold  </span> <span class="up-stock"><i class="fa fa-arrow-up"></i> 3.20 (0.27%)</span>
        <span class="desc">Palladium   </span> <span class="up-stock"><i class="fa fa-arrow-up"></i> 0.65 (0.08%)</span>
        <span class="desc">Silver 5000 oz.   </span> <span class="down-stock"><i class="fa fa-arrow-down"></i> 0.11 (0.51%)</span>
        <span class="desc">Silver </span> <span class="up-stock"><i class="fa fa-arrow-up"></i> 0.08 (0.48%)</span>
    </span>
    </div>
    <div class="ticker energy">
    <span>
        <span class="desc">Crude Oil </span> <span class="up-stock"><i class="fa fa-arrow-up"></i> 0.08 (0.16%)</span>
        <span class="desc">Heating Oil</span> <span class="down-stock"><i class="fa fa-arrow-down"></i> 0.01 (0.51%)</span>
        <span class="desc">Natural Gas  </span> <span class="up-stock"><i class="fa fa-arrow-up"></i> 0.01 (0.24%)</span>
        <span class="desc">RBOB Gasoline </span> <span class="up-stock"><i class="fa fa-arrow-up"></i> 0.01 (0.24%)</span>
    </span>
    </div>
</div>