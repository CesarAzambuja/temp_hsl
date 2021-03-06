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
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/footer.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/responsivo.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Hospital São Lucas | Trabalhe Conosco</title>
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

    <main class="trabalhe-conosco">
        <div class="center">
            <section class="visit">
                <div class="fale-conosco">
                    <form action="" onsubmit="Form.submit(event)" class="form-trabalhe-conosco">
                        <fieldset>
                            <legend>Trabalhe Conosco</legend>
                            <div class="input-block">
                                <label for="fullName">Digite seu nome completo*</label>
                                <input type="text" name="fullName" id="fullName" maxlength="40" required>
                            </div><!--input-block-->

                            <div class="input-block">
                                <label for="whatsappOpportunity">Digite seu celular*</label>
                                <input type="text" data-js="phone" name="whatsappOpportunity" id="whatsappOpportunity" required>
                            </div><!--input-block-->

                            <div class="input-block">
                                <label for="emailOpportunity">Digite seu e-mail*</label>
                                <input type="email" name="emailOpportunity" id="emailOpportunity" maxlength="70" required />
                            </div><!--input-block-->

                            <div class="input-block">
                                
                                <select name="area" id="area" class="campo" style="padding: 12px 12px;
    line-height: 28px;
    font-size: 22px;
    border-radius: 8px;
    color: var(--color);
    font-weight: 300;
    border:1px solid var(--color);">
                                    <option value="">Escolha uma área</option>
                                    <option value="1" >Enfermagem</option>
                                    <option value="2" >Demais áreas</option>
                                </select>
                                <!--<input type="text" name="subjectOpportunity" id="subjectOpportunity" placeholder="Informe o cargo que deseja atuar" required />-->
                            </div><!--input-block-->

                            <div class="input-block">
                                <label for="instructionsOpportunity">Escreva uma mensagem* </label>
                                <textarea id="instructionsOpportunity" name="instructionsOpportunity" required maxlength="450"></textarea>
                            </div><!--input-block-->

                            <div class="input-block">
                                <!-- <label for="fileCurriculum" class="pointer"><span>Clique</span> para enviar seu currículo*</label> -->
                                <input type="file" name="fileCurriculum" id="fileCurriculum"  required accept="image/*, application/pdf" />
                            </div><!--input-block-->


                            <div class="input-block">
                                <button class="btn" type="submit">Enviar</button>
                            </div><!--input-block-->
                        </fieldset>
                    </form>
                </div><!--fale-conosco-->
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/f4dd9ff78b.js" crossorigin="anonymous"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/formTrabalhe.js"></script>
    
</body>
</html>