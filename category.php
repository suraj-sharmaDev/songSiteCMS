<?php include("header.php") ?>
    </section>
    <?php
        $category=$_GET['category'];
    ?>
 

    <section id="recent-updates">
        <div id="recent-title" style="background-color:#5cd7f2;"><span class="title" style="color:rgb(255,255,255);"><strong><?php echo $category;?> Movie Songs&nbsp;</strong><i class="fa fa-th"></i></span></div>

        <div class="body-components"><a href="single.php?song_title=<?php echo $rec1['song_title'];?>"><i class="fa fa-angle-double-right" style="padding-right:3px;"></i><span class="download-text"><?php echo $category;?> Latest Released</span></a></div>
        <div class="body-components"><a href="single.php?song_title=<?php echo $rec1['song_title'];?>"><i class="fa fa-angle-double-right" style="padding-right:3px;"></i><span class="download-text"><?php echo $category;?> Recently Added</span></a></div>
        <div class="body-components"><a href="single.php?song_title=<?php echo $rec1['song_title'];?>"><i class="fa fa-angle-double-right" style="padding-right:3px;"></i><span class="download-text"><?php echo $category;?> Browse Songs by Year</span></a></div>
    </section>
 


    <div class="footer-basic">
        <footer>
            <div id="company" style="background-color:#5cd7f2;"><span class="title" style="color:rgb(255,255,255);"><strong>Copyright © 2018</strong></span></div>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        </footer>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>