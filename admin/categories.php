<?php include("head.php"); ?>
            <div class="col" style="background-color:#abd8cb;">
                <div style="margin-top:10px;">
                    <div class="alert alert-info" role="alert" style="width:80%;"><span><strong>Items List&nbsp; &nbsp;</strong><i class="fa fa-th-list"></i></span></div>
                    <div style="background-color:white;max-width:80%;min-width:280px;font-size:12px;"><button class="btn btn-primary" type="button" style="left:80%;" data-target="#addCategory" data-toggle="modal">Add a Category</button>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Categories</th>
                                        <th>Count</th>
                                        <th>Modify</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $query="SELECT * FROM `categories`";
                                    $result=$mysqli->query($query);
                                    while($rec=$result->fetch_array())
                                    {
                                  ?>
                                    <tr>
                                        <td><?php echo $rec['id']; ?></td>
                                        <td>&nbsp;<a href="songsManage.php?category=<?php echo $rec['category'];?>"><i class="fa fa-folder-open"></i>&nbsp; <?php echo $rec['category']; ?><br></a></td>
                                        <td><?php echo $rec['count']; ?></td>
                                        <td><a href="#"><i class="fa fa-wrench" data-target="#modifyCategory<?php echo $rec['category'];?>" data-toggle="modal"></i></a></td>
                                        <td><a href="#"><i class="fa fa-recycle" data-target="#deleteCategory<?php echo $rec['category'];?>" data-toggle="modal"></i></a></td>
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
<div class="modal" id="addCategory">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add a new Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Category Name
        <form method="post" action="category-admin.php">
        <input type="hidden" name="categories" value="add"/>
        <input type="text" name="category" placeholder="Category"/>
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

<!--Modify and delete categories-->

  <?php
      $query1="SELECT * FROM `categories`";
      $result1=$mysqli->query($query1);
      while($rec1=$result1->fetch_array())
       {
  ?>
<div class="modal" id="modifyCategory<?php echo $rec1['category'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modify this Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="category-admin.php">
        Enter New Name
        <input type="hidden" name="categories" value="modify"/>
        <input type="hidden" name="present"  value="<?php echo $rec1['category'];?>"/>
        <input type="text" name="category" placeholder="<?php echo $rec1['category'];?>"  value="<?php echo $rec1['category'];?>"/>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Yes</button>
      </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>

    </div>
  </div>
</div>
<div class="modal" id="deleteCategory<?php echo $rec1['category'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete this Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Are you sure?
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <form method="post" action="category-admin.php">
        <input type="hidden" name="categories" value="delete"/>
        <input type="hidden" name="category" value="<?php echo $rec1['category'];?>"/>
        <button type="submit" class="btn btn-warning">Yes</button>
      </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
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