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
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.css">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
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
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1>Carousel</h1>
                    <div id="carousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#carousel" data-slide-to="0"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <a class="btn btn-primary center-block">PRIMARY</a>
                                <img src="img/bentley.jpg">
                                <div class="carousel-caption">
                                    <h1>First Slide</h1>
                                    <p>Description of First Slide</p>
                                </div>
                            </div>
                            <div class="item">
                                <a class="btn btn-primary center-block">PRIMARY</a>
                                <img src="img/maserati.jpg">
                                <div class="carousel-caption">
                                    <h1>Second Slide</h1>
                                    <p>Description of Second Slide</p>
                                </div>
                            </div>
                            <div class="item">
                                <a class="btn btn-primary center-block">PRIMARY</a>
                                <img src="img/dodge.jpg">
                                <div class="carousel-caption">
                                    <h1>Third Slide</h1>
                                    <p>Description of Third Slide</p>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#carousel" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Button</h1>
                    <a class="btn btn-danger" data-toggle="tooltip" data-trigger="click" title="Button Danger">DANGER</a>
                    <a class="btn btn-default" data-toggle="tooltip" title="Button Default">DEFAULT</a>
                    <a class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Button Info" data-content="INFO">INFO</a>
                    <a class="btn btn-link" data-toggle="tooltip" title="Button Link">LINK</a>
                    <a class="btn btn-primary" data-toggle="tooltip" title="Button Primary">PRIMARY</a>
                    <a class="btn btn-success" data-toggle="tooltip" title="Button Success">SUCCESS</a>
                    <a class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Button Warning">WARNING</a>
                </div>
                <div class="col-lg-6">
                    <h1>Buttons Group</h1>
                    <div class="btn-group">
                        <a class="btn btn-danger">DANGER</a>
                        <a class="btn btn-default">DEFAULT</a>
                        <a class="btn btn-info">INFO</a>
                        <a class="btn btn-link">LINK</a>
                        <a class="btn btn-primary">PRIMARY</a>
                        <a class="btn btn-success">SUCCESS</a>
                        <a class="btn btn-warning">WARNING</a>
                    </div>
                    <div class="btn-group btn-group-vertical">
                        <a class="btn btn-danger">DANGER</a>
                        <a class="btn btn-default">DEFAULT</a>
                        <a class="btn btn-info">INFO</a>
                        <a class="btn btn-link">LINK</a>
                        <a class="btn btn-primary">PRIMARY</a>
                        <a class="btn btn-success">SUCCESS</a>
                        <a class="btn btn-warning">WARNING</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Buttons Toolbar</h1>
                    <div class="btn-toolbar">
                        <div class="btn-group btn-group-justified">
                            <a class="btn btn-danger">DANGER</a>
                            <a class="btn btn-default">DEFAULT</a>
                            <a class="btn btn-info">INFO</a>
                            <a class="btn btn-link">LINK</a>
                            <a class="btn btn-primary">PRIMARY</a>
                            <a class="btn btn-success">SUCCESS</a>
                            <a class="btn btn-warning">WARNING</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Button Dropdown</h1>
                    <div class="btn-group pull-right">
                        <button class="btn btn-success">
                            SUCCESS
                        </button>
                        <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><button class="btn btn-info">LINK 1</button></li>
                            <li><button class="btn btn-info">LINK 2</button></li>
                            <li><button class="btn btn-info">LINK 3</button></li>
                            <li><button class="btn btn-info">LINK 4</button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Tabs</h1>
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-1" data-toggle="tab" class="btn btn-success">Tab 1</a></li>
                            <li><a href="#tab-2" data-toggle="tab" class="btn btn-info">Tab 2</a></li>
                            <li><a href="#tab-3" data-toggle="tab" class="btn btn-primary">Tab 3</a></li>
                            <li><a href="#tab-4" data-toggle="tab" class="btn btn-warning">Tab 4</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade in active">
                                <p>Tab 1 content</p>
                            </div>
                            <div id="tab-2" class="tab-pane fade">
                                <p>Tab 2 content</p>
                            </div>
                            <div id="tab-3" class="tab-pane fade">
                                <p>Tab 3 content</p>
                            </div>
                            <div id="tab-4" class="tab-pane fade">
                                <p>Tab 4 content</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Collapse</h1>
                    <a href="#spoiler-1" class="btn btn-primary spoiler collapsed" data-toggle="collapse"></a>
                    <div id="spoiler-1" class="collapse">
                        <div class="well">
                            <p>Spoiler 1 content</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Accordion</h1>
                    <div id="accordion" class="panel-group">
                        <div class="panel panel-success">
                            <div class="panel panel-heading">
                                <h4 class="panel-title">
                                    <a href="#collapse-1" data-parent="#accordion" data-toggle="collapse">Open first block</a>
                                </h4>
                            </div>
                            <div id="collapse-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Content of first block</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel panel-heading">
                                <h4 class="panel-title">
                                    <a href="#collapse-2" data-parent="#accordion" data-toggle="collapse">Open second block</a>
                                </h4>
                            </div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Content of second block</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel panel-heading">
                                <h4 class="panel-title">
                                    <a href="#collapse-3" data-parent="#accordion" data-toggle="collapse">Open third block</a>
                                </h4>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Content of third block</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Modal Window</h1>
                    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-1">Open</button>
                </div>
                <div class="col-lg-6">
                    <h1>Progress Bar</h1>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" style="min-width: 5%; width: 45%;">45%</div>
                        <div class="progress-bar progress-bar-success" style="min-width: 5%; width: 12%;">12%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary progress-bar-striped active" style="min-width: 5%; width: 50%;">50%</div>
                        <div class="progress-bar progress-bar-info" style="min-width: 5%; width: 50%;">50%</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Catalog Page</h1>
                    <a class="btn btn-info" href="catalog.php">Catalog</a>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <div id="modal-1" class="modal fade" data-backdrop="static">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Name of Modal Window</h4>
                    </div>
                    <div class="modal-body">
                        <p>Body of Modal Window</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-3"><br></div>
                        <div class="col-lg-3"><br></div>
                        <div class="col-lg-3"><br></div>
                        <div class="col-lg-3"><br></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-3"><br></div>
                        <div class="col-lg-3"><br></div>
                        <div class="col-lg-3"><br></div>
                        <div class="col-lg-3"><br></div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <script>
            $(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
            });
        </script>
    </body>
</html>