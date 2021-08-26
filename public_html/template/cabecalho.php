<?php
	include_once ('template/url.php');
?>
<script type="text/javascript">

	function vForm(){
		return false;
	}

	$(document).ready(function() {
		// formulario de pesquisa
		$('.pesquisa_form').submit(function(e) {
			e.preventDefault();
			var q = $('#pesquisa_txt').val();
			if(q==""){
				new Messi('Informe o que deseja pesquisar.', {
					title: 'Atenção',
					modal: true,
					buttons: [{id: 0, label: 'OK'}],
					callback: function() { $('#pesquisa_txt').focus(); }
				});
				return false;
			}else{
				window.location="<?php echo $url; ?>pesquisa/#gsc.tab&gsc.q="+q; 
			}
		});
	});

</script>
<div id="cabecalho">
    <a id="logo" href="<?php echo $url; ?>"></a>
    <!--<div id="anos"></div>-->
    <ul id="menu_um">
        <li class="primeiro"><a href="<?php echo $url; ?>localizacao/">Localização</a></li>
        <li><a href="<?php echo $url; ?>contato/">Contato</a></li>
        <li><a href="<?php echo $url; ?>trabalhe-conosco/">Trabalhe Conosco</a></li>
        <li><a href="http://webmail.saolucas.com.br/" target="_blank">Webmail</a></li>
        <li class="ultimo"><a href="<?php echo $url; ?>canal-medico/">Canal Médico</a></li>
    </ul>
    <ul id="menu_dois">
        <div>
            <li><a href="<?php echo $url; ?>dicas-de-saude-e-bem-estar/">Dicas</a></li>
            <li><a href="<?php echo $url; ?>especialidades/">Especialidades</a></li>
            <li><a href="<?php echo $url; ?>centro-cirurgico/">Centro Cirúrgico</a></li>
            <li><a href="<?php echo $url; ?>servicos-auxiliares/">Serviços Auxiliares</a></li>
        </div>
        <div>
            <li><a href="<?php echo $url; ?>plantonistas/">Médicos Plantonistas</a></li>
            <li><a href="<?php echo $url; ?>uti-e-uti-neonatal/">UTI e UTI Neonatal</a></li>
            <li><a href="<?php echo $url; ?>convenios/">Convênios</a></li>
            <li><a href="<?php echo $url; ?>conheca-o-sao-lucas/">Conheça O São Lucas</a></li>
        </div>
    </ul>
    <div id="links">
        <a href="<?php echo $url; ?>Comunicado-COVID-19/" class="botao"><b>Comunicado COVID-19</b><br><b>CORONAVIRUS</b></a>
        <a href="https://www.facebook.com/saolucassantos" target="_blank" class="facebook"></a>
    </div>
    
    <!--
    <form id="pesquisa_form" method="get" action="<?php //echo $url; ?>pesquisa/" onsubmit="return vForm();">
        <input id="pesquisa_txt" class="campo" name="gsc.q" type="text" size="8" maxlength="100">
        <input id="pesquisa_btn" class="botao" type="submit" value="Pesquisar">
        <a href="https://www.facebook.com/saolucassantos" target="_blank" class="facebook"></a>
    </form>
    -->
</div>