<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-form" role="search" id="nav-search-form" role="search" method="get">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="s" id="s" value="<?php echo get_search_query(); ?>" >
        <div class="input-group-btn">
            <button type="submit" class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
</form>