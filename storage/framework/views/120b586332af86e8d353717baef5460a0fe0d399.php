<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body">
	<h3>Recent Post Sent To Buffer

	<?php if($user->plansubs()): ?>
		<?php if($user->plansubs()['plan']->slug == 'proplusagencym' OR $user->plansubs()['plan']->slug == 'proplusagencyy' ): ?>
			<a href="https://bufferapp.com/oauth2/authorize?client_id=<?php echo e(env('BUFFER_CLIENT_ID')); ?>&redirect_uri=<?php echo e(env('BUFFER_REDIRECT')); ?>&response_type=code" class="btn btn-primary pull-right">Add Buffer Account</a>
		<?php endif; ?>
	<?php endif; ?>

	</h3>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text </th> <th>Time</th> </tr> 
				</thead>
                <?php $__empty_1 = true; $__currentLoopData = $bufferPostings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                <tbody>
                
                <tr><th> <?php echo e($data->account_service); ?></th><th> <?php echo e($data->type); ?></th><th> <?php echo e($data->name); ?></th><th> <?php echo e($data->post_text); ?></th><th> <?php echo e($data->created_at); ?></th></tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
               
                </tbody>
                <?php endif; ?>
                <tfoot>
                </tfoot>
			
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>