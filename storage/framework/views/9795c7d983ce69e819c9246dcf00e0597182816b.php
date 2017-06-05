<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('title'); ?>
    <?php echo e(Auth::user()->name); ?>'s Dashboard | LSE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Session::has('dashboard')): ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-offset-3">
                    <ul class="list-group">
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item">
                                <strong><?php echo e($event['item']['title']); ?></strong>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger">Remove Event</button>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Your Events</div>
                        <div class="panel-body">
                            <h2>No Events</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>