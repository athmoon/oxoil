<article class="row list" style="padding-left: 50px; padding-right: 50px;">
    <div class="summary col-md-12">
        <h1 class="hidden-xs hidden-sm"><a style="color:#222222"  href="<?=get_permalink(get_the_ID())?>"><?php the_title(); ?></a></h1>
        <div class="summary col-md-12">
            <?php
            $max = 270;
            if( strlen( the_content() ) > $max ){
                echo substr( the_content(), 0, 270).'...';
            }
            ?>
            <div class="controls">
                <a class="btn btn-danger" href="<?=get_permalink($post->ID)?>">READ MORE</a>
            </div>
        </div>
    </div>
</article>
