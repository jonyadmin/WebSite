<script type="text/javascript">
	$(function(){
	$("#carregando").hide();
			$("#optionsmenu a").click(function(){
				pagina = "../database/root/actions/"+$(this).attr('href')
	$("#carregando").ajaxStart(function(){
				$(this).show();
		})
	$("#carregando").ajaxStop(function(){
				$(this).hide();
		})
	$("#infoaccount").load(pagina)
	return false;
		})
	})
</script>

