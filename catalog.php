<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap Template</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.css">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Name of Site</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Open Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="#">Name of Company</a>-->
                </div>
                <div id="responsive-menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Link 4<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#1">Link 1</a></li>
                                <li><a href="#2">Link 2</a></li>
                                <li class="divider"></li>
                                <li><a href="#3">Link 3</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form action="" class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="E-mail" value="">
                            <input type="password" class="form-control" placeholder="Password" value="">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-sign-in"></i> Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>WARNING!</h4>
                <p>Welcome <a href="#" class="alert-link">Link</a></p>
                <p>
                    <button class="btn btn-primary" data-dismiss="alert">OK</button>
                    <button class="btn btn-danger" data-dismiss="alert">Cancel</button>
                </p>
            </div>
            <div class="row">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-home"> Home</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bars"> Blog</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sitemap"> Categories</i>
                            </a>
                        </li>
                        <li class="active">
                            <i class="fa fa-podcast"> Posts</i>
                        </li>
                    </ol>
                </div>
                <div class="container">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a href="#">Element 1 <span class="badge">10</span></a>
                        </li>
                        <li>
                            <a href="#">Element 2 <span class="badge">15</span></a>
                        </li>
                        <li>
                            <a href="#">Element 3 <span class="badge">20</span></a>
                        </li>
                        <li>
                            <a href="#">Element 4 <span class="badge">25</span></a>
                        </li>
                    </ul>
                    <hr>
                </div>

            </div>
            <br>
            <div class="row masonry" data-columns="">
                <div class="item">
                    <div class="thumbnail">
                        <img src="http://placehold.it/600x340" alt="" class="img-responsive">
                        <div class="caption">
                            <h4>Thumbnail Name</h4>
                            <p>
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                            </p>
                            <p>
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                            </p>
                            <a class="btn btn-success">Push <i class="fa fa-smile-o"></i> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>  
                </div>
                <div class="item">
                    <div class="thumbnail">
                        <img src="http://placehold.it/600x340" alt="" class="img-responsive">
                        <div class="caption">
                            <h4>Thumbnail Name</h4>
                            <p>
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                            </p>
                            <a class="btn btn-success">Push <i class="fa fa-smile-o"></i> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>  
                </div>
                <div class="item">
                    <div class="thumbnail">
                        <img src="http://placehold.it/600x340" alt="" class="img-responsive">
                        <div class="caption">
                            <h4>Thumbnail Name</h4>
                            <p>
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                            </p>
                            <a class="btn btn-success">Push <i class="fa fa-smile-o"></i> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>  
                </div>
                <div class="item">
                    <div class="thumbnail">
                        <img src="http://placehold.it/600x340" alt="" class="img-responsive">
                        <div class="caption">
                            <h4>Thumbnail Name</h4>
                            <p>
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                            </p>
                            <a class="btn btn-success">Push <i class="fa fa-smile-o"></i> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>  
                </div>
                <div class="item">
                    <div class="thumbnail">
                        <img src="http://placehold.it/600x340" alt="" class="img-responsive">
                        <div class="caption">
                            <h4>Thumbnail Name</h4>
                            <p>
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                            </p>
                            <a class="btn btn-success">Push <i class="fa fa-smile-o"></i> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>  
                </div>
                <div class="item">
                    <div class="thumbnail">
                        <img src="http://placehold.it/600x340" alt="" class="img-responsive">
                        <div class="caption">
                            <h4>Thumbnail Name</h4>
                            <p>
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                            </p>
                            <a class="btn btn-success">Push <i class="fa fa-smile-o"></i> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>  
                </div>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="disabled">
                        <a href="#">
                            <i class="fa fa-chevron-left"></i>
                            <i class="fa fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="disabled">
                        <a href="#">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">6</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-chevron-right"></i>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav>
                <ul class="pager">
                    <li class="previous">
                        <a href="#">
                            &larr; Before
                        </a>
                    </li>
                    <li class="next disabled">
                        <a href="#">
                            After &rarr;
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-3" style="width: 15%;">
                        <ul class="list-unstyled">
                            <li>GitHub<li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact & support</a></li>
                            <li><a href="#">Enterprise</a></li>
                            <li><a href="#">Site status</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3" style="width: 15%;">
                        <ul class="list-unstyled">
                            <li>Applications<li>
                            <li><a href="#">Product for Mac</a></li>
                            <li><a href="#">Product for Windows</a></li>
                            <li><a href="#">Product for Eclipse</a></li>
                            <li><a href="#">Product mobile apps</a></li>							
                        </ul>
                    </div>
                    <div class="col-xs-3" style="width: 15%;">
                        <ul class="list-unstyled">
                            <li>Services<li>
                            <li><a href="#">Web analytics</a></li>
                            <li><a href="#">Presentations</a></li>
                            <li><a href="#">Code snippets</a></li>
                            <li><a href="#">Job board</a></li>							
                        </ul>
                    </div>
                    <div class="col-xs-3" style="width: 15%;">
                        <ul class="list-unstyled">
                            <li>Documentation<li>
                            <li><a href="#">Product Help</a></li>
                            <li><a href="#">Developer API</a></li>
                            <li><a href="#">Product Markdown</a></li>
                            <li><a href="#">Product Pages</a></li>							
                        </ul>
                    </div>	
                    <div class="col-xs-3" style="width: 15%;">
                        <ul class="list-unstyled">
                            <li>More<li>
                            <li><a href="#">Training</a></li>
                            <li><a href="#">Students & teachers</a></li>
                            <li><a href="#">The Shop</a></li>
                            <li><a href="#">Plans & pricing</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>					
                </div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="span8">
                        <a href="#">Terms of Service</a>    
                        <a href="#">Privacy</a>    
                        <a href="#">Security</a>
                    </div>
                    <div class="span4">
                        <p class="muted pull-right">© 2013 Company Name. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <script src="js/salvattore.min.js"></script>
    </body>
</html>