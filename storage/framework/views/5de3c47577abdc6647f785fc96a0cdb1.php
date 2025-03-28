<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="header-title">
            <?php echo e(__('Carros')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="content-container">
        <div class="car-grid">
            <?php $__currentLoopData = $carros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="car-card">
                    <div class="card-header"></div>

                    <img class="car-image" src="<?php echo e($carro->url_imagem); ?>" alt="<?php echo e($carro->descricao); ?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">

                    <h2 class="car-price">R$ <?php echo e(number_format($carro->valor, 2, ',', '.')); ?></h2>

                    <p class="car-description">
                        <?php echo e($carro->descricao); ?>

                    </p>

                    <div class="action-buttons">
                        <a href="<?php echo e(route('carros.edit', $carro)); ?>" class="edit-button">
                            Editar
                        </a>
                        <!-- <form action="<?php echo e(route('carros.destroy', $carro)); ?>" method="POST" class="delete-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="delete-button">
                                Deletar
                            </button>
                        </form> -->
                        <form action="<?php echo e(route('carros.destroy', $carro)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="delete-button" type="submit">Deletar</button>
                        </form>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <style>
        .car-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Dois cards por linha */
            gap: 16px;
        }
        .car-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .car-price {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 8px 0;
            text-align: left;

        }
        .car-description {
            font-size: 0.875rem;
            color: #555;
            text-align: left;
            margin-bottom: 16px;
        }
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        .delete-button, .edit-button {
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.875rem;
        }

    </style>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\Daniel\Programação\Profissional\Freelancer\Clientes\Alexsander\Laravel\breeze-auth\resources\views/dashboard.blade.php ENDPATH**/ ?>