
<div class="d-flex align-items-center p-3">
    <a href="<?php echo e(route('cursos.index')); ?>" class="text-black">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
        </svg>
    </a>
    <h2 class="px-3">Adicionar Curso</h2>
</div>

<?php if(session()->has('message')): ?>
    <?php echo e(session()->get('message')); ?>

<?php endif; ?>

<form class="d-flex flex-column" action="<?php echo e(route('cursos.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="titulo" class="fw-semibold  px-2">Código:</label>
        <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Código" aria-label="Código" aria-describedby="basic-addon1">
    </div>
    <div class="mb-3">
        <label for="url_imagem" class="fw-semibold px-2">Descrição:</label>
        <input class="form-control" id="url_imagem" type="text" name="url_imagem" placeholder="Descrição" aria-label="Descrição" aria-describedby="basic-addon1">
    </div>
    <div class="mb-3">
        <label for="descricao" class="fw-semibold align-self-center px-2" >descricao: </label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="descricao" aria-label="descricao" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="mb-3">
        <label for="form-control" class="fw-semibold align-self-center px-2" >Url da Imagem: </label>
        <input type="text" id="hashtag" class="hashtag" name="hashtag" placeholder="url_imagem" aria-label="url_imagem" aria-describedby="basic-addon1">
    </div>

    <button class="btn btn-dark mb-3" type="submit">Adicionar</button>
</form>
</form>
<?php /**PATH D:\Daniel\Programação\Profissional\Freelancer\Clientes\Alexsander\Laravel\breeze-auth\resources\views/cursos_create.blade.php ENDPATH**/ ?>