<form class="form-inline my-2 my-lg-0" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
  <input class="form-control mr-sm-2" type="search" placeholder="খুজুন..." aria-label="Search" value="<?php the_search_query(); ?>" name="s" id="s" />
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fa fa-search"></i> </button>
</form>
