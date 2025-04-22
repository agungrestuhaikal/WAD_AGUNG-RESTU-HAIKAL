<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pemenang Ballon d'Or</title>
</head>
<body>
    <h1>Daftar Pemenang Ballon d'Or</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Negara</th>
            <th>Tahun</th>
        </tr>
        <?php $__currentLoopData = $pemenangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($p->nama); ?></td>
            <td><?php echo e($p->negara); ?></td>
            <td><?php echo e($p->tahun); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH C:\WAD\Tugas_Agung\resources\views/balondor/index.blade.php ENDPATH**/ ?>