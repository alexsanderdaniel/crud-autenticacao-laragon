<div class="d-flex align-items-center p-3">
    <a href="<?php echo e(route('cursos.index')); ?>" class="text-black">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
        </svg>
    </a>
    <h2 class="px-3">Editar Curso</h2>
</div>

<?php if(session()->has('message')): ?>
    <?php echo e(session()->get('message')); ?>

<?php endif; ?>

<form action="<?php echo e(route('cursos.update',['curso' => $curso->id])); ?>" method="post"
    class="d-flex flex-column">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <!-- <input type="text" name="codigo" value="<?php echo e($curso->codigo); ?>"> -->
    <div class="mb-3">
        <label for="codigo" class="fw-semibold  px-2">Código:</label>
        <input type="text" id="codigo" name="codigo" value="<?php echo e($curso->codigo); ?>" class="form-control" placeholder="Código" aria-label="Código" aria-describedby="basic-addon1">
    </div>
    <div class="mb-3">
        <label for="descricao" class="fw-semibold px-2">Descrição:</label>
        <input class="form-control" id="descricao" type="text" name="descricao" value="<?php echo e($curso->descricao); ?>" placeholder="Descrição" aria-label="Descrição" aria-describedby="basic-addon1">
    </div>
    <div class="mb-3">
        <label for="valor" class="fw-semibold align-self-center px-2" >Valor: </label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="valor" name="valor" value="<?php echo e($curso->valor); ?>" placeholder="Valor" aria-label="Valor" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="mb-3">
        <label for="form-control" class="fw-semibold align-self-center px-2" >Url da Imagem: </label>
        <input type="text" id="form-control" class="form-control" name="url_imagem" value="<?php echo e($curso->url_imagem); ?>" placeholder="url_imagem" aria-label="url_imagem" aria-describedby="basic-addon1">
    </div>

    <button class="btn btn-dark mb-3" type="submit">Atualizar</button>
</form>

<?php /**PATH D:\Daniel\Programação\Profissional\Freelancer\Clientes\Alexsander\Laravel\breeze-auth\resources\views/curso_edit.blade.php ENDPATH**/ ?>