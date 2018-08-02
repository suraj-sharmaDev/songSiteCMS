<?php include("header.php") ?>
        
        <div id="search-box" style="margin-top:10px;font-size:12px;padding-left:30px;"><span>Search Songs:&nbsp;</span>
            <form method="post" action="search.php">
            <input type="search" name="search" placeholder="Search" />
            <button type="submit"><i class="fa fa-search" id="search-icon" style="margin-left:3px;"></i></button>
        </form>
        </div>
    </section>
	
  <section id="recent-updates">
        <div id="recent-title" style="background-color:#5cd7f2;"><span class="title" style="color:rgb(255,255,255);"><strong>Searches&nbsp;&nbsp;</strong><i class="fa fa-search"></i></span></div>
        <div>
			<?php
			if($_POST)
			{
				$search=$_POST['search'];
				$search=preg_replace('#[^a-z 0-9?!]#i', '',$_POST['search'] );
				$search=trim(strtolower($search));
				$search=explode(' ',$search);
				$query="SELECT * FROM `songs`";
				$result=$mysqli->query($query);
				while($rec=$result->fetch_array()){
					$title=$rec['song_title'];
					$title=explode(' ',$title);
					$album=$rec['album'];
					$album=explode(' ',$album);
					if (array_intersect(array_map('strtolower', $search), array_map('strtolower', $title)) or array_intersect(array_map('strtolower', $search), array_map('strtolower', $album)))
					{
			?>

              <div class="body-components"><a href="single.php?song_title=<?php echo $rec['song_title'];?>"><span class="icon-body"><i class="fa fa-bell"></i></span><span class="date-span"><?php echo $rec['added_on'];?></span><span class="filler-text">: New Mp3 Songs "</span><span class="song-title"><?php echo $rec['song_title'];?></span><span class="download-text">" Download!!<img src="assets/img/400838665_d301dd140d.gif"></span></a>
            </div>
            <?php
                }//end of if
           	 }//end of while
           	}//end of if
           	else
           	{
           	?>
           	<div class="alert alert-warning" role="alert" style="width:200px;margin:30px;"><span>No Searches found!!</span></div>
           	<?php
           	}//end of else

            ?>
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
