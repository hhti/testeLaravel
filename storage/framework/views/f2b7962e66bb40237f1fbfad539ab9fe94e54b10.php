<?php $__env->startSection('content'); ?>
<br/>
<br/>
<br/>
<div class="panel panel-default">
  <div class="panel-heading">Testando API(crud simples)</div>
  <div class="panel-body">
	   <button type="button" class="btn btn-primary btn-block" onclick="add()">Adicionando pessoa</button> 
	   <button type="button" class="btn btn-primary btn-block" onclick="up()">Editando pessoa</button> 
	   <button type="button" class="btn btn-primary btn-block" onclick="del()">Excluindo pessoa</button> 
	   <button type="button" class="btn btn-primary btn-block" onclick="get()">Selecionando pessoa</button>
	</div>
</div>
<script>
function add(){
window.location.href = "/api/new";	
}
function up(){
window.location.href = "/api/up/{asd}";	
}	
function del(){
window.location.href = "/api/del/{asd}";	
}	
function get(){
window.location.href = "/api/list";	
}	
</script>	
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>