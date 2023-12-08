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

    <div class="stick" style="position: sticky; top: 0;">
        <div id="stickContainer" class="containerMenu">
            <div class="firstColun">
                <a href="<?php echo site_url(); ?>">
                    <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/09/Logo-IFRN-ZL.png" alt="gov.br">
                </a>
            </div>
            <div class="secondColun" id="secondSection">
                <?php 
                wp_nav_menu( 
                array( 
                    'theme_location' => 'mainMenu'
                ) 
                );
                ?>
                <?php get_search_form(); ?>
                <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
                <a href="#" id="menuMobileIcon">
                    <i class="fa-solid fa-bars iconBackToMainPage custom-icon"></i>
                </a>
            </div>
        </div>
    </div> 

    </header>
