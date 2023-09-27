<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
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
            <div id="menuList">
                <ul class="menuUl">
                    <li class="menuItem">
                        <a href="https://ead.ifrn.edu.br/portal/" class="menulink">Inicio</a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink">Institucional</a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink">Cursos</a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink">Ensino <span>></span></a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink">Pesquisa <span>></span></a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink">Extensão <span>></span></a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink">Moodle</a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink">Notícias <span>></span></a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink">Ajuda  </a>
                    </li>

                </ul>
                
          


            </div>
            <ul id="secondFloatUl">
                <li>
                    <a href="">PORTAL IFRN <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span> </a>
                </li>
                <li>
                    <a href="">E-MEC <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
                </li>
                <li>
                    <a href="">GOV.BR <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
                </li>
                <li>
                    <a href="">SERVIÇOS <span>></span> </a>
                </li>
            </ul>
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
                        <form id="myForm" method="get">
                            <input type="search" role="search" placeholder="digite aqui" id="searchTopMenu">
                            <i class="fa-sharp fa-solid fa-circle-xmark hideForm"></i>

                        </form>

                        <a href="#" id="searchIcon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#" id="menuMobileIcon">
                            
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </header>

