<?php require 'includes/header.php' ?>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column">

                <button class="button is-primary my-2" id="create">+ Create</button>
                <table class="table is-bordered is-striped is-fullwidth">
                    <tr class="th is-selected">
                    
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Class ID</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                    foreach ($allStudents as $row) {
                        echo '<tr><td>' . '#' . $row->getId() . '</td><td>' . $row->getName() . '</td><td>' . $row->getEmail() . '</td><td>' . '#' . $row->getClassId() . '</td><td>' . '<button class="button is-warning">Edit</button>' . '</td>' . '</td><td>' . '<button class="button is-danger">Delete</button>' . '</td></tr>';
                    } ?>

                </table>

                <!-- modal -->
                <div class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-content has-background-white py-5 px-5">
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
                                <div class="control">
                                    <input id="classId" name="classId" input type="text" class="input" placeholder="e.g. 1 ">
                                </div>
                            </div>
                            <div class="mt-6 has-text-centered">
                                <button button name="add" value="add" class="button is-warning">Create</button>
                            </div>
                        </form>
                    </div>
                </div>

                <?php var_dump($allStudents); ?>

            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php' ?>