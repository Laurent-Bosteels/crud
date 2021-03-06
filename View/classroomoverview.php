<?php require 'includes/header.php' ?>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column">
                <form action="" method="POST">


                <!-- cards  -->

<section class="section">
    <div class="container">
        <h3 class="title has-text-centered is-size-4">Details for <?php echo $data3->getName() ?></h3>
        <div class="columns mt-8 is-8 is-multiline is-centered">
            <div class="column is-6-tablet is-3-desktop">
                <div class="card">
                    <div class="card-image has-text-centered pt-3 px-6">
                        <img src="https://image.flaticon.com/icons/png/512/1077/1077114.png" alt="img">
                    </div>
                    <div class="card-content has-text-centered">
                        <p>#<?php echo $data3->getId() ?></p>
                        <p class="title is-size-5">ID</p>
                    </div>
                </div>
            </div>

            <div class="column is-6-tablet is-3-desktop">
                <div class="card">
                    <div class="card-image has-text-centered pt-3 px-6">
                        <img src="https://image.flaticon.com/icons/png/512/482/482947.png" alt="img">
                    </div>
                    <div class="card-content has-text-centered">
                        <p><?php echo $data3->getLocation()?></p>
                        <p class="title is-size-5">Location</p>
                    </div>
                </div>
            </div>

            <div class="column is-6-tablet is-3-desktop">
                <div class="card">
                    <div class="card-image has-text-centered pt-3 px-6">
                        <img src="https://image.flaticon.com/icons/png/512/482/482947.png" alt="img">
                    </div>
                    <div class="card-content has-text-centered">
                        <p><a href="index.php?page=teacher&id=<?php echo $data3->getTeacherId()?>"><?php echo $teacher?></a></p>
                        <p class="title is-size-5">Assigned teacher</p>
                    </div>
                </div>
            </div>

            <div class="column is-6-tablet is-3-desktop">
                <div class="card">
                    <div class="card-image has-text-centered pt-3 px-6">
                        <img src="https://image.flaticon.com/icons/png/512/4290/4290185.png" alt="img">
                    </div>
                    <div class="card-content has-text-centered">
                        <p><a href="index.php?page=student&classid=<?php echo $data3->getId()?>">Show all <?php echo $students?> students</a></p>
                        <p class="title is-size-5">Assigned</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php' ?>