<?php $__env->startSection('content'); ?>
<br/>
<br/>
<br/>
<div class="panel panel-default">
  <div class="panel-heading">Testando rota e view</div>
  <div class="panel-body">
	<p><?php echo e($categorias); ?></p><br />
	<p><?php echo e($posts); ?></p>	
	</div>
</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>