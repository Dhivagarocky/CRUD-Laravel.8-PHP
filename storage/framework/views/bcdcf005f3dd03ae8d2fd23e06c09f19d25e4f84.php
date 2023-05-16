<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student list</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
         <div class="row">
            <div class="col-md-12">
              <h2>student list</h2>
              <div style="margin-right:10%;float: right;">
                
</div>
<?php if(Session::has('success')): ?>
                 <div class="alert alert-success" role="alert">
                  <?php echo e(Session::get('success')); ?>

                 </div>
                 <?php endif; ?>
              <table class="table">
                <thead><tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                    </tr></thead>
                <tbody>
                    <?php
                     $i=1;
                    ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($stu->name); ?></td>
                        <td><?php echo e($stu->email); ?></td>
                        <td><?php echo e($stu->phone); ?></td>
                        <td><?php echo e($stu->address); ?></td>
                        <td><a href="<?php echo e(url('edit-student/'.$stu->id)); ?>" 
                        class="btn btn-primary">Edit</a> |<a href="<?php echo e(url('delete-student/'.$stu->id)); ?>" 
                        class="btn btn-danger">Delete</a></td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
             </div>     
         </div>
         <a href="<?php echo e(url('add-student')); ?>" class="btn btn-primary">Add 
                  Student</a>
     </div>
</body>
</html><?php /**PATH G:\collegecrud\college\resources\views/student-list.blade.php ENDPATH**/ ?>