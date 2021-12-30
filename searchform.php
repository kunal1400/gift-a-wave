<form action="<?php echo site_url()?>" method="get" class="form-inline">
  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="text" class="form-control" name="s" id="search" value="<?php the_search_query(); ?>" />
  </div>
  <button type="submit" class="btn btn-primary my-1"><span>Search</span></button>
</form>
