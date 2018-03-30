
<div id="form-size-fix">
<form class="navbar-form" role="search" action="<?php echo site_url('/'); ?>" method="get" >
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="s" id="search" value="<?php the_search_query(); ?>">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" id="astro-button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
</form>
</div>
