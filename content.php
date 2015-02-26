<article class="row list">

    <figure class="col-md-5">
        <?php if(has_post_thumbnail(get_the_ID())): ?>
            <?php echo get_the_post_thumbnail(get_the_ID()); ?>
        <?php else: ?>
            <img src="<?=asset('images/image-empty.jpg') ?>" class="img-responsive" alt="Image Empty"/>
        <?php endif; ?>
    </figure>

    <div class="summary col-md-7">
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
