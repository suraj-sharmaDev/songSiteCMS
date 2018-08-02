<?php include("header.php"); ?>
    </section>
    <section id="song-info">
        <ol class="breadcrumb" id="bread-crumb" style="margin-bottom: 10px;">
            <li class="breadcrumb-item"><a><span>Home</span></a></li>
            <li class="breadcrumb-item"><a><span>Song</span></a></li>
        </ol>
        <?php $uri = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
        <?php
            $songTitle=$_GET['song_title'];
            $query1="SELECT * FROM `songs` where `song_title`='$songTitle'";
            $result1=$mysqli->query($query1);
    if($result1->num_rows > 0)
    {
            while($rec=$result1->fetch_array())
                {
            
        ?>
        <div id="section-hdr" class="section-header"><span class="title" style="color:rgb(255,255,255);"><strong><?php echo $rec['song_title'];?> (<?php echo $rec['category'];?>)</strong></span></div>
        <div id="song-info-div"><img src="assets/img/demo.png" class="image-box">
            <div style="margin-top:10px;font-size:12px;">
                <p class="song-info">Album : <?php $alb=$rec['album']; echo $alb;?></p>
                <p class="song-info">Release : Golden Era</p>
                <p class="song-info">Category : &nbsp;<?php echo $rec['category'];?></p>
                <p class="song-info">Added On : <?php echo $rec['added_on'];?></p>
            </div><a class="btn btn-primary share-btns" role="button" href="http://www.facebook.com/sharer.php?u=<?php echo $uri;?>">Share on Facebook</a><a class="btn btn-primary share-btns" role="button"
                href="whatsapp://send?text=Ente%20Mezhuthiri%20Athazhangal%202018%20Malayalam%20Full%20Mp3%20Songs%20Free%20Download%20<?php echo $uri;?>" style="background-color:rgb(14,130,4);">Share on Whatsapp</a></div>
    <?php
        }//end of while
    ?>
    </section>
    <section id="download-menu">
        <div id="section-header-1" class="section-header"><span class="title" style="color:rgb(255,255,255);"><strong>Download Song (Related Album)</strong></span></div>
        <?php
        $query1="SELECT * FROM `songs` where `album`='$alb'";
        $result=$mysqli->query($query1);
        while($rec=$result->fetch_array())
        {
        ?>
        <div class="body-components"><a href="download.php?song_title=<?php echo $rec['song_title'];?>"><i class="fa fa-angle-double-right" style="padding-right:3px;"></i><span class="download-text"><?php echo $rec['song_title'];?> Download (<?php echo $rec['size'];?>)</span></a></div>
        <?php
            } //end of while
        } //end of if
        else
        {
        ?>
        <div class="alert alert-info" role="alert" style="top:20px;width:80%;margin:30px;"><span>No songs Found!</span></div>
        <?php
            }//end of else
        ?>
        <a href="javascript:alert('This will open ads')"><img src="assets/img/23-1-1520938896.gif" class="image-ads" /></a>
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