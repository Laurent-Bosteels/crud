<?php require 'includes/header.php' ?>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column">
                <form action="" method="POST">
                <td><button name="add" value="add" class="button is-primary my-2">Create class</button></td>

                    <table class="table is-bordered is-striped is-fullwidth">
                        <tr class="th is-selected">
                            <th>Class ID</th>
                            <th>Class Name</th>
                            <th>Location</th>
                            <th>Teacher</th>
                            <th>Action</th>
                        </tr>
                        <tr class="tr">
                            <td></td>
                            <td><input id="name" name="name" type="text" class="input" placeholder="Name"></td>
                            <td><input id="location" name="location" input type="text" class="input" placeholder="Location"></td>
                            <td>
                                <div class="select">
                                    <select name="teacherId">
                                        <?php foreach ($allTeachers as $teacher) {
                                            echo "<option value=" . $teacher->getId() . ">" . $teacher->getName() . "</option>";
                                        } ?>
                                    </select>
                            </td>
                            <td></td>
                        </tr>

                        <?php
                        foreach ($allClasses as $row) {
                            echo
                            '<tr>
                            <td>' . '#' . $row->getId() . '</td>
                            <td>' . $row->getName() . '</td>
                            <td>' . $row->getLocation() . '</td>
                            <td>' . ($loaderTeacher->getTeacherById($row->getTeacherId()))->getName() . '</td>
                            <td> <a href="index.php?page=classroom&id=' . $row->getId() . '" class="button is-primary" value="' . $row->getId() . '">Details</a>' . ' ' . '<button name="edit" class="button is-warning" value="' . $row->getId() . '">Edit</button>' . ' ' . '<button name="delete" value="' . $row->getId() . '" class="button is-danger">Delete</button>' . '</td>
                            </tr>';
                        } ?>

                    </table>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php' ?>