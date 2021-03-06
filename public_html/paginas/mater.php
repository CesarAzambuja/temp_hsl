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
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/animation.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/menu-topo-header.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/form.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/location.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/trabalhe-conosco.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/responsivo.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/mater.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/footer.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Hospital São Lucas | Plano Mater</title>
</head>
<body>
    <header>
        <div class="logo_mater">
            <a href="<?php echo INCLUDE_PATH; ?>../index.php" class="img_pm"><img src="<?php echo INCLUDE_PATH; ?>images/PlanoMater PNG Logo.png" alt="Logo Oficial do Hospital"></a>
            <a href="<?php echo INCLUDE_PATH; ?>../index.php" class="img_sl"><img src="<?php echo INCLUDE_PATH; ?>images/logotipo_oficial_sao_lucas.png" alt="Logo Oficial do Hospital"></a>
            <a href="<?php echo INCLUDE_PATH; ?>../index.php" class="btn btn-primary"><i class="fas fa-home"></i></a>
        </div>
    </header>


    
    <main class="planomater">
            <h1>Entre em contato para maiores informações </h1>
            
        <div class="contato-wrapper">
            <div class="contato-left">
                <img src="<?php echo INCLUDE_PATH; ?>images/card_mater.jpg" alt="">
            </div><!--contato-left-->
            <div class="contato-right">
                <h1>Contato</h1>
                <form onsubmit="FormMater.submit(event)" autocomplete="off">
                    <div class="input-group">
                        <input type="text" class="field" id="nomeMater" name="nomeMater" required autocomplete="off" />
                        <label for="nomeMater" class="field-label">Nome</label>
                    </div>
                    <div class="input-group">
                        <input type="email" class="field" id="emailMater" name="emailMater" required autocomplete="off" />
                        <label for="emailMater" class="field-label">Seu E-mail</label>
                    </div>
                    <div class="input-group">
                        <textarea class="field" id="mensagemMater" name="mensagemMater" required autocomplete="off" ></textarea>
                        <label for="mensagemMater" class="field-label">Mensagem</label>
                    </div>
                    <div class="card-button">
                        <button type="submit" class="button btn btn2">Enviar</button>
                    </div>
                
                </form>
            </div><!--contato-right-->
        </div><!--contato-wrapper-->
    </main><!--panomater-->

   
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
    <script src="<?php echo INCLUDE_PATH; ?>js/mater.js"></script>
    
</body>
</html>