<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <title>Document</title>
    <style>
        body {
            font-size: 1.5rem;
        }

        label {
            display: inline-block;
            width: 300px;
        }

        #creation-form {
            margin: 0 auto;
            width: 1200px;
            height: 300px;
        }

        input,
        select {
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        select {
            width: 600px;
            text-overflow: ellipsis;
        }

        span {
            color: #f00;
            font-weight: bold;
        }
    </style>
</head>

<body class="text-black"style="background-image: url(https://images5.alphacoders.com/112/1123013.jpg)">
    <section id="creation-form">
        <div class="m-5 card">
            <div class=" p-5 bg-warning card-header">
            <h1>Add Student Information</h1>
            </div>
            <div class=" p-5 card-body">
            <form action="<?php echo e(route('students.save')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                
                <label for="studid">
                    Student ID:</label>
                <input type="text" name='studid' id='studid' value="<?php echo e(old('studid')); ?>">
                <?php $__currentLoopData = $errors->get('studid'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span><?php echo e($errorMessage); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <br>
                <label for="studfname">
                    First Name:</label>
                <input type="text" name='studfname' id='studfname' value="<?php echo e(old('studfname')); ?>">
                <?php $__currentLoopData = $errors->get('studfname'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span><?php echo e($errorMessage); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <br>
                <label for="studmname">
                    Middle Name (optional): </label>
                <input type="text" name='studmname' id='studmname'>

                <br>
                <label for="studlname">
                    Last Name:</label>
                <input type="text" name='studlname' id='studlname' value="<?php echo e(old('studlname')); ?>">
                <?php $__currentLoopData = $errors->get('studlname'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span><?php echo e($errorMessage); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <br>
                <label for="studprogram">Program:</label>
                <select name="studprogram" id="studprogram">
                    <?php
                        $count = 1;
                    ?>
                    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($count == 1 and old('studprogram') != $program['prog_sname']): ?>
                            <option value="<?php echo e($program['prog_sname']); ?>" selected><?php echo e($program['prog_fname']); ?></option>
                        <?php elseif(old('studprogram') === $program['prog_sname']): ?>
                            <option value="<?php echo e($program['prog_sname']); ?>" selected><?php echo e($program['prog_fname']); ?>

                            </option>
                        <?php else: ?>
                            <option value="<?php echo e($program['prog_sname']); ?>"><?php echo e($program['prog_fname']); ?></option>
                        <?php endif; ?>
                        <?php
                            $count++;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <br>
                <label for="studyear">Year:</label>
                <select name="studyear" id="studyear">
                    <?php
                        $count = 1;
                    ?>
                    <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number => $words): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($count == 1 and old('studyear') != $number): ?>
                            <option value="<?php echo e($number); ?>" selected><?php echo e($words); ?></option>
                        <?php elseif(old('studyear') == $number): ?>
                            <option value="<?php echo e($number); ?>" selected><?php echo e($words); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($number); ?>"><?php echo e($words); ?></option>
                        <?php endif; ?>
                        <?php
                            $count++;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <br>
                <button type='submit' class="btn btn-lg btn-primary">
                    Add Student
                </button>
                <button type='reset' class="btn btn-lg btn-danger">
                    Clear Values
                </button>

            </form>
            <a class="btn btn-success" href="<?php echo e(route('students.all')); ?>">
                Cancel
            </a>
            </div>
        </div>
    </section>
</body>

</html>
<?php /**PATH D:\src\webserver\3_SUMMER\laravel_9\mysecondlaravelproject\resources\views/addstudent.blade.php ENDPATH**/ ?>