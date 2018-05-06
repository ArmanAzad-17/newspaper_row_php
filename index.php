<?php require('database/phpfunction.php'); include('header.php');?>            
            <!-- page content -->
            <div class="page-content">

                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title text-center" style="padding-top: 12px;">                            
                            <!-- breadcrumbs -->
                            <ul>
                                <p class="marquee"><b>Braeking News : </b>
                                <?php $result = get_news_content(5);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {?>
                                 <?php echo $row["news_title"].' . ';?>
                                <?php } } else { echo 'NO BREAKING NEWS'; }?>
                                </p>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>



                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-img-2 light-elements">
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
                            <h2><strong>Generated 5 paragraphs</strong> , 541 words, 3616 bytes</h2>
                            <div class="block-heading-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id quam id orci varius aliquet. Morbi placerat placerat magna non sodales. Proin imperdiet, est sed vehicula pretium, ligula nunc congue risus, quis euismod eros ipsum in metus. Suspendisse vel scelerisque augue. 
                            </div>
                        </div>                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->

                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder padding-v-30">
                        
                        <div class="block-heading this-animate animated fadeInLeft this-animated" data-animate="fadeInLeft">
                            <h2>Recent News</h2>
                        </div>  
                        
                        <div class="row">                        
                            <div class="col-md-9">
                                
                                <div class="row">
                                    <?php
                                        $result = get_news_content(5);

                                        if ($result->num_rows > 0) {
                                              while($row = $result->fetch_assoc()) {
                                    ?>
                                    <div class="col-md-6">
                                        
                                        <div class="blog-item this-animate animated fadeInUp this-animated" data-animate="fadeInUp">
                                            <div class="blog-media">
                                                <img src="<?php echo 'data:image/png;base64,'.base64_encode($row["image"]);?>" class="img-responsive">
                                            </div>
                                            <div class="blog-data">
                                                <h5><a href="blog-post.php?post_number=<?php echo $row['id']; ?>"><?php echo $row["news_title"]; ?></a></h5>
                                                <span class="blog-date"><?php echo $row["news_date"]; ?> / <?php echo $row["total_comment"];?> Comments</span>
                                                <p><?php echo substr($row["news_description"],0,150); ?>....</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <?php
                                            }

                                        } else {
                                            echo 'NO RECENT POST HAS BEEN ADDED';
                                        }
                                    ?>
                                </div>
                                
<!--                                 <ul class="pagination pagination-sm pull-right">
                                    <li class="disabled"><a href="#">«</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>                                    
                                    <li><a href="#">»</a></li>
                                </ul> -->
                                
                            </div>
<!--                            <div class="col-md-3">
                                <div class="text-column this-animate animated fadeInRight this-animated" data-animate="fadeInRight">                                    
                                    <h4>Archive</h4>
                                    <div class="list-links">
                                        <?php
                                            // $result = get_news_content(5);

                                            // if ($result->num_rows > 0) {
                                            //       while($row = $result->fetch_assoc()) {
                                        ?>                                        
                                        <a href="#"><?php //echo $row["news_date"]; ?></a>
                                        
                                        <?php
                                            //     }

                                            // } else {
                                            //     echo 'NO RECENT POST HAS BEEN ADDED';
                                            // }
                                        ?>                            
                                    </div>
                                </div>
                                
                            </div> -->
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                


            </div>
            <!-- ./page content -->
<?php include('footer.php'); ?>






