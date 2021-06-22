<?php require 'includes/header.php' ?>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column">

                <?php var_dump($allTeachers); ?>

                <button class="button is-primary my-2" id="create">+ Create</button>
                <table class="table is-bordered is-striped is-fullwidth">
                    <tr class="th is-selected">
                        <th>Teacher ID</th>
                        <th>Teacher Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                    foreach ($allTeachers as $row) {
                        echo '<tr><td>' . '#' . $row->getId() . '</td><td>' . $row->getName() . '</td><td>' . $row->getEmail() . '</td><td>' . '<button class="button is-warning">Edit</button>' . '</td>' . '</td><td>' . '<button class="button is-danger">Delete</button>' . '</td></tr>';
                    } ?>

                </table>

            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php' ?>