<?php include('../config.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="hospital,são,lucas,maternidade,cuidados,saúde">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/menu-topo-header.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/animation.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/specialties.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/responsivo.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/footer.css">
    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>images/favicon.png">
    <title>Hospital São Lucas | Especialidades </title>
</head>
<body>
    <section class="topo">
        <div class="center">
            <a href="tel:(13)21025000"><i class="fas fa-phone-alt fone"></i>(13) 2102-5000</a>
            <a href="https://www.facebook.com/saolucas.santos/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://instagram.com/saolucas.santos?igshid=1d5bp2h5s5msw" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/saolucas_santos?s=08" target="_blank"><i class="fab fa-twitter aquablue"></i></a>
        </div><!--center-->
    </section>
    <header>
        <div class="logo">
            <a href="<?php echo INCLUDE_PATH; ?>../index.php"><img src="<?php echo INCLUDE_PATH; ?>images/logotipo_oficial_sao_lucas.png" alt="Logo Oficial do Hospital"></a>
        </div>
        <div class="menu_desktop">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH_PAGINAS; ?>sobre.php" class="efeito_btn">O HOSPITAL</a></li>
                <li><a href="<?php echo INCLUDE_PATH_PAGINAS; ?>especialidades.php" class="efeito_btn">ESPECIALIDADES</a></li>
                <li><a href="<?php echo INCLUDE_PATH_PAGINAS; ?>mater.php" class="efeito_btn">PLANOMATER</a></li>
                <li><a href="<?php echo INCLUDE_PATH_PAGINAS; ?>trabalhe-conosco.php" class="efeito_btn">TRABALHE CONOSCO</a></li>
                <li><a href="https://webmail-seguro.com.br/" class="efeito_btn">WEBMAIL</a></li>
            </ul>
        </div>
        <div class="icon">
            <i class="fas fa-bars active"></i>
        </div>
        
        <div class="menu_mobile">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH_PAGINAS; ?>sobre.php" class="efeito_btn">O HOSPITAL</a></li>
                <li><a href="<?php echo INCLUDE_PATH_PAGINAS; ?>especialidades.php" class="efeito_btn">ESPECIALIDADES</a></li>
                <li><a href="<?php echo INCLUDE_PATH_PAGINAS; ?>mater.php" class="efeito_btn">PLANOMATER</a></li>
                <li><a href="<?php echo INCLUDE_PATH_PAGINAS; ?>trabalhe-conosco.php" class="efeito_btn">TRABALHE CONOSCO</a></li>
                <li><a href="https://webmail-seguro.com.br/" class="efeito_btn">WEBMAIL</a></li>
            </ul>
        </div>


    </header>
    <section class="banner " id="slider">
    <img  class="selected" src="<?php echo INCLUDE_PATH; ?>images/tarja (sao lucas).jpg">
        <img src="<?php echo INCLUDE_PATH; ?>images/tarja (atendimento personalizado).jpg">
        <img src="<?php echo INCLUDE_PATH; ?>images/tarja (covid).jpg">
        <img src="<?php echo INCLUDE_PATH; ?>images/tarja (hemo).jpg">
        <img src="<?php echo INCLUDE_PATH; ?>images/tarja (ortopedia).jpg">
        <img src="<?php echo INCLUDE_PATH; ?>images/tarja (parto humanizado).jpg">
    </section>

    <main class="specialties">
        <!-- conteúdo principal semântico aqui -->
        <div class="center">
            <h1>Clique em uma ou mais opções para exibir os profissionais</h1>
        <nav class="menu-search">
            <button class="ortopediaT">
                <img src="<?php echo INCLUDE_PATH; ?>images/ortoTrauma.jpg" alt="Ortopedia e Traumatologia" title="Ortopedia e Traumatologia">
                <span> Ortopedia e Traumatologia</span>
            </button>
            
            <button class="ortopediaE">
                <img src="<?php echo INCLUDE_PATH; ?>images/dor_costas.jpeg" alt="Ortopedista Especialista" title="Ortopedista Especialista">
                <span>Ortopedista Especialista</span>
            </button>

            <button class="especialidadeC">
                <img src="<?php echo INCLUDE_PATH; ?>images/especialista_cdt.jpg" alt="Especialista no CDT" title="Especialista no CDT">
                <span>Especialidades no CDT</span>
            </button>

            <button class="ginecologiaObs">
                <img src="<?php echo INCLUDE_PATH; ?>images/ginecologia.jpeg" alt="Ginecologia e Obstetricia" title="Ginecologia e Obstetricia">
                <span>Ginecologia e Obstetricia</span>
            </button>
        </nav><!--menu-search-->

            <section class="profession" id="ortopedia">

                <div id="orto" class="oculto">
                    <h2>Ortopedia e Traumatologia</h2>
                        <div class="professionals" id="ortoTrauma">
                            <div class="professional-single">
                                <p>Wagner B. Menezes</p>
                                <span>Ortopedia Geral e Cirurgia de mão</span>
                            </div>

                            <div class="professional-single">
                                <p>Marcelo Koh Uezumi</p>
                                <span>Ombro e cotovelo</span>
                            </div>

                            <div class="professional-single">
                                <p>Alexandre Evêncio da Silva</p>
                                <span>Ortopedia Geral e Cirurgia do Pé e</span>
                                <span>Tornozelo</span>
                            </div>

                            <div class="professional-single">
                                <p>Miguel Ângelo de Góes</p>
                                <span>Ortopedia Geral</span>
                            </div>

                            <div class="professional-single">
                                <p>Mario Pierry</p>
                                <span>Ortopedia geral e traumatologia</span>
                                <span>Cirurgia Ombro e Cotovelo</span>
                            </div>

                            <div class="professional-single">
                                <p>Luciana Raineri Bicudo</p>
                                <span>Ortopedia geral e traumatologia e </span>
                                <span>ORTOPEDIA PEDIÁTRICA</span>
                            </div>

                            <div class="professional-single">
                                <p>Victor Augusto L. P. Pinto</p>
                                <span>Ortopedia e traumatologia</span>
                            </div>

                            <div class="professional-single">
                                <p>Henrique de Figueiredo Biaggioni</p>
                                <span>Ortopedia e traumatologia</span>
                                <span>Doenças do metabolismo ósseo</span>
                            </div>

                            <div class="professional-single">
                                <p>Carlos Roberto Batista</p>
                                <span>Especialidade em Ortopedia Geral e </span>
                                <span>Traumatologia</span>
                            </div>

                            <div class="professional-single">
                                <p>Luiz Augusto Raineri Bicudo</p>
                                <span>Ortopedia e traumatologia</span>
                                <span>Especialista em Joelho</span>
                            </div>

                            <div class="professional-single">
                                <p>André Luís fontes da silva</p>
                                <span>Ortopedia e traumatologia</span>
                                <span>Cirurgia em geral</span>
                            </div>

                            <div class="professional-single">
                                <p>Rogerio Buchmann Rodrigues</p>
                                <span>Ortopedia e traumatologia</span>
                                <span>Cirurgia do Quadril Adulto</span>
                            </div>

                            <div class="professional-single">
                                <p>José Luiz Garcia Diaz</p>
                                <span>Ortopedia e traumatologista</span>
                                <span>Cirurgia pé e tornozelo</span>
                            </div>

                            <div class="professional-single">
                                <p>Roberto Caraviello Junior</p>
                                <span>Ortopedia e traumatologia</span>
                                <span>Cirurgia em Geral</span>
                            </div>

                            <div class="professional-single">
                                <p>Diego Gimenes Lopes Santos</p>
                                <span>Ortopedia e traumatologia</span>
                            </div>

                            <div class="professional-single">
                                <p>Igor Marijuschkin</p>
                                <span>Ortopedia e cirurgia do pé</span>
                            </div>

                            <div class="professional-single">
                                <p>Robson Martins Tavares</p>
                                <span>Ortopedia e traumatologia / Artroscopia</span>
                                <span>Traumatologia Desportiva / Joelho</span>
                            </div>

                            <div class="professional-single">
                                <p>José Luís Santos de Farias</p>
                                <span>Ortopedia e traumatologia</span>
                                <span>Cirurgia do quadril adulto</span>
                            </div>

                            <div class="professional-single">
                                <p>Sergio Ribeiro de Magalhães</p>
                                <span>Reconstrução e alongamento ósseo</span>
                                <span>(fixadores externos)</span>
                            </div>

                            <div class="professional-single">
                                <p>Alexandre A. M. Vianna</p>
                                <span>Ortopedia e traumatologia</span>
                            </div>

                            <div class="professional-single">
                                <p>German Vassilieff</p>
                                <span>Patologia Clínicas e Cirúrgicas da </span>
                                <span>Coluna Vertebral</span>
                                <span>Ortopedia e Traumatologia</span>
                                <span>Doenças do Metabolismo Ósseo</span>
                            </div>
                        </div><!--professionals-->
                </div><!--orto-->

                <div id="ortoEsp" class="oculto">
                    <h2>Ortopedista Especialista</h2>
                        <div class="professionals" id="ortopedistaEsp">
                            <div class="professional-single">
                                <span>Especialista em coluna:</span>
                                <p>Dr. German Vassilieff</p>
                            </div>

                            <div class="professional-single">
                                <span>Especialista em ombro:</span>
                                <p>Dr. Marcelo Koh Uezumi</p>
                            </div>
                        </div><!--professionals-->
                </div><!--ortoEsp-->

                <div id="cdt" class="oculto">
                    <h2>Especialidades no CDT</h2>
                        <div class="professionals" id="especialidadeCDT">
                            <div class="professional-single">
                                <span>Buco-maxilo:</span>
                                <p>Dr. Rafael Campos</p>
                            </div>

                            <div class="professional-single">
                                <span>Cirurgião Cabeça e Pescoço:</span>
                                <p>Dr. Caio Trindade</p>
                            </div>

                            <div class="professional-single">
                                <span>Cirurgião Cardíaco:</span>
                                <p>Dr. Pedro Saab</p>
                            </div>

                            <div class="professional-single">
                                <span>Cirurgião Geral:</span>
                                <p>Dr. Arnaldo Teruya</p>
                            </div>

                            <div class="professional-single">
                                <span>Cirurgião Plástico:</span>
                                <p>Dr.Allan Kardec José Ferreira</p>
                            </div>

                            <div class="professional-single">
                                <span>Cirurgião Vascular:</span>
                                <p>Dr. Alisson Zamara Lopes</p>
                            </div>

                            <div class="professional-single">
                                <span>Clínica médica:</span>
                                <p>Dr. Daniel Lustoza</p>
                            </div>

                            <div class="professional-single">
                                <span>Equipe cirurgia plástica:</span>
                                <p> Dr. Saldanha(Residência)</p>
                            </div>

                            <div class="professional-single">
                                <span>Neurocirurgião:</span>
                                <p>Dr. Emílio Macedo</p>
                            </div>

                            <div class="professional-single">
                                <span>Neurocirurgião:</span>
                                <p>Dr. João Luís Cabral</p>
                            </div>

                            <div class="professional-single">
                                <span>Neurocirurgião:</span>
                                <p>Dr. Carlos Peres</p>
                            </div>

                            <div class="professional-single">
                                <span>Neuro-clinico:</span>
                                <p>Dr. William Thiago Almeida Leite</p>
                            </div>

                            <div class="professional-single">
                                <span>Otorrino:</span>
                                <p>Dra. Camila Pereira de Moraes</p>
                            </div>

                            <div class="professional-single">
                                <span>Urologista:</span>
                                <p>Dr. Felipe Camargo Bestane</p>
                            </div>
                        </div><!--professionals-->
                </div><!--cdt-->

                <div id="gineObs" class="oculto">
                    <h2>Ginecologia e Obstetricia</h2>
                        <div class="professionals" id="ginecologia">
                            <div class="professional-single">
                                <p>Dr. Adriano Paiao dos Santos</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Anna Paula Freitas Lemes</p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Antonio Alves Lourenco</p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Bruno de Rivoredo Cristofolini</p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Bruno R. Z. Muniz Pontes</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Camila Barbosa de Oliveira</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Carla Alambert Shumann</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Carolina Justo Tirloni  </p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Caroline Cervante Chagas</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Catarina T. R. G. de Sousa </p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Clareana Ghiraldini Geraldes</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Daynah M. M. Povoa</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Debora K. P. de Carvalho</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Deborah M. P. S. Bonazzi </p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Diego Gomes Ferreira</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Dolores Pires Sneig </p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Dunnia Peredo Murtha</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Fernanda N. Dantas de Souza</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Gabriela Barbosa de Oliveira</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Gabriela Vieira Freire</p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Guilherme Caldeira Vicente</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Izilda Ferreira Pupo</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Julia Francato Chiaradia</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Larissa Pereira Quintela</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Laura H. P. Silva e Moreira</p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Lucas Borges de Souza </p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Luiz Carlos Campos</p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Marcus Mansur Japur</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Mariela de G. B. Battistella</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Marina F. Haddad Piccinalli</p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Marion Curado da Silva</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Mayra M. Barros Silva</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Najila Britto S. dos Santos</p>
                            </div>

                            <div class="professional-single">
                                <p>Dr. Ozanir Campos Couto </p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Rafaella Rubim Camargo</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Rubia Melissa F. Pereira</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Samia S. E. Kassen</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Talita Quadrado Penati </p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Vanessa Maria da C. B. Lopes</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Vera Lúcia de Jesus Marques</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Veridiana Salutti</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Vivian M. G. Marçal</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Viviane O. V. GALIANO</p>
                            </div>

                            <div class="professional-single">
                                <p>Dra. Waldely M. de Freitas Pinto</p>
                            </div>

                        </div><!--professionals-->
                </div><!--gineObs-->

            </section><!--profession-->

        </div><!--center-->

    </main>


    <footer>
        <div class="center">

            <section class="contact-footer">
                <div class="contact-us">
                    <p>Fale Conosco:</p>
                    <div class="headset">
                        <i class="fas fa-phone-alt"><span>(13) 2102-5000</span></i>
                    </div><!--headset-->
                </div><!--contact-us-->

                <div class="contact-us">
                    <p>Nos acompanhe nas redes sociais:</p>
                    <div class="social-media">
                        <a href="https://www.facebook.com/saolucas.santos/" target="_blank"><i class="fab fa-facebook-f blue"></i></a>
                        <a href="https://instagram.com/saolucas.santos?igshid=1d5bp2h5s5msw" target="_blank"><i class="fab fa-instagram rose"></i></a>
                        <a href="https://twitter.com/saolucas_santos?s=08" target="_blank"><i class="fab fa-twitter aquablue"></i></a>
                        <!-- <i class="fab fa-youtube red"></i> -->
                        <!-- <i class="fab fa-linkedin-in blue-linkedin"></i> -->
                    </div><!--social-media-->
                </div><!--contact-us-->
            </section><!--contact-footer-->
            
            <section class="general-services">
                <div class="our-services">
                    <h3>Nossos Serviços</h3>
                    <p>MATERNIDADE</p>
                    <p>CENTRO CIRÚRGICO</p>
                    <p>Anatomia Patológica</p>
                    <p>Artroscopia</p>
                    <p>Banco de Sangue</p>
                    <p>Cirurgias por Vídeo</p>
                    <p>Colonoscopia</p>
                    <p>Eletrocardiograma</p>
                    <p>Endoscopia Digestiva Alta</p>
                    <p>Histeroscopia/Laparoscopia</p>
                    <p>Laboratório de Análises Clínicas</p>
                    <p>Nutrição Enteral e Parenteral</p>
                    <p>Radiologia Intervencionista</p>
                    <p>Serviço de Hemodinâmica</p>
                    <p>Tomografia Computadorizada Helicoidal</p>
                    <p>Ultrassonografia</p>
                    <p>Ultrassonografia Doppler</p>
                </div><!--our-services-->

                <div class="our-services">
                    <h3>Especialidades</h3>
                    <p>ORTOPEDIA E TRAUMATOLOGIA</p>
                    <p>ESPECIALIDADES NO CDT</p>
                    <p>GINECOLOGIA E OBSTETRICIA</p>
                    <p>ORTOPEDISTA</p>
                </div><!--our-services-->

                <div class="our-services">
                    <h3>O Hospital</h3>
                    <p>Tecnologias Modernas</p>
                    <p>Estrutura Conceituada</p>
                    <p>Atendimento em Diversas Especialidades</p>
                    <p>Qualidade nos serviços prestados</p>
                    <img src="<?php echo INCLUDE_PATH; ?>images/rodape_selo_3m.png" alt="">
                    <p class="doctor">Dr. Nicola Jorge Carneiro Neto <br>
                        Diretor Técnico <br>
                        CRM: 125.142
                    </p>
                    <p class="doctor">Dr. Marco Cavalhero<br>
                        Diretor Clínico <br>
                        CRM: 63.305
                    </p>

                </div><!--our-services-->
            </section><!--general-services-->

            <div class="footer-developer">
                <p class="copy">&copy; Todos os direitos reservados Hospital São Lucas</p>
                <p class="copy dev">Desenvolvido por<a href="http://waynetechnology.com.br" target="_blank"> Wayne Technology</a></p>
            </div><!--footer-developer-->
            <i id="btn_top" onclick="backToTop()" class="fas fa-arrow-up"></i>

        </div><!--center-->

    </footer>

    <script src="https://kit.fontawesome.com/f4dd9ff78b.js" crossorigin="anonymous"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/banner.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/especialidade.js"></script>

</body>
</html>