<?php include '../include/author.php'; ?>
<footer class="bg-transparent-blue">
    <div class="row">
        <div class="col-md-8 col-sm-6 footer-navigation">
            <h4 class="text-gray-100"><?php echo $companyTitle; ?></h4>
            <p class="text-gray-100 company-name"><?php echo $authorName; ?> &copy; <?php echo date('Y') ; ?></p>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 footer-about">
            <h4 class="text-gray-100"><?php echo $companyAboutTitle; ?></h4>
            <p class="text-gray-100"><?php echo $companyDescription; ?>
            </p>
            <div class="social-links social-icons"><a href="http://facebook.com"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div>
        </div>
    </div>
</footer>
<?php require_once '../include/bawah.php';?>
