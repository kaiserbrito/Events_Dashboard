<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title'); ?>
    Lighting Speed Event
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin of Carousel  -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="http://www.newstatesman.com/sites/all/themes/creative-responsive-theme/images/new_statesman_events.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Some Text</h3>
                        <p>Some Text</p>
                        <?php if(Auth::guest()): ?>
                            <p><a href="<?php echo e(route('register')); ?>" class="btn btn-lg btn-primary" role="button">Register</a></p>
                        <?php else: ?>
                            <p><a href="<?php echo e(route('profile')); ?>" class="btn btn-lg btn-primary" role="button">Create an Event</a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="http://www.newstatesman.com/sites/all/themes/creative-responsive-theme/images/new_statesman_events.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Some Text</h3>
                        <p>Some Text</p>
                        <p><a href="<?php echo e(route('about')); ?>" class="btn btn-lg btn-primary" role="button">About Us</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="http://www.newstatesman.com/sites/all/themes/creative-responsive-theme/images/new_statesman_events.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Some Text</h3>
                        <p>Some Text</p>
                        <p><a href="<?php echo e(route('contact')); ?>" class="btn btn-lg btn-primary" role="button">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- End of Carousel  -->

    <hr class="divider">
    <!-- Begin: Upcoming events  -->
    <div class="container">
        <h3 id="upComingEvents">Upcoming Events</h3>
        <!--  Fetch the events from database and chunk  -->
        <?php $__currentLoopData = $events->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <?php $__currentLoopData = $eventChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo e($event->imagePath); ?>" alt="Generic image">
                            <div class="caption">
                                <h3><?php echo e($event->title); ?></h3>
                                <hr>
                                <div class="clearfix">
                                    <p><a role="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#eventDetail">Event Detail</a>
                                    <!-- Modal Event Detail -->
                                    <div class="modal fade" id="eventDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><?php echo e($event->title); ?></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <?php echo e($event->detail); ?>

                                                </div>
                                                <div class="modal-footer">
                                                    <?php if(Auth::guest()): ?>
                                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                    <?php else: ?>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <a href="<?php echo e(route('event.addToDash', ['id' => $event->id])); ?>" type="button" class="btn btn-primary" id="confirmPresence">Confirm Presence</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(Auth::guest()): ?>
                                </div>
                                    <?php else: ?>
                                    <a href="<?php echo e(route('event.addToDash', ['id' => $event->id])); ?>" class="btn btn-success pull-right" id="confirmPresence" type="button">Confirm presence</a></p>
                            </div>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- End: Upcoming events  -->
    <hr class="divider">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>