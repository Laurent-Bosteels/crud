<?php require 'includes/header.php'?>
<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column">

                <?php var_dump($allClasses); ?>

                <button class="button is-primary my-2" id="create">+ Create</button>
                <table class="table is-bordered is-striped is-fullwidth">
                    <tr class="th is-selected">
                        <th>Class ID</th>
                        <th>Class Name</th>
                        <th>Location</th>
                        <th>Teacher ID</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                    foreach ($allClasses as $row) {
                        echo '<tr><td>' . '#' .$row->getId().'</td><td>'.$row->getName().'</td><td>'.$row->getLocation().'</td><td>' . '#' .$row->getTeacherId(). '</td><td>' . '<button class="button is-warning">Edit</button>' . '</td>' . '</td><td>' . '<button class="button is-danger">Delete</button>' . '</td></tr>';
                    } ?>

                </table>

            </div>
        </div>
    </div>
</section>
<?php require 'includes/footer.php'?>