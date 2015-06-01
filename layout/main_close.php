<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

      </div>

    </div>
      
    <div id="fim" style="width: 95%; margin-left:33px; padding: 50px 0 50px 0;">

      <!--<div class="exlinespd"></div>-->
      
      <br />
  
  
      <div style="font-family: 'arial'; font-size: 8pt;">

      <script type="text/javascript">

        function goto(id) {
        obj = document.getElementById(id);
        redir= obj.selectedIndex;
          if(obj.options[redir].value != '') {
            location = obj.options[redir].value;
           }
        } 

      </script>

      <center>
      
        <table cellpadding="5">
			<div id="rodape" style="text-align: left;">
				<div class="rodape-div">
					<b>PRINCIPAIS</b>
					<a href="http://ragnayokai.net/board3rd/index.php?/topic/366-downloads-ragnayokai-3rd-2015/#entry4426" target="_blank">Downloads</a>
					<a href="indexbf23.html?p=informacoes">Informações</a>
					<a href="index2522.html?p=registrar">Registre-se</a>
					<a href="indexb2da.html?p=regras">Regras de Conduta</a>
					<a href="index5dcb.html?p=contato">Atendimento</a>
					<a href="index7de9.html?p=rankings">Equipe da Staff</a>
					<a href="index7de9.html?p=rankings">Junte-se a Staff</a>
				</div>
				<div class="rodape-div">
					<b>ADICIONAIS</b>
					<a href="index71f2.html?p=entretenimento">Entretenimento</a>
					<a href="index4cb8.html?p=duvidas">Dúvidas Frequentes</a>
					<a href="index6805.html?p=shopping/index">Shopping Premium</a>
					<a href="indexa597.html?p=tutoriais">Tutoriais</a>
				</div>
				<div class="rodape-div">
					<b>DIVERSOS</b>
					<a href="index22bb.html?p=recuperar">Recuperar Senha</a>
					<a href="indexce42.html?p=doacao">Faça uma Doação</a>
					<a href="index15a9.html?p=eventos">Eventos e Horários</a>
					<a href="index7de9.html?p=rankings">Rankings</a>
				</div>
				<div class="rodape-div">
					<b>IMPORTANTE</b>
					<a href="indexa7a2.html?p=responsabilidade">Responsabilidade</a>
					<a href="index173a.html?p=equipe">Administração</a>
					<a href="index45f2.html?p=infraestrutura">Infraestrutura</a>
				</div>
			</div>
          
        </table>
		<table>
			<div style="margin-top:200px;">
				<tr>
					<td style="text-align: center; padding: 10px;">
					  <img src="images/logo_real.png" alt="Powered by ERODS FUSION" />
					</td>
					<td style="text-align: left; margin-top:-5px;">
					  <div style="color: #fff;">
						Criado por [ADM]Ravnos.<br />
						GlobalRAG Ragnarok Online copyright &copy; 2015~2016.<br />
						Ragnarok Online copright &copy; Gravity Corp.<br />
						<?php runStat(); ?>
					  </div>
					</td>
				  </tr>
			</div>
		  </table>
      </center>
      
      </div>
      
        
      <div id="smokescreen" style="display: none">&nbsp;</div>
      
      <div id="popUpBox" style="display: none; background: #ffffff; width: 160px; height: 160px; position: fixed; top: 50%; margin-top: -80px; left: 50%; margin-left: -80px; z-index: 9;">
        <center>
          <div id="popUp" style="padding: 30px; height: 100px; width: 75px;"></div>
          <div style="width: 160px; background: #ffffff; padding: 3px 0px 3px 0px;"><a class="random" onclick="setDisplay('popUpBox'); setDisplay('smokescreen');"><?php echo message('ajax_close_w'); ?></a></div>
        </center>
      </div>
      
      <div id="cardPopUpBox" style="display: none; z-index: 9; position: fixed; left: 0; right: 0; top: 50%; margin-top: -250px; cursor: pointer;">
        <center>
          <div id="cardPopUp" onclick="setDisplay('cardPopUpBox'); setDisplay('smokescreen');" style="width: 300px; height: 400px; background: #ffffff;"></div>
        </center>
      </div>
    
      <div id="ajaxFrame" class="propertyBox statBox" style="display: none">
      
        <table cellspacing="1" class="whitetable">
        
          <tr class="grayrow">
            <td><?php echo message('ajax_options'); ?>:</td>
          </tr>
          
          <tr>
            <td class="alignment1">
              <div id="ajaxDialogue"></div>
            </td>
          </tr>
          
        </table>
        
      </div>
  
    </div>
  
  </body>


</html>