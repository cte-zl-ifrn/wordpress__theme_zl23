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
        
         <div id="mainMenu">
                
            <ul class="menuUl">
                <nav class="menuUl">
                    <ul class="menuList">
                        <li class="menuItem" >
                            <a href="/portal/" class="menuItem" >Início</a>
                        </li>
                        <li>
                            <a href="#" class="menuItem" id="institucionalLink">Institucional
                                <span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                <span>
                            </a>
                            <ul class="displayNone submenuUl" id="institucionalSubMenu">
                                <li>
                                    <i class="fa-solid fa-chevron-left backMenuIcon" ></i>
                                    voltar
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/sobre-o-campus/">Sobre o Campus</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/transparencia-e-prestacao-de-contas/">Transparência
                                        e Prestação de Contas</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/estrutura-administrativa/">Estrutura
                                        Administrativa</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/telefones/">Lista de Telefones e
                                        E-mails</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/categoria/editais/">Processos Seletivos</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/tecnologia-da-informacao/">Serviços de
                                        Informática</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/programas-de-fomento/">Programas de
                                        Fomento</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/modelos-de-documentos/">Modelos de
                                        Documentos</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/portarias/">Atos Administrativos</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/legislacao-2/">Legislação</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/acesso-a-informacao/">Acesso à
                                        Informação</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/institucional/sala-de-imprensa/">Sala de Imprensa</a>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="https://ead.ifrn.edu.br/portal/cursos/" class="menuItem">Cursos</a>
                        </li>
                        <li >
                             <a href="#" class="menuItem" id="ensinolink">Ensino
                                <span > 
                                   <i class="fa-solid fa-chevron-right"></i>
                                </span>
                             </a>
                            <ul class="displayNone submenuUl" id="ensinoSubMenu">
                                <li>
                                    <i class="fa-solid fa-chevron-left backMenuIcon" ></i>
                                    voltar
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/ava">Ambiente Virtual de Aprendizagem</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/ensino/polos-de-apoio/">Polos Presenciais</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/direitos-do-aluno/">Serviços ao Aluno</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/ensino/midiateca/">Midiateca</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/ensino/calendarios/">Calendários</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/ensino/formas-de-ingresso/">Formas de Ingresso</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/ensino/napne/">NAPNE</a>
                                </li>
                                <li>
                                    <a
                                        href="https://ead.ifrn.edu.br/portal/cultura-conheca-o-nucleo-de-estudos-afro-brasileiros-e-indigenas-do-campus-natal-zona-leste/">NEABI</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/tutoriais/tutorial-para-entrega-de-diplomas/">Diplomas e
                                        Certificados</a>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="#" class="menuItem">Pesquisa
                                <span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="displayNone submenuUl">
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/pesquisa/linha-de-pesquisa/">Grupos de Pesquisa</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/pesquisa/projetos/">Projetos de Pesquisa</a>
                                </li>
                            </ul>
                        </li>
                        <li >
                                <a href="#" class="menuItem">Extensão
                                    <span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    <span>
                                </a>
                            <ul class="displayNone submenuUl">
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/extensao/cursos/">Cursos de Extensão</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/extensao/projetos/">Projetos de Extensão</a>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="https://ead.ifrn.edu.br/portal/ifrn-ead-ava/" class="menuItem">Moodle</a>
                        </li>
                        <li >
                             <a href="#" class="menuItem">Notícias
                                <span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="displayNone submenuUl">
                                <li class="menuItem" >
                                    <a href="https://ead.ifrn.edu.br/portal/noticias/reportagens/">Reportagens</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/noticias/notas-informativas/">Notas informativas</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/web-stories/">Web Stories</a>
                                </li>
                                <li>
                                    <a href="https://ead.ifrn.edu.br/portal/educacao-em-pauta/">Educação em Pauta</a>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="#" class="menuItem">Ajuda
                                <span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>

               
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
                   <a href="#" id="servLink">SERVIÇOS 
                     <span>
                             <i class="fa-solid fa-chevron-right"></i>
                     </span> 
                   </a>
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
