<form action="<?php echo home_url('/') ?>" method="get" role="search" class="search-form style-1" id="searchform">
    <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query() ?>" name="s" title="Search for">
    <button class="search-submit" type="submit" title="Search">Search</button>
</form>