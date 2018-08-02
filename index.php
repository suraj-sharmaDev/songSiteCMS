<?php include("header.php") ?>
        
        <div id="search-box" style="margin-top:10px;font-size:12px;padding-left:30px;"><span>Search Songs:&nbsp;</span>
            <form method="post" action="search.php">
            <input type="search" name="search" placeholder="Search" />
            <button type="submit"><i class="fa fa-search" id="search-icon" style="margin-left:3px;"></i></button>
        </form>
        </div>
    </section>
    <section id="recent-updates">
        <div id="recent-title" style="background-color:#5cd7f2;"><span class="title" style="color:rgb(255,255,255);"><strong>Recently Added Songs&nbsp;</strong><i class="fa fa-th"></i></span></div>
        <div>
            <?php
                $query="SELECT * FROM `songs`";
                $result=$mysqli->query($query);
                while($rec=$result->fetch_array()){

            ?>
            <div class="body-components"><a href="single.php?song_title=<?php echo $rec['song_title'];?>"><span class="icon-body"><i class="fa fa-bell"></i></span><span class="date-span"><?php echo $rec['added_on'];?></span><span class="filler-text">: New Mp3 Songs "</span><span class="song-title"><?php echo $rec['song_title'];?></span><span class="download-text">" Download!!<img src="assets/img/400838665_d301dd140d.gif"></span></a>
            </div>
            <?php
                }//end of while
            ?>
    </section>
    <section id="latest-updates">
        <div id="company" style="background-color:#5cd7f2;margin-bottom:10px;"><span class="title" style="color:rgb(255,255,255);"><strong>Latest Updates</strong></span></div>
        <?php
            $query1="SELECT * FROM `songs` ORDER BY `added_on` asc";
            $result1=$mysqli->query($query1);
            while($rec1=$result1->fetch_array())
            {
        ?>
        <div class="body-components"><a href="single.php?song_title=<?php echo $rec1['song_title'];?>"><i class="fa fa-angle-double-right" style="padding-right:3px;"></i><span class="download-text"><?php echo $rec1['song_title'];?> Download</span></a></div>
        <?php
            }//end of while
        ?>
    </section>

    <section id="category">
        <div id="company" style="background-color:#5cd7f2;margin-bottom:10px;"><span class="title" style="color:rgb(255,255,255);"><strong>Category</strong></span></div>
        <?php
            $query2="SELECT * FROM `categories`";
            $result2=$mysqli->query($query2);
            while($rec2=$result2->fetch_array())
            {
        ?>
        <a href="category.php?category=<?php echo $rec2['category'];?>"><div class="body-components"><span><i class="fa fa-folder-open"></i></span><span class="download-text"><?php echo $rec2['category'];?></span></div></a>
        <?php
            }//end of while
        ?>
    </section>

    <section id="services">
        <div id="company" style="background-color:#5cd7f2;margin-bottom:10px;"><span class="title" style="color:rgb(255,255,255);"><strong>Services&nbsp;</strong><i class="fa fa-wrench"></i></span></div>
        <div class="body-components"><span><i class="fa fa-music" style="color:red;padding-right:3px;"></i></span><span class="download-text">Request Songs</span></div>
        <div class="body-components"><span><i class="fa fa-pie-chart" style="padding-right:3px;color:blue;"></i></span><span class="download-text">Site Partners</span></div>
        <div class="body-components"><span><i class="fa fa-phone" style="padding-right:3px;"></i></span><span class="download-text">Contact Us</span></div>
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