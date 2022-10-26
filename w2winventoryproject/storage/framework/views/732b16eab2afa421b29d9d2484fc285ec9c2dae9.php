

<?php $__env->startSection('content'); ?> 
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tipo Clientes</h5>
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear tipo cliente</button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Crear tipo Cliente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?php echo e(url('/typeClient')); ?>" method="POST">
                                <div class="modal-body">
                                    <?php echo csrf_field(); ?>
                                        <label for="typeClient">Tipo Cliente</label>
                                        <input type="text" name="typeClient">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Guardar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(Session::has('message')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('message')); ?>

          </div>
        <?php endif; ?>

        

        <!-- Table with hoverable rows -->
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Tipo Cliente</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $typeC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tyC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($tyC->id); ?></th>
                    <td><?php echo e($tyC->typeClient); ?></td>
                    <td>Editar | Eliminar</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <!-- End Table with hoverable rows -->

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alrod\OneDrive\Documents\Github\Proyecto-W2W-Inventory\w2winventoryproject\resources\views/typeClient/index.blade.php ENDPATH**/ ?>