<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
    <title>Document</title>
    <style>
        table {
            border: 2px solid black;
        }

        th,
        td {
            padding: 25px 15px;
            margin: 25px 10px;
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

<body class="antialiased">
    <div class="p-5 relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"
        style="background-image: url(https://images5.alphacoders.com/112/1123013.jpg)">
        <center>
            <div class="card sticky-xl-top fixed-top">
                <div class="card-header d-flex justify-content-between ">
                    MySecondLaravelProject
                    <div>
                        <a class="btn btn-success" href="<?php echo e(route('home')); ?>">Return to Home</a>
                        <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>">Logout</a>
                    </div>

                </div>
            </div>
            <br><br>
            <div class="card">
                <div class="card-header">
                    <h1>Student List</h1>
                    <a class="btn btn-warning" href="<?php echo e(route('students.create')); ?>">Add a new Student</a>
                </div>
                <div class="card-body">
                <table class="table table-striped table-hover">

                    <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Student Program</th>
                        <th scope="col">Student Year</th>
                        <th colspan="3">Actions </th>
                    </tr>
                    <?php $__currentLoopData = $studentCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($student->studid); ?></td>
                            <td><?php echo e($student->studlname); ?>, <?php echo e($student->studfname); ?></td>
                            <td><?php echo e($student->studprogram); ?></td>
                            <td><?php echo e($student->studyear); ?></td>
                            <td class="icons"><a href="<?php echo e(route('student.info', $student->studid)); ?>"
                                    class="btn btn-primary" title="Show Info"><img
                                        src="<?php echo e(asset('images/info-icon.png')); ?>" alt=""></a></td>
                            <td class="icons"><a href="<?php echo e(route('student.edit', $student->studid)); ?>"
                                    class="btn btn-warning" title="Edit Student Entry"><img
                                        src="<?php echo e(asset('images/edit-icon.png')); ?>" alt=""></a></td>
                            <td class="icons"><a href="<?php echo e(route('student.delete', $student->studid)); ?>"
                                    title="Delete Student Entry" class="btn btn-danger"><img
                                        src="<?php echo e(asset('images/delete-icon.png')); ?>" alt=""></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td colspan="7" id="nav-links"><?php echo e($studentCollection->links()); ?></td>
                    </tr>
                </table>
                </div>
            </div>
        </center>
    </div>
</body>

</html>
<?php /**PATH D:\src\webserver\3_SUMMER\laravel_9\mysecondlaravelproject\resources\views/showallstudents.blade.php ENDPATH**/ ?>