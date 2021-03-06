<?php include('config.php');?>
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
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/responsivo.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/footer.css">
    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>images/favicon.png">
    <title>Hospital São Lucas</title>
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
            <a href="/"><img src="<?php echo INCLUDE_PATH; ?>images/logotipo_oficial_sao_lucas.png" alt="Logo Oficial do Hospital"></a>
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
    
    <main>
        <!-- conteúdo principal semântico aqui -->
        <section class="cards_services">
            <div class="container">

                <h1 class="conteSaoLucas">Nossos Serviços</h1>
                <div class="cards">
                    <div class="card">
                        <h1>Pronto Atendimento 24H</h1>
                        <div class="card_image">
                            <img src="<?php echo INCLUDE_PATH; ?>images/teste_card.jpeg" alt="">
                            <div class="card_text"><p>Nossa equipe especializada em emergência disponível 24h</p></div>
                        </div><!--card_image-->
                    </div><!--card-->
                    <div class="card">
                        <h1>Ginecologia e Obstetrícia</h1>
                        <div class="card_image">
                            <img src="<?php echo INCLUDE_PATH; ?>images/ginecologia.jpeg" alt="">
                            <div class="card_text"><p>Infraestrutura e equipe preparada para acompanhar sua gestação e parto</p></div>
                        </div><!--card_image-->
                    </div><!--card-->
                    <div class="card">
                        <h1>Ortopedia e Traumatologia</h1>
                        <div class="card_image">
                            <img src="<?php echo INCLUDE_PATH; ?>images/dor_costas.jpeg" alt="">
                            <div class="card_text"><p>Atendimento especializado em ortopedia e traumatologia</p></div>
                        </div><!--card_image-->
                    </div><!--card-->
                </div><!--cards-->

            </div><!--container-->
        </section>

        <section class="information">
            <div class="container">

                <h1  class="conteSaoLucas">Mais Informações</h1>
                    <div class="wrapper-information">
                    <div class="card-information">
                        <div class="wrapper-img-information">
                            <img src="<?php echo INCLUDE_PATH; ?>images/saiba-mais.jpg" alt="Sobre">
                            <div class="foto-legenda">
                                <img src="<?php echo INCLUDE_PATH; ?>images/foto_legenda_bg.png" alt="">
                                <p>O nosso São Lucas</p>
                            </div>
                        </div><!--wrapper-img-information-->
                        <p class="text-information">
                            Sobre um dos mais importantes hospitais da região.
                        </p>
                        <a href="<?php echo INCLUDE_PATH_PAGINAS; ?>sobre.php" class="btn btn-information">Saiba mais</a>
                    </div><!--card-information-->

                    <div class="card-information">
                        <div class="wrapper-img-information">
                            <img src="<?php echo INCLUDE_PATH; ?>images/pronto-atendimento.jpg" alt="pronto atendimento">
                            <div class="foto-legenda">
                                <img src="<?php echo INCLUDE_PATH; ?>images/foto_legenda_bg.png" alt="">
                                <p>Pronto atendimento</p>
                            </div>
                        </div><!--wrapper-img-information-->
                        <p class="text-information">
                            Com equipe especialista em emergências em todo momento.
                        </p>
                        <button onclick="prontoAtendimento()" class="btn btn-information">Saiba mais</button>
                    </div><!--card-information-->

                    <div class="card-information">
                        <div class="wrapper-img-information">
                            <img src="<?php echo INCLUDE_PATH; ?>images/maternidade.jpg" alt="Maternidade">
                            <div class="foto-legenda">
                                <img src="<?php echo INCLUDE_PATH; ?>images/foto_legenda_bg.png" alt="">
                                <p>Maternidade</p>
                            </div>
                        </div><!--wrapper-img-information-->
                        
                        <p class="text-information">
                            Um momento de delicadeza que requer todo o cuidado, carinho e atenção.
                        </p>
                        <button onclick="maternidade()" class="btn btn-information">Saiba mais</button>
                    </div><!--card-information-->

                    <div class="card-information">
                        <div class="wrapper-img-information">
                            <img src="<?php echo INCLUDE_PATH; ?>images/visitantes.jpg" alt="Visitante">
                            <div class="foto-legenda">
                                <img src="<?php echo INCLUDE_PATH; ?>images/foto_legenda_bg.png" alt="">
                                <p>Visitantes</p>
                            </div>
                        </div><!--wrapper-img-information-->
                        
                        <p class="text-information">
                            Informe-se sobre alguns procedimentos básicos adotados para assegurar o bem-estar do paciente.
                        </p>
                        <button onclick="visitante()" class="btn btn-information">Saiba mais</button>
                    </div><!--card-information-->

                    <div class="card-information">
                        <div class="wrapper-img-information">
                            <img src="<?php echo INCLUDE_PATH; ?>images/rotinas.jpg" alt="Rotinas de internação">
                            <div class="foto-legenda">
                                <img src="<?php echo INCLUDE_PATH; ?>images/foto_legenda_bg.png" alt="">
                                <p>Rotinas de internação</p>
                            </div>
                        </div><!--wrapper-img-information-->
                        
                        <p class="text-information">
                            Saiba mais sobre os procedimentos do Hospital.
                        </p>
                        <button onclick="rotinaInternacao()" class="btn btn-information">Saiba mais</button>
                    </div><!--card-information-->

                    <div class="card-information">
                        <div class="wrapper-img-information">
                            <img src="<?php echo INCLUDE_PATH; ?>images/covid.jpeg" alt="Comunicado Covid">
                            <div class="foto-legenda">
                                <img src="<?php echo INCLUDE_PATH; ?>images/foto_legenda_bg.png" alt="">
                                <p>Comunicados Covid</p>
                            </div>
                        </div><!--wrapper-img-information-->
                        
                        <p class="text-information">
                            Saiba mais sobre os procedimentos do Hospital com relação a COVID-19.
                        </p>
                        <a href="<?php echo INCLUDE_PATH; ?>/images/comunicado-covid.pdf" target="_blank" class="btn btn-information">Saiba mais</a>
                    </div><!--card-information-->

                </div><!--wrapper-information-->
            </div><!--container-->
        </section><!--information-->

        <section class="planos">
            <div class="header-planos">
                <h1 class="conteSaoLucas">Planos de saúde</h1>
                <p>Entre em contato com equipe de atendimento para verificar a listagem atualizada e a corbetura do seu plano de saúde!</p>
            </div>
            <div class="wrapper">
            
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/allianz.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/Amil-logo.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/unimed.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/bradesco_saude.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/assefaz.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/cabesp.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/cassi-logo.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/economus-1024x303.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/funcesp.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/Gama-Saúde-300x144.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/geap.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/notredame.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/petrobras.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/porto_saude_720.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/Postal-Saude-1 (1).png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/sompo.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/sulamerica-saude-PNG.png" alt="">
                </div>

                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/uhs.png" alt="">
                </div>
                <div class="card-plano">
                    <img src="<?php echo INCLUDE_PATH; ?>images/planos/usisaude.png" alt="">
                </div>
            </div>
        </section>

        <div class="modal">
            <div class="modal-overlay">
                
            </div><!--modal-overlay-->
        </div><!--modal-->
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/f4dd9ff78b.js" crossorigin="anonymous"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/banner.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>