<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>User interface</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
        
    </head>
    <body>
        <!-- page container -->
        <div class="page-container">
            
            <!-- page header -->
            <div class="page-header">
                
                <!-- page header holder -->
                <div class="page-header-holder">
                    
                    <!-- page logo -->
                    <div class="logo">
                        <a href="#">NEWSPAPER</a>
                    </div>
                    <!-- ./page logo -->
                    

                    <!-- search -->
                    <div class="search">
                        <div class="search-button"><span class="fa fa-search"></span></div>
                        <div class="search-container animated fadeInDown">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="search.."/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ./search -->

                    <!-- nav mobile bars -->
                    <div class="navigation-toggle">
                        <div class="navigation-toggle-button"><span class="fa fa-bars"></span></div>
                    </div>
                    <!-- ./nav mobile bars -->
                    
                    <!-- navigation -->
                    <ul class="navigation">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                            <ul>
                                <li><a href="page.php?news=bangladesh">Bangladesh </a></li>
                                <li><a href="page.php?news=Capital market">Capital market </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="page.php?news=international">International</a>
                        </li>
                        <li>
                            <a href="#">Opinion</a>
                        </li>
                        <li><a href="page.php?news=advertisement">Advertisement</a></li>
                    </ul>
                    <!-- ./navigation -->                        

                    
                </div>
                <!-- ./page header holder -->
                
            </div>
            <!-- ./page header -->