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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Editar Carro')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <?php if(session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('carros.update', ['carro' => $carro->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-4">
                            <label for="codigo" class="block text-gray-700 font-bold mb-2">Código:</label>
                            <input type="text" id="codigo" name="codigo" value="<?php echo e($carro->codigo); ?>" class="form-input rounded-md shadow-sm w-full" placeholder="Código">
                        </div>
                        <div class="mb-4">
                            <label for="descricao" class="block text-gray-700 font-bold mb-2">Descrição:</label>
                            <input type="text" id="descricao" name="descricao" value="<?php echo e($carro->descricao); ?>" class="form-input rounded-md shadow-sm w-full" placeholder="Descrição">
                        </div>
                        <div class="mb-4">
                            <label for="valor" class="block text-gray-700 font-bold mb-2">Valor:</label>
                            <input type="number" id="valor" name="valor" value="<?php echo e($carro->valor); ?>" class="form-input rounded-md shadow-sm w-full pl-8" placeholder="Valor">
                        </div>
                        <div class="mb-4">
                            <label for="url_imagem" class="block text-gray-700 font-bold mb-2">URL da Imagem:</label>
                            <input type="text" id="url_imagem" name="url_imagem" value="<?php echo e($carro->url_imagem); ?>" class="form-input rounded-md shadow-sm w-full" placeholder="URL da Imagem">
                        </div>
                        <div class="flex justify-between">
                            <button type="submit" class="submit-button">
                                Adicionar
                            </button>
                            <a href="<?php echo e(route('carros.index')); ?>" class="cancel-button">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

<?php /**PATH D:\Daniel\Programação\Profissional\Freelancer\Clientes\Alexsander\Laravel\breeze-auth\resources\views/carro_edit.blade.php ENDPATH**/ ?>