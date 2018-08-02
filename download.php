<?php include("header.php") ?>
    </section>
    <section id="download-section">
        <div id="section-hdr" class="section-header"><span class="title" style="color:rgb(255,255,255);"><strong>Download Song</strong></span></div>
        <div id="download-info" style="font-size:12px;">
            <?php
                $songTitle=$_GET['song_title'];
                $query="SELECT * FROM `songs` where `song_title`='$songTitle'";
                $result=$mysqli->query($query);
                while($rec=$result->fetch_array())
                {

            ?>
            <p>File Name : <?php echo $rec['song_title'];?></p>
            <p>File Size : <?php echo $rec['size'];?></p><a href="javascript:alert('This is ads button')">
   <img src="assets/img/23-1-1520938896.gif" class="image-ads" />
</a>    
<br/>
            <p><a href="<?php echo $rec['url'];?>">[Download File]</a></p>
            <a href="javascript:alert('This is for ads')">
<img src="assets/img/24-1-1520938913.gif" class="image-ads" /><br/>
</a>
        <?php
            }//end of while
        ?>   
 </div>
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