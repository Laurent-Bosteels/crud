<?php
require 'includes/header.php' ?>
<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column">
                <form action="" method="POST">

                    <table class="table is-bordered is-striped is-fullwidth">
                        <tr class="th is-selected">
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Class Name</th>
                            <th>Teacher</th>
                        </tr>

                        <?php foreach ($students as $row) {
                            $teacherNew = $loaderTeacher->getTeacherByStudentId($row['student_id']);
                            echo '
            <tr>
                <td>' . $row['student_id'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . (($loaderClass->getClassById($row['class_id']))->getName()) . '</td>
                <td>' . $teacherNew[0]['name'] . '</td>
            </tr>';
                        } ?>

                    </table>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php' ?>