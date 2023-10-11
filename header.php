<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
            
            <!--Sub menu institucional-->
        
            <div  id="menuList">
                <ul class="displayNone" id="institucionalSubMenu">
                  <p class="backBtn"><span><</span> voltar</p>
                   
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/sobre-o-campus/">Sobre o Campus</a>
                    </li>
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/estrutura-administrativa/">Estrutura administrativa</a>
                    </li>
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/transparencia-e-prestacao-de-contas/">Transparência e prestação de contas</a>
                    </li>
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/acesso-a-informacao/">Acesso à informação</a>
                    </li>
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/modelos-de-documentos/">Documentos institucionais</a>
                    </li>
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/portarias/">Atos administrativos</a>
                    </li>
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/legislacao-2/">Legislação</a>
                    </li>
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/programas-de-fomento/">Programas de formento</a>
                    </li>
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/tecnologia-da-informacao/">Serviços de informática</a>
                    </li>
                    <li class="instListItens">
                        <a href="https://ead.ifrn.edu.br/portal/institucional/sala-de-imprensa/">Sala de imprensa</a>
                    </li>
                </ul>

                <!-- Sub menu de ensino -->

                <ul class="displayNone" id="ensinoSubMenu">
                    <p class="backBtn"><span><</span> voltar</p>
                    
                      <li class="instListItens">
                          <a href="#">Processos Seletivos</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Diplomas e certificados</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Polos presenciais</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Calendários</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Biblioteca</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Serviços ao aluno</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Assistência Estudantil</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Laboratórios</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Rede de bibliotecas</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Midiateca</a>
                      </li>
                      <li class="instListItens">
                        <a href="">NAPNE</a>
                    </li>
                    <li class="instListItens">
                        <a href="">NEABI</a>
                    </li>
                  </ul>

                  <!--submenu pesquisa -->

                  <ul class="displayNone" id="pesquisaSub">
                    <p class="backBtn"><span><</span> voltar</p>
                    
                      <li class="instListItens">
                          <a href="#">Grupos de Pesquisa</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Projetos de Pesquisa</a>
                      </li>
                  </ul>

                  <!--extenção sub-->


                  <ul class="displayNone" id="extSub">
                    <p class="backBtn"><span><</span> voltar</p>
                     
                      <li class="instListItens">
                          <a href="#">Curso de Extensão</a>
                      </li>
                      <li class="instListItens">
                          <a href="">Projetos de Extensão</a>
                      </li>
                  </ul>
                  
                  <!--noticias sub-->

                  <ul class="displayNone" id="noticiasSub">
                    <p class="backBtn"><span><</span> voltar</p>
                     
                      <li class="instListItens">
                          <a href="">Reportagens</a>
                      </li>
                      <li class="instListItens">
                        <a href="">Notas Informativas</a>
                    </li>
                    <li class="instListItens">
                        <a href="">Eventos</a>
                    </li>
                      <li class="instListItens">
                          <a href="#">Web Stories</a>
                      </li>
                    <li class="instListItens">
                        <a href="">Educação em Pauta</a>
                    </li>
                  </ul>

                 <!--ajuda submenu-->
                 <ul class="displayNone" id="ajudaSub">
                    <p class="backBtn"><span><</span> voltar</p>
                    
                      <li class="instListItens">
                          <a href="">Central de ajuda</a>
                      </li>
                      <li class="instListItens">
                        <a href="">Contatos</a>
                    </li>
                    <li class="instListItens">
                        <a href="">Ouvidoria</a>
                    </li>
                  </ul>

                  <!-- serviços sub-->
                  <ul class="displayNone" id="servSub">
                    <p class="backBtn"><span><</span> voltar</p>
                     
                      <li class="instListItens">
                          <a href="">SUAP</a>
                      </li>
                      <li class="instListItens">
                        <a href="">Office 365</a>
                    </li>
                    <li class="instListItens">
                        <a href="">Webmail</a>
                    </li>
                  </ul>

                  <?php
                    wp_nav_menu(array(
                        'theme_location' => 'headerMenuLocation'
                    ));
                  ?>

                <ul class="menuUl">
                    <li class="menuItem">
                        <a href="https://ead.ifrn.edu.br/portal/" class="menulink">Inicio</a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink" id="institucional">Institucional <span>></span> </a>
                    </li>
                    <li class="menuItem">
                        <a href="https://ead.ifrn.edu.br/portal/cursos/" class="menulink">Cursos</a>
                    </li>
                    <li class="menuItem">
                        <a href="#" class="menulink" id="ensinoLink">Ensino <span>></span></a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink" id="pesquisaLink">Pesquisa <span>></span></a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink" id="extLink">Extensão <span>></span></a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink">Moodle</a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink" id="noticiasLink">Notícias <span>></span></a>
                    </li>
                    <li class="menuItem">
                        <a href="" class="menulink" id="ajudaLink">Ajuda <span>></span></a>
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
                    <a href="#" id="servLink">SERVIÇOS <span>></span> </a>
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
                            <i class="fa-solid fa-bars iconBackToMainPage custom-icon"></i>
                        </a>
                        
                    </section>
                </div>
            </div>
        </div>



    </header>
