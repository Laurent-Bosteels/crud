<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <h1>Students</h1>
    <h4>Hello <?php echo $user->getName()?>,</h4>

    <p><a href="index.php?page=teacher">To teacher page</a></p>

    <p>Put your content here.</p>
</section>
<?php require 'includes/footer.php'?>