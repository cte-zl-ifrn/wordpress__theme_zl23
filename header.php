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
    <div id="barraGov">
        <div class="containerSeparator">
            <div class="containerMenu">
                <div class="firstColun">
                    <a href="https://www.gov.br/pt-br">
                        <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/09/Gov.br_logo.svg" alt="gov.br">
                    </a>
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

        <div class="floatingMenu">
            <div class="containerMenu">
                <div class="firstColun">
                    <a href="<?php echo site_url(); ?>">
                        <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/09/Logo-IFRN-ZL.png"
                            alt="gov.br">
                    </a>
                </div>
                <div class="secondColun">
                    <section>
                        <i id="closeMainMenu" class="fa-solid fa-xmark"></i>
                    </section>
                </div>
            </div>

            <nav class="menuUl">
                <div class="voltar">
                    voltar
                </div>       

                <!--Menu Main-->
                <?php 
                wp_nav_menu( 
                array( 
                    'theme_location' => 'mainMenu'
                ) 
                );
                ?>
                
                <!-- Menu Gov --> 
                <?php 
                wp_nav_menu( 
                array( 
                    'theme_location' => 'govMenu'
                ) 
                );
                ?>
            </nav>
        </div>
    </div>

    <div class="stick">
        <div id="stickContainer" class="containerMenu">         
            <div class="firstColun">
                <a href="<?php echo site_url(); ?>">
                    <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/09/Logo-IFRN-ZL.png" alt="gov.br">
                </a>
            </div>
            
            <div class="secondColun" id="secondSection">              
                <?php
                $menuitems = getMainMenu();
                $locations = get_nav_menu_locations();
                ?>

                <nav id="mainMenuDesktop">
                <ul class="menu">
                    <?php
                    // https://gist.github.com/hitautodestruct/4345363 - Menu customizado
                    $count = 0;
                    $submenu = false;

                    foreach( $menuitems as $item ):

                        $link = $item->url;
                        $title = $item->title;
                        // item does not have a parent so menu_item_parent equals 0 (false)
                        if ( !$item->menu_item_parent ):

                        // save this id for later comparison with sub-menu items
                        $parent_id = $item->ID;
                    ?>
                        <li class="menu-item <?php if($menuitems[$count + 1]->menu_item_parent == $parent_id) : echo 'menu-item-has-children'; endif ?>">
                            <a href="<?php echo $link; ?>" class="title">
                                <?php echo $title; ?>            
                            </a>     
                        <?php $titleDrop = $title; endif; ?>

                            <?php if ( $parent_id == $item->menu_item_parent ): ?>
                                <?php if ( !$submenu ): $submenu = true; ?>
                                <div class="drop-menu">
                                    <div class="mainSub">
                                        <span class="menuTituloDrop"><?php echo $titleDrop ?></span>          
                                        <ul>
                                        <?php endif; ?>

                                            <li class="menu-item">
                                                <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                                            </li>
                                        <?php if ( !isset($menuitems[ $count + 1 ]) || $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                                        </ul>
                                    </div> 

                                    <?php 
                                        wp_nav_menu( 
                                        array( 
                                            'theme_location' => 'govMenu',
                                            'container_id' => 'govMenuDrop'
                                        ) 
                                        );
                                    ?>
                                    
                                </div>
                                <?php $submenu = false; endif; ?>

                            <?php endif; ?>

                        <?php if ( isset($menuitems[ $count + 1 ]->menu_item_parent) != $parent_id ): ?>
                        </li>                           
                        <?php $submenu = false; endif; ?>

                    <?php $count++; endforeach; ?>

                </ul>
                </nav>

                
                <?php get_search_form(); ?>
                <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
                <a href="#" id="menuMobileIcon">
                    <i class="fa-solid fa-bars iconBackToMainPage custom-icon"></i>
                </a>
            </div>
        </div>
    </div> 

    </header>
