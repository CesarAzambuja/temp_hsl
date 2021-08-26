<?php
	include_once ('template/url.php');
?>
<div class="fileira">
    <center>
	<div class="item">
        <a href="<?php echo $url; ?>qualidade/"><img src="<?php echo $url; ?>images/rodape_selo_3m.png" align="center" width="84" height="111"></a>
    </div>
    </center> 
	
    <div style="clear:both;"></div>
    
    <br><br>
    
    <center>
        <form class="pesquisa_form" method="get" action="<?php //echo $url; ?>pesquisa/" onsubmit="return vForm();">
            <input id="pesquisa_txt" class="campo" name="gsc.q" type="text" size="8" maxlength="100">
            <input id="pesquisa_btn" class="botao" type="submit" value="Pesquisar">
        </form>
    </center>
    
</div>