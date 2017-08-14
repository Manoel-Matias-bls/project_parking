<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <?php echo Form::label('nome', 'Nome:'); ?>

                        <?php echo Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder'=> 'Nome']); ?>

                        <br>
                        <?php echo Form::label('entrada', 'Entrada:'); ?>

                        <?php echo Form::datetime('datetime', \Carbon\Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s')); ?>

                        <br>
                        <?php echo Form::label('placa', 'Placa:'); ?>

                        <?php echo Form::input('text', 'placa', null, ['class' => 'form-control', '', 'placeholder'=> 'Placa']); ?>



                        <?php echo Form::submit('Salvar', ['class'=> 'btn btn-primary navbar-btn']); ?>


                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>