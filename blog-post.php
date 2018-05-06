 <?php require('database/phpfunction.php'); include('header.php');?>              
            <!-- page content -->
            <div class="page-content">
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>Posted News</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <?php $result = get_news_post($_GET['post_number']);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {?>
                                <li><a href="index.php">home</a></li>
                                <li>news</li>
                                <li class="active"><?php echo $row["news_categorie"]; ?></li>
                                <?php } } else { echo 'NO BREAKING NEWS'; }?>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                               
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder padding-v-30">

                        <div class="row">                        
                            <div class="col-md-9">
                                <div class="blog-content">
                                <?php $result = get_news_post($_GET['post_number']);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {?>
                                    <img src="<?php echo 'data:image/png;base64,'.base64_encode($row["image"]);?>" class="img-responsive" style="height: 307px;width: 100%;" />
                                    <h2><?php echo $row["news_title"]; ?></h2>
                                    <span class="blog-date"><?php echo $row["news_date"]; ?> / <?php echo $row["total_comment"];?> Comments</span>                               
                                    <blockquote><p><?php echo $row["news_description"]; ?></p></blockquote>
                                    <?php } } else { echo 'NO BREAKING NEWS'; }?>
                                </div>


                                <div class="text-column">
                                    <h3>Comments</h3>
                                </div>
                                <div class="block">
                                    <ul class="media-list">
                                        <?php $count = 0; $result = get_news_post_comment($_GET['post_number']);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) { $count=$count+1?>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="media-heading"><?php echo $row["commenter_name"]; ?></h6>
                                                <p><?php echo $row["comment"]; ?></p>
                                                <p class="text-muted"><?php echo $row["comment_date"];?></p>                                                                                         
                                            </div>                                            
                                        </li>
                                        <?php } } else { echo 'NO COMMENT YET'; }?>
                                        <?php news_commnet_count_update($count,$_GET['post_number']) ?>
                                    </ul>                                    
                                </div>
                                <div class="text-column">
                                    <h3>New Comment</h3>
                                <div class="block">                            
                                <form class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF'].'?post_number='.$_GET['post_number']; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name*</label>
                                        <div class="col-md-5">
                                             <input type="text" class="form-control" placeholder="Your name" required="required" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email*</label>
                                        <div class="col-md-5">
                                            <input type="email" class="form-control" placeholder="Yuor email" required="required" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Comment*</label>
                                        <div class="col-md-5">
                                            <textarea class="form-control" rows="5" required="required" name="coment_text"></textarea>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-md-5">
                                            <input type="submit" class="form-control" name="submit" value="submit">
                                        </div>
                                    </div>                                    
                                </form>
                                <?php
                                    if(isset($_POST['submit'])){
                                        $user_name=$_POST['name'];
                                        $email=$_POST['email'];
                                        $comment=$_POST['coment_text'];
                                        $post_no=$_GET['post_number'];

                                        news_commnet_submit($user_name,$email,$comment,$post_no);

                                    }
                                ?>                                                                                         
                            </div>                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                                
            </div>
            <!-- ./page content -->
            

<?php include('footer.php'); ?>



