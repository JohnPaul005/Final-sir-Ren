<?php

$this->extend('layout/index');
$this->section('body');


?>
<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<h1>Student List of Enrolled</h1>
<a href="/students/add" class="btn btn-primary"> Add New Student </a>
<table class="table">
    <thread>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Student Number</th>
            <th scope="col">Section</th>
            <th scope="col">Course</th>
            <th scope="col">Academic Year</th>
            <th scope="col">Year Level</th>
            <th scope="col">Profile</th>
            <th scope="col">Action</th>
        </tr>
    </thread>
    <tbody>
        <?php foreach($students as $student): ?>
            <tr>
                <th scope="row"><?= $student['id']?></th>
                <td><?= $student['stud_fullname']?></td>
                <td><?= $student['stud_id']?></td>
                <td><?= $student['stud_section']?></td>
                <td><?= $student['stud_course']?></td>
                <td><?= $student['stud_year']?></td>
                <td><?= $student['stud_year_level']?></td>
                <td><img src="/uploads/<?= $student['stud_profile']; ?>" alt="" width="100"></td>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="/students/edit/<?= $student['id']; ?>" class="btn btn-outline-primary bi bi-pencil-square btn-sm me-md-2">Edit</a>
                            <a href="/students/delete/<?= $student['id']; ?>" class="btn btn-outline-danger bi bi-trash-fill btn-sm me-md-2">Delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>


<?php $this->endSection(); ?>