<?php
    
$this->extend('layout/index');
$this->section('body');


?>

<h1>Edit Student Informatio</h1>

<form class="row g-3" action="/students/update/<?= $student['id']; ?>" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
        <label for="studentName" class="form-label">Student FullName</label>
        <input type="text" class="form-control" name="studentName" value="<?= $student['stud_fullname']; ?>">
    </div>
    <div class="col-md-6">
        <label for="studentNum" class="form-label">Student Number</label>
        <input type="text" class="form-control" name="studentNum" value="<?= $student['stud_id']; ?>" readonly>
    </div>
    <div class="col-md-6">
        <label for="studentSection" class="form-label">Student Section</label>
        <input type="text" class="form-control" name="studentSection" value="<?= $student['stud_section']; ?>">
    </div>
    <div class="col-md-6">
        <label for="studentCourse" class="form-label">Student Course</label>
        <input type="text" class="form-control" name="studentCourse" value="<?= $student['stud_course']; ?>">
    </div>
    <div class="col-md-6">
        <label for="studentYear" class="form-label">Academic Year</label>
        <input type="text" class="form-control" name="studentYear" value="<?= $student['stud_year']; ?>">
    </div>
    <div class="col-md-6">
        <label for="studentLevel" class="form-label">School Year Level</label>
        <input type="text" class="form-control" name="studentLevel" value="<?= $student['stud_year_level']; ?>">
    </div>
    <div class="mb-3">
        <label for="studentProfile" class="form-label">School Profile</label>
        <input type="File" class="form-control" name="studentProfile" value="<?= $student['stud_profile']; ?>">
    </div>
    <div class="d-grid gap-2 d-md-block">
        <button type="Submit" class="btn btn-primary bi bi-person-plus-fill">Update</button>
    </div>
</form>
<?php $this->endSection(); ?>