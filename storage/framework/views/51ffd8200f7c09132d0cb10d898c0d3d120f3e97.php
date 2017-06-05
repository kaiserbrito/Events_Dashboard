<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('title'); ?>
    About Us | LSE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <div class="col-md-6 col-md-6 pull-left">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h4>Our Concepts</h4></div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-6 pull-right">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading"><h4>Our Services</h4></div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>