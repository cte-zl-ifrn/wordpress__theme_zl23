<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="UserWayDiv">
        <i class="fa-solid fa-universal-access"></i>
    </div>
    <div id="barraGov">
        <div class="containerSeparator">
            <div class="container">
                <div class="firstColun">
                    <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/09/Gov.br_logo.svg" alt="gov.br">
                </div>
                <div class="secondColun">
                    <section>
                        <a href="https://www.facebook.com/ifrnzonaleste">
                            <i class="fa-brands fa-square-facebook" alt="incone facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/ifrnzonaleste/">
                            <i class="fa-brands fa-instagram" alt="icone facebook ifrn-zl"></i>
                        </a>
                        <a href="https://www.youtube.com/c/ifrncampusead">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <header>
    <div class="section">
            <input type="radio" id="dropDownMenu" name="i">
            <label for="dropDownMenu"></label>
            <input type="radio" id="closerDropMenu" name="i">
            <label for="closerDropMenu"></label>
            <div class="floatingMenu">
                <div class="container">
                    <div class="firstColun">
                        <a href="https://www.gov.br/pt-br">
                            <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/09/Logo-IFRN-ZL.png"
                                alt="gov.br">
                        </a>
                    </div>
                    <div class="secondColun">
                        <section>
                            <i class="fa-solid fa-xmark"></i>
                        </section>
                    </div>
                </div>

                <!--Menu Main-->
                <nav class="menuUl">
                    <div class="voltar">
                        <i class="fa-solid fa-chevron-left backMenuIcon"></i>voltar
                    </div>       
                    <ul class="menuList">
                    <?php 
                    $count = 0;
                    $sub_menu = false;
                    $menuItems = getMainMenu();

                    foreach($menuItems as $menu_item):
                        if ( !$menu_item->menu_item_parent ):
                        $parent_id = $menu_item->ID; ?>
                        <li class='<?php if($menuItems[$count + 1]->menu_item_parent == $parent_id) : echo 'menuwithsubmenu'; endif?>'>
                            <a href="<?php echo $menu_item->url; ?>" class="menuLink">
                                <?php echo $menu_item->post_title ?>
                                <?php if($menuItems[$count + 1]->menu_item_parent == $parent_id): ?>
                                    <span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                <?php endif?>
                            </a>
                        <?php endif; ?>

                        <?php if ( $parent_id == $menu_item->menu_item_parent ):
                            if ( !$submenu ): $submenu = true; ?>
                            <ul class="displayNone">
                            <?php endif; ?>
                            <li class="item">
                                <a href="<?php echo $menu_item->url; ?>" class="title"><?php echo $menu_item->post_title; ?></a>
                            </li>
                            <?php if ( $menuItems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                            </ul>
                            <?php $submenu = false; 
                            endif;
                        endif; ?>
                    <?php if ( $menuItems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                    </li>
                    <?php $submenu = false; endif; ?>
                        <?php $count++; endforeach; ?>
                    </ul>
                    
                    <!-- Menu Gov --> 
                    <ul class="menuList">
                    <?php 
                    $count = 0;
                    $sub_menu = false;
                    $menuItems = getGovMenu();

                    foreach($menuItems as $menu_item):
                        if ( !$menu_item->menu_item_parent ):
                        $parent_id = $menu_item->ID; ?>
                        <li class='<?php if($menuItems[$count + 1]->menu_item_parent == $parent_id) : echo 'menuwithsubmenu'; endif?>'>
                            <a href="<?php echo $menu_item->url; ?>">
                                <?php echo $menu_item->post_title ?>
                                <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                            </a>
                        <?php endif; ?>

                        <?php if ( $parent_id == $menu_item->menu_item_parent ):
                            if ( !$submenu ): $submenu = true; ?>
                            <ul class="displayNone">
                            <?php endif; ?>
                            <li class="item">
                                <a href="<?php echo $menu_item->url; ?>" class="title"><?php echo $menu_item->post_title; ?></a>
                            </li>
                            <?php if ( $menuItems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                            </ul>
                            <?php $submenu = false; 
                            endif;
                        endif; ?>
                    <?php if ( $menuItems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                    </li>
                    <?php $submenu = false; endif; ?>
                        <?php $count++; endforeach; ?>
                    </ul>
                </nav>
        </div>
    </div>

    <div class="stick" style="position: sticky; top: 0;">
        <div id="stickContainer" class="container">
            <div class="firstColun">
                <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/09/Logo-IFRN-ZL.png" alt="gov.br">
            </div>
            <div class="secondColun" id="secondSection">
                <section>
                    <input type="radio" id="toggleSearch" name="i">
                    <label for="toggleSearch"></label>
                    <input type="radio" name="i" class="toggleForm">
                    <label for="toggleSearch"></label>
                    <?php get_search_form(); ?>
                    <a href="#" id="searchIcon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#" id="menuMobileIcon">
                        <i class="fa-solid fa-bars iconBackToMainPage custom-icon"></i>
                    </a>

                </section>
            </div>
        </div>

    </div>

    </header>
