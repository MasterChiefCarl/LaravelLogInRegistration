<?php $__env->startSection('modal-content'); ?>
    Are you sure you want to <span style="color: red;"> REMOVE STUDENT <?php echo e($studentData['studid']); ?>? </span><br>
    This method could not be undone!
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal-title'); ?>
    YOU CANNOT REVERT THIS METHOD!!!
<?php $__env->stopSection(); ?>

<?php $__env->startSection('optYes'); ?>
    Proceed with Deletion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('optNo'); ?>
    Cancel
<?php $__env->stopSection(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMOVING Student <?php echo e($studentData['studid']); ?></title>
    <style>
        table {
            border: 5px solid black;
        }

        th,
        td {
            padding: 15px;
            margin: 10px;
        }

        th {
            border: 5px solid black;
        }

        img {
            height: 30px;
            width: 30px;
        }

        body {
            font-family: verdana;
            font-size: 1.5em;
        }

        .icons>a {
            margin-left: 1.5rem;
        }

        #nav-links {
            text-align: center;
        }
    </style>
</head>

<body>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"
        style="background-image: url(https://images5.alphacoders.com/112/1123013.jpg)">

        <center>
            <div class="m-5 card">
                <div class="p-5 bg-danger card-header text-white">
                    <h1>REMOVING Student <?php echo e($studentData['studid']); ?>??? </h1>
                </div>
                <div class="p-5 card-body">
                    <table>
                        <tr>
                            <th>Student ID</th>
                            <td><?php echo e($studentData['studid']); ?></td>
                        </tr>
                        <tr>
                            <th>Student Name</th>
                            <td><?php echo e($studentData['studlname']); ?>, <?php echo e($studentData['studfname']); ?></td>
                        </tr>
                        <tr>
                            <th>Student Program</th>
                            <td><?php echo e($studentData['studprogram']); ?></td>
                        </tr>
                        <tr>
                            <th>Student Year</th>
                            <td><?php echo e($studentData['studyear']); ?></td>
                        </tr>
                    </table>
                    <br>
                    <h3> Are You Sure You Would Like To <span style="color: red;">REMOVE</span> the Student?</h3>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Delete </button>
        
                    <?php echo $__env->make('modalslug', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
                    <button class="btn btn-primary" id="returnButton" }}">Cancel</button>
                </div>
            </div>
            
        </center>
    </div>
</body>
<script>
    let returnButton = document.getElementById("returnButton");
    let confirmTask = document.getElementById("confirmTask");

    returnButton.focus();

    returnButton.addEventListener('click', ()=>{
        window.location.href = "<?php echo e(route('students.all')); ?>";
    });
    confirmTask.addEventListener('click', ()=>{
        window.location.href = '<?php echo e(route('student.remove',$studentData['studid'])); ?>';
    });
</script>

</html>
<?php /**PATH D:\src\webserver\3_SUMMER\laravel_9\mysecondlaravelproject\resources\views/founddelete.blade.php ENDPATH**/ ?>