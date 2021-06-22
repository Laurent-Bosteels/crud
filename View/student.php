<?php require 'includes/header.php' ?>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column">

                <?php var_dump($allStudents); ?>

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
                        echo '<tr><td>' . '#' . $row->getId() . '</td><td>' . $row->getName() . '</td><td>' . $row->getEmail() . '</td><td>' . '#' . $row->getClassId() . '</td><td>' . '<button class="button is-warning is-small">Edit</button>' . '</td>' . '</td><td>' . '<button class="button is-danger is-small">Delete</button>' . '</td></tr>';
                    } ?>


                </table>

            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php' ?>