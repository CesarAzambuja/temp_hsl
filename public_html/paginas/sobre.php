<?php include('../config.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="hospital,são,lucas,maternidade,cuidados,saúde">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
     <!-- Make sure you put this AFTER Leaflet's CSS -->

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/menu-topo-header.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/form.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/location.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/animation.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/responsivo.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/footer.css">

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>images/favicon.png">
    <title>Hospital São Lucas | Sobre</title>
</head>
<body>
    <section class="topo">
        <div class="center">
            <a href="tel:(13)210250000"><i class="fas fa-phone-alt fone"></i>(13) 2102-5000</a>
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

    <main class="location">
        <div class="center">
            <section class="about_hsl">
                <div class="content_about">
                    <div class="text_about">
                        <p>Há mais de 60 anos dedicado à população da Baixada Santista, o Hospital São Lucas iniciou suas atividades como uma pequena clínica de ortopedia, e hoje possui completa, moderna e conceituada estrutura, com atendimento em diversas especialidades. A constante preocupação com a melhoria da qualidade dos serviços prestados, seja a partir de capacitação da equipe ou de reestruturação das instalações, é um dos principais diferenciais responsáveis por impulsionar o crescimento do Hospital e consequente excelência no serviço.</p>
                    </div>
                    <div class="image_about">
                        <img src="<?php echo INCLUDE_PATH; ?>images/fachada.jpg" alt="">
                    </div>
                </div>
                <div class="missions">
                    <div class="mission missao">
                        <h3>Missão  <i class="fas fa-flag"></i></h3>
                        
                        <p>Proporcionar aos clientes atendimento de qualidade por meio de tecnologia moderna e de profissionais qualificados, comprometidos com a presteza, humanização e ética.</p>
                    </div>
                    <div class="mission visao" >
                        <h3>Visão  <i class="fas fa-eye"></i></h3>
                        <p>Ser um Hospital de Referência e Excelência.</p>
                    </div>
                    <div class="mission valores">
                        <h3>Valores     <i class="fas fa-star"></i></h3>
                        <p>
                            Ética <br/>
                            Respeito <br/>
                            Humanização <br/>
                            Responsabilidade <br/>
                            Comprometimento 
                        </p>
                    </div>
                </div>

            </section>
            <section class="visit">

                <div class="fale-conosco">
                    <form action="" onsubmit="FormContato.submit(event)" class="form-fale-conosco">
                        <fieldset class="fieldset-left">
                            <legend>Contato</legend>
                            <div class="input-block">
                                <label for="name">Digite seu nome*</label>
                                <input type="text" name="name" id="name" maxlength="40" required>
                            </div><!--input-block-->

                            <div class="input-block">
                                <label for="whatsapp">Digite seu celular*</label>
                                <input type="text" name="whatsapp" data-js="phone" id="whatsapp" required>
                            </div><!--input-block-->

                            <div class="input-block">
                                <label for="email">Digite seu e-mail*</label>
                                <input type="email" name="email" id="email" maxlength="70" required>
                            </div><!--input-block-->

                            <div class="input-block">
                                <label for="instructions">Informe sua dúvida* </label>
                                <textarea id="instructions" name="instructions" required maxlength="450"></textarea>
                            </div><!--input-block-->


                            <div class="input-block">
                                <button class="btn" type="submit">Enviar</button>
                            </div><!--input-block-->
                            
                        </fieldset>
                    </form>
                </div><!--fale-conosco-->

                <div id="mapid">
                    
                </div>
            </section><!--visit-->
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/formContato.js"></script>
</body>
</html>