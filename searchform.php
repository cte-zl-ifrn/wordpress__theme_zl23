<form id="myForm" role="search" method="get" action="<?php echo home_url('/') ?>">
    <input type="search" placeholder="pesquisar" id="searchTopMenu" value="<?php echo get_search_query();?>" name="s">
    <i class="fa-sharp fa-solid fa-circle-xmark hideForm"></i>
</form>