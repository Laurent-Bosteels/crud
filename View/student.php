<?php require 'includes/header.php' ?>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column">
                <button class="button is-primary modal-button my-2" data-target="#modal1" aria-haspopup="true">Create</button>
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
                        <td><button name="add" value="add" class="button is-warning">Edit</button></td>
                        <td></td>
                    </tr>

                    <form action="" method="POST">
                        <?php
                        foreach ($allStudents as $row) {
                            echo '<tr><td>' . '#' . $row->getId() . '</td><td>' . $row->getName() . '</td><td>' . $row->getEmail() . '</td><td>' . '#' . $row->getClassId() . '</td><td>' . '<button value="' . $row->getId() . '" class="button is-warning modal-button" data-target="#modal2" aria-haspopup="true">Edit</button>' . '</td>' . '</td><td>' . '<button name="delete" value="' . $row->getId() . '" class="button is-danger">Delete</button>' . '</td></tr>';
                        } ?>
                    </form>

                </table>

                <button class="button is-warning modal-button my-2" data-target="#modal2" aria-haspopup="true">Edit</button>

                <div class="modal" id="modal1">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <div class="box">
                            <h3 class="title mb-6">Create a new student</h3>
                            <form action="" method="POST">
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control">
                                        <input id="name" name="name" type="text" class="input" placeholder="Name">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input id="email" name="email" input type="text" class="input" placeholder="Email">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Class ID</label>
                                    <div class="select">
                                <select name="classId">
                                    <?php foreach ($allClasses as $class) {
                                        echo "<option value=" . $class->getId() . ">" . $class->getName() . "</option>";
                                    } ?>
                                </select>
                            </div>
                                </div>
                                <div class="mt-6 has-text-centered">
                                    <button name="add" value="add" class="button is-warning">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button class="modal-close is-large" aria-label="close"></button>
                </div>

                <div class="modal" id="modal2">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <div class="box">
                            <h3 class="title mb-6">Update student</h3>
                            <form action="" method="POST">
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control">
                                        <input id="name" name="name" type="text" class="input" placeholder="Name">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input id="email" name="email" input type="text" class="input" placeholder="Email">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Class ID</label>
                                    <div class="control">
                                        <input id="classId" name="classId" input type="text" class="input" placeholder="e.g. 1 ">
                                    </div>
                                </div>
                                <div class="mt-6 has-text-centered">
                                    <button name="add" value="add" class="button is-warning">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button class="modal-close is-large" aria-label="close"></button>
                </div>

                <?php var_dump($allStudents); ?>

            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php' ?>