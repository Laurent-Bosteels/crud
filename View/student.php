<?php require 'includes/header.php' ?>

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
                            <th>Class ID</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr class="tr">
                            <td></td>
                            <td><input id="name" name="name" type="text" class="input" placeholder="Name"></td>
                            <td><input id="email" name="email" input type="text" class="input" placeholder="Email"></td>
                            <td>
                                <div class="select">
                                    <select name="classId">
                                        <?php foreach ($allClasses as $class) {
                                            echo "<option value=" . $class->getId() . ">" . $class->getName() . "</option>";
                                        } ?>
                                    </select>
                                </div>
                            </td>
                            <td></td>
                            <td><button name="add" value="add" class="button is-primary">Create</button></td>
                        </tr>

                        <?php
                        foreach ($allStudents as $row) {
                            echo
                            '<tr>
                            <td>' . $row->getId() . '</td><td>' . $row->getName() . '</td><td>' . $row->getEmail() . '</td><td>';
                            if ($loaderClass->getClassById($row->getClassId()) === null) {
                                echo "Unassigned";
                            } else {
                                echo ($loaderClass->getClassById($row->getClassId()))->getName();
                            };
                            echo '</td><td><button name="edit" class="button is-warning" value="' . $row->getId() . '">Edit</button></td>
                            <td><button name="delete" value="' . $row->getId() . '" class="button is-danger">Delete</button></td>
                            </tr>';
                        }
                        ?>

                    </table>
                </form>

                <?php var_dump($allStudents); ?>

            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php' ?>