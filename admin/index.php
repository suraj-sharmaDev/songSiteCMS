<?php include("head.php"); ?>
            <div class="col" style="background-color:#abd8cb;">
                <div style="margin-top:10px;">
                    <div class="alert alert-info" role="alert" style="width:80%;"><span><strong>Items List&nbsp; &nbsp;</strong><i class="fa fa-th-list"></i></span></div>
                    <div style="background-color:white;max-width:80%;">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Categories</th>
                                        <th>Songs</th>
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
                                        <td><?php echo $rec['id'];?></td>
                                        <td><i class="fa fa-folder-open"></i>&nbsp;<?php echo $rec['category'];?></td>
                                        <td><?php echo $rec['count'];?></td>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>