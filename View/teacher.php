<?php require 'includes/header.php' ?>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column">
                <form action="" method="POST">

                    <?php if (isset($teacherMessage)) {
                        echo '
                            <article class="message is-danger">
                            <div class="message-header">
                            <p>Error</p>
                            <button class="delete" aria-label="delete"></button>
                            </div>
                            <div class="message-body"> ' . $teacherMessage . ' </div>
                            </article>';
                    } ?>

                    <table class="table is-bordered is-striped is-fullwidth">
                        <tr class="th is-selected">
                            <th>Teacher ID</th>
                            <th>Teacher Name</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr class="tr">
                            <td></td>
                            <td><input id="name" name="name" type="text" class="input" placeholder="Name"></td>
                            <td><input id="email" name="email" input type="text" class="input" placeholder="Email"></td>
                            <td></td>
                            <td><button name="add" value="add" class="button is-primary">Create</button></td>
                        </tr>

                        <?php
                        foreach ($allTeachers as $row) {
                            echo

                            '<tr>
                            <td>' . '#' . $row->getId() . '</td>
                            <td>' . $row->getName() . '</td>
                            <td>' . $row->getEmail() . '</td>
                            <td>' . '<button name="edit" class="button is-warning" value="' . $row->getId() . '">Edit</button>' . '</td>
                            <td>' . '<button name="delete" value="' . $row->getId() . '" class="button is-danger">Delete</button>' . '</td>
                            </tr>';
                        } ?>

                    </table>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php' ?>