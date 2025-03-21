<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light border">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AGENDA TEA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">📂 Catálogo pictogramas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dos">🆕 Nueva entrada en agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tres">🗑️ Mostrar agenda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <h1>Añadir datos agenda</h1>
        <?php if(session('mensaje')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('mensaje')); ?>

        </div>
        <?php endif; ?>
        <form action="<?php echo e(url('/dos')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="hora">Hora:</label>
                <input type="time" name="hora" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="id_persona">Persona:</label>
                <select name="id_persona" class="form-control" required>
                    <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($persona->idpersona); ?>"><?php echo e($persona->nombre); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <div class="row">
                <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fotillo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-3 text-center">
                    <input type="radio" name="imagen" value="<?php echo e($fotillo->idimagen); ?>" id="img_<?php echo e($fotillo->idimagen); ?>" required>
                    <label for="img_<?php echo e($fotillo->idimagen); ?>">
                        <img src="<?php echo e(asset($fotillo->imagen)); ?>" class="imgs" alt="">
                        <p><?php echo e($fotillo->descripcion); ?></p>
                    </label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Añadir entrada en agenda</button>
        </form>
        <a href="<?php echo e(url('/')); ?>" class="btn btn-secondary mt-3">Volver al listado</a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hugosf\Downloads\Proyectolara\picto\resources\views/catalog/dos.blade.php ENDPATH**/ ?>