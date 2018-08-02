<?php include("head.php"); 
$category=$_GET['category'];
?>
            <div class="col" style="background-color:#abd8cb;">
                <div style="margin-top:10px;">
                    <div class="alert alert-info" role="alert" style="width:80%;"><span><strong>Category : <?php echo $category;?> &nbsp;&nbsp;</strong><i class="fa fa-music"></i></span></div>
                    <div style="background-color:white;max-width:80%;min-width:280px;font-size:12px;"><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addSong">Add a Song</button>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Categories</th>
                                        <th>Song Title</th>
                                        <th>URL</th>
                                        <th>Modify</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php
                                    $query="SELECT * FROM `songs` where `category`='$category'";
                               		$result=$mysqli->query($query);
                              		while($rec=$result->fetch_array()){

                              	?>
                                    <tr>
                                        <td><?php echo $rec['id'];?></td>
                                        <td><?php echo $rec['category'];?></td>
                                        <td><i class="fa fa-music"></i>&nbsp;<?php echo $rec['song_title'];?></td>
                                        <td><?php echo $rec['url'];?></td>
                                        <td><a href="#"><i class="fa fa-wrench" data-toggle="modal" data-target="#modifySong<?php echo $rec['song_title'];?>"></i></a></td>
                                        <td><a href="#"><i class="fa fa-recycle" data-toggle="modal" data-target="#deleteSong<?php echo $rec['song_title'];?>"></i></a></td>
                                    </tr>
                                    <?php
                                    	}
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal" id="addSong">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add a new Song</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="song-admin.php">
        <input type="hidden" name="songsManage" value="add"/>
        <input type="hidden" name="category" value=<?php echo $category;?> />
        Song Title
        <input type="text" name="songTitle" placeholder="Song Title"/><br/><br/>
        Album Name
        <input type="text" name="albumName" placeholder="Album"/><br/><br/>
        Download URL
        <input type="text" name="downloadUrl" placeholder="URL"/>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Add</button>
      </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!--Modify and delete songs-->

  <?php
      $query1="SELECT * FROM `songs`";
      $result1=$mysqli->query($query1);
      while($rec1=$result1->fetch_array())
       {
  ?>

<div class="modal" id="deleteSong<?php echo $rec1['song_title'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete this Song</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Are you sure?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <form method="post" action="song-admin.php">
        <input type="hidden" name="category" value=<?php echo $category;?> />
        <input type="hidden" name="songsManage" value="delete"/>
        <input type="hidden" name="songsTitle" value="<?php echo $rec1['song_title'];?>" />
        <button type="submit" class="btn btn-warning">Yes</button>
      </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="modifySong<?php echo $rec1['song_title'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modify Song</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="song-admin.php">
        <input type="hidden" name="category" value=<?php echo $category;?> />
        <input type="hidden" name="presentTitle" value="<?php echo $rec1['song_title'];?>" />
        <input type="hidden" name="songsManage" value="modify"/>
        Song Title
        <input type="text" name="songTitle" placeholder="<?php echo $rec1['song_title'];?>" value="<?php echo $rec1['song_title'];?>" /><br/><br/>
        Album Name
        <input type="text" name="albumName" placeholder="<?php echo $rec1['album'];?>" value="<?php echo $rec1['album'];?>" /><br/><br/>
        Download URL
        <input type="text" name="downloadUrl" placeholder="<?php echo $rec1['url'];?>" value="<?php echo $rec1['url'];?>"/>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Add</button>
      </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php
  }//end of while
?>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>