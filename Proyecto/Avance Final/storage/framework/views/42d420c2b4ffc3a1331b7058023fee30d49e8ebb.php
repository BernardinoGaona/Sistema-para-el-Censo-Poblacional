

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>

    <h1>Lista de Personas</h1>

    <div class="card-head">
        <br>
        <a class="btn btn-warning float-left" href="<?php echo e(route('admin.censos.index')); ?>">Regresar a Censo</a>
    </div>

    <div class="card-head">
        <a class="btn btn-primary float-right" href="<?php echo e(route('admin.personas.create')); ?>">Agregar Persona</a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br><br>
    <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
    <?php endif; ?>

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Sexo</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Parentesco</th>
                        <th>Estado Civil</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Nivel de Instrucción</th>
                        <th>Profesión u Ocupación</th>
                        <th>Jefe</th>
                        <th>Status</th>
                        <th>Id User</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($persona->id); ?></td>
                            <td><?php echo e($persona->cedula); ?></td>
                            <td><?php echo e($persona->names); ?></td>
                            <td><?php echo e($persona->surnames); ?></td>
                            <td>
                                <?php if($persona->sexo == 2): ?>
                                    <?php echo e('Masculino'); ?>

                               <?php elseif($persona->sexo == 3): ?>
                                    <?php echo e('Femenino'); ?>

                               <?php endif; ?>
                            </td>
                            <td><?php echo e($persona->fecha_n); ?></td>
                            <td><?php echo e($persona->parentesco); ?></td>
                            <td>
                                <?php switch($persona->estado_civil):
                                    case (1): ?>
                                        <?php echo e('-'); ?>

                                        <?php break; ?>
                                    <?php case (2): ?>
                                        <?php echo e('Casado'); ?>

                                        <?php break; ?>
                                    <?php case (3): ?>
                                        <?php echo e('Casada'); ?>

                                        <?php break; ?>
                                    <?php case (4): ?>
                                        <?php echo e('Soltero'); ?>

                                        <?php break; ?>
                                    <?php case (5): ?>
                                        <?php echo e('Soltera'); ?>

                                        <?php break; ?>
                                    <?php default: ?>
                                        <?php echo e(' '); ?>

                                <?php endswitch; ?>
                            </td>
                            <td><?php echo e($persona->telefono); ?></td>
                            <td><?php echo e($persona->email); ?></td>
                            <td>
                                <?php switch($persona->nivel_instruccion):
                                    case (1): ?>
                                        <?php echo e('-'); ?>

                                        <?php break; ?>
                                    <?php case (2): ?>
                                        <?php echo e('Primaria'); ?>

                                        <?php break; ?>
                                    <?php case (3): ?>
                                        <?php echo e('Secundaria'); ?>

                                        <?php break; ?>
                                    <?php case (4): ?>
                                        <?php echo e('Universitaria'); ?>

                                        <?php break; ?>
                                    <?php case (5): ?>
                                        <?php echo e('Primaria no Concluida'); ?>

                                        <?php break; ?>
                                    <?php case (6): ?>
                                        <?php echo e('Secundaria no Concluida'); ?>

                                        <?php break; ?>
                                    <?php case (7): ?>
                                        <?php echo e('Universitaria no Concluida'); ?>

                                        <?php break; ?>
                                    <?php case (8): ?>
                                        <?php echo e('Universitaria con Posgrado'); ?>

                                        <?php break; ?>
                                    <?php default: ?>
                                        <?php echo e(' '); ?>

                                <?php endswitch; ?>
                            </td>
                            <td><?php echo e($persona->profecion_ocu); ?></td>
                            <td>
                                <?php if($persona->jefe == 2): ?>
                                    <?php echo e('Si'); ?>

                               <?php elseif($persona->jefe == 3): ?>
                                    <?php echo e('No'); ?>

                               <?php endif; ?>
                            </td>
                            <td>
                            <?php if($persona->status == 1): ?>
                                    <?php echo e('Activo'); ?>

                            <?php else: ?>
                                    <?php echo e('Inactivo'); ?>

                            <?php endif; ?>
                            </td>
                            <td><?php echo e($persona->user_id); ?></td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="<?php echo e(route('admin.personas.edit', $persona->id)); ?>">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="<?php echo e(route('admin.personas.destroy', $persona->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <script src="<?php echo e(asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')); ?>">
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            var table_persons = $('#table_persons').DataTable({
                lengthChange: false,
                responsive: true,
                lenguage: {
                    url: "<?php echo e(asset('js/Spanish.json')); ?>",
                }
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/personas/index.blade.php ENDPATH**/ ?>