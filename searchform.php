<form action="<?php echo site_url()?>" method="get">
  <div class="row">
    <div class="col-sm-8">
      <input type="text" class="form-control" name="s" id="search" value="<?php the_search_query(); ?>" />
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary my-1"><span>Search</span></button>
    </div>
  </div>
</form>
