<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Font awesome fonts, both css and js versions installed, js SVG versions will override if they are available -->
    <!-- Font Awesome Webfonts -->
    <link rel="stylesheet" href="assets/css/all.css">

    <!-- Font Awesome SVG - Note if you use custom.css to change color or other features, all.js will overwrite.-->
    <!--<script defer src="js/all.js"></script>-->
    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>

    <link rel='stylesheet' type='text/css' href='assets/css/x3dom.css'>
    </link>
    <script type='text/javascript' src='assets/js/x3dom.js'></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

    <title>Web 3D Apps - Home</title>
</head>
<body>
    <div id="nav">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="logo">
          <a id="logo" class="navbar-brand" href="#">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the world, one story at a time</p>
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a id="navHome" class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a id="navModels" class="nav-link" href="#">Models</a>
            </li>
            <li class="nav-item">
              <a id="navAbout" class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div id="content" style="padding: 100px 0px 0px 0px;">
        <div id="home">
            <div class="container-fluid main_contents">
                <div class="mb-3">
                    <img src="assets/images/coca-cola-original-brand-page-desktop-1600x700.jpg" alt="banner" style="width: 100%;"/>
                </div>
                <div id="history">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="assets/images/fanta_background.jpg" alt="fanta" style="width: 100%;">
                        </div>
                        <div class="col-sm-6">
                            <h2><?php echo $data[1]['brand'] ?></h2>
                            <p><?php echo $data[1]['modelDescription'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="assets/images/costa_background.jpg" alt="fanta" style="width: 100%;">
                        </div>
                        <div class="col-sm-6">
                            <h2><?php echo $data[2]['brand'] ?></h2>
                            <p><?php echo $data[2]['modelDescription'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="assets/images/coke_background.jpg" alt="fanta" style="width: 100%;">
                        </div>
                        <div class="col-sm-6">
                            <h2><?php echo $data[0]['brand'] ?></h2>
                            <p><?php echo $data[0]['modelDescription'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="about">
            <div class="container-fluid main_contents">
                <div id="about_main">
                <h1>Models</h1>
                <p>I have made 3 models; The coke bottle, fanta can and costa coffee cup. The coke bottle is the most sophisticated model, implemented with the bottle edges.</p> <br/>
                <p>Unfortunately the website is unable to view it so a copy of the model was uploaded at</p>
                <a href="http://users.sussex.ac.uk/~asp28/3dapp/coke_bottle.html" target="_blank" style="text-decoration: none; color: black; font-size:30px">here</a>
            </div>
            <div id="about_mvc">
                <h1>MVC</h1>
                <p>The php mvc structure taught during the module was used. Implemented in the MVC structure was the Flickr API and switch cases for the 3d models.</p>
                <p>The application follows a single page structure and uses jQuery to show and hide each page.</p>
                <p>Unfortunately due to the use of x3dom, I was unable to implement a front end framework like Vue.js or AngularJS(even after already building it) as x3dom would not work with the
                    virtual doms given in the frameworks.
                </p>
            </div>
            <div id="about_additions">
                <h1>Website additions</h1>
                <p>Added links to the database models for the more info button.</p>
                <p>Added Flickr Api</p>
                <p>More complex Coke bottle model</p>
                <p>Used PDO php objects</p>
                <p>Used Bootstrap</p>
                <p>Used JQuery</p>
            </div>
            </div>
            
        </div>
        <div id=models>
        <div class="container-fluid main_contents">
            <div class="row">
            <!-- Main_3D Image or Carousel -->
            <div class="col-sm-10">
                <div class="mb-3">
                <a href="#" id="navCoke" onclick="cokeDescription(); cokeScene();" class="btn btn-outline-info">Coke</a>
                <button href="#" id="navCosta" onclick="costaDescription(); costaScene();" class="btn btn-outline-info">Costa</button>
                <button href="#" id="navFanta" onclick="fantaDescription(); fantaScene();" class="btn btn-outline-info">Fanta</button>
                </div>
                <div id="Models">
                    <div id="model3D">
                        <x3d id="model" x='0px' y='0px' class="shadow x3dmodel">
                            <scene>
                                <Switch whichChoice="0" id="SceneSwitch">
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="True" url="assets/models/coke_bottle.x3d"></inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="True" url="assets/models/fanta.x3d"></inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="True" url="assets/models/costa.x3d"></inline>
                                    </transform>
                                </Switch>
                            </scene>
                        </x3d>
                    </div>
                    <div id="cokeTitleDesc">
                        <h2><?php echo $data[0]['x3dModelTitle'] ?></h2>
                        <p><?php echo $data[0]['x3dCreationMethod'] ?></p>
                    </div>
                    <div id="fantaTitleDesc">
                        <h2><?php echo $data[1]['x3dModelTitle'] ?></h2>
                        <p><?php echo $data[1]['x3dCreationMethod'] ?></p>
                    </div>
                    <div id="costaTitleDesc">
                        <h2><?php echo $data[2]['x3dModelTitle'] ?></h2>
                        <p><?php echo $data[2]['x3dCreationMethod'] ?></p>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-2 shadow">
                <div>
                3D Image Gallery
                </div>
                <div id="images">

                </div>
                <p>Images got using the Flickr API and get request. See getDrink.js</p>
            </div>
            </div>
            </div>
        </div>
        <div id="interaction" class="row m-3">
            <div id="controls" class="col-sm-4 shadow">
                <h3>View controls</h3>
                <a class="btn btn-info m-1" href="#" onclick="cameraFront();">Front</a>
                <a class="btn btn-info m-1" href="#" onclick="cameraBack();">Back</a>
                <a class="btn btn-info m-1" onclick="cameraLeft();">Left</a>
                <a class="btn btn-info m-1" onclick="cameraRight();">Right</a>
                <a class="btn btn-info m-1" onclick="cameraTop();">Top</a>
                <a class="btn btn-info m-1" onclick="cameraBottom();">Bottom</a>
            </div>
            <div id="animations" class="col-sm-4 shadow">
                <h3>Animation controls</h3>
            <a href="#" class="btn btn-info m-1" onclick="animateModel();">Animate</a>
            <a href="#" class="btn btn-info m-1" onclick="stopRotation();">Stop</a>
            </div>
            <div id="render" class="col-sm-4 shadow">
                <h3>Render controls</h3>
            <a href="#" class="btn btn-info m-1" onclick="headlight();">Headlight</a>
            <a href="#" class="btn btn-info m-1" onclick="wireframe();">Wireframe</a>
            <a href="#" class="btn btn-info m-1" onclick="omniLight();">Omni</a>
            <a href="#" class="btn btn-info m-1" onclick="setDefault();">Default</a>
            </div>
        </div>
        <div id="cokeDescription">
            <div class="row">
                <!-- Coca Cola column -->
                <div class="col-sm-12 d-flex align-items-stretch">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $data[0]['modelTitle'] ?></h3>
                            <h5><?php echo $data[0]['modelSubtitle'] ?></h5>
                            <p class="card-text"><?php echo $data[0]['modelDescription'] ?></p>
                            <a href="<?php echo $data[0]['link'] ?>" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fantaDescription">
            <div class="row">
                <!-- Coca Cola column -->
                <div class="col-sm-12 d-flex align-items-stretch">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $data[1]['modelTitle'] ?></h3>
                            <h5><?php echo $data[1]['modelSubtitle'] ?></h5>
                            <p class="card-text"><?php echo $data[1]['modelDescription'] ?></p>
                            <a href="<?php echo $data[1]['link'] ?>" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="costaDescription">
            <div class="row">
                <!-- Coca Cola column -->
                <div class="col-sm-12 d-flex align-items-stretch">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $data[2]['modelTitle'] ?></h3>
                            <h5><?php echo $data[2]['modelSubtitle'] ?></h5>
                            <p class="card-text"><?php echo $data[2]['modelDescription'] ?></p>
                            <a href="<?php echo $data[2]['link'] ?>" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer font-small navbar-dark bg-dark">

    <!-- Copyright -->
    <div class="footer-copyright text-center footer-text py-3 row">
        <div class="col-sm-6">
             © 2020 Copyright:
            <a href="#"> Ankeet Patel</a>
            University Of Sussex 2021 - Web3D Module CW
        </div>
        <div class="col-sm-6">
            <a class="fb-ic">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
                <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
        </div>
        
    </div>
    <!-- Copyright -->

</footer>

    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <script src="assets/js/jquery.fancybox.min.js"></script>

    <script src="assets/js/swap.js"></script>
    <script src="assets/js/modelInteractions.js"></script>
    <script src="assets/js/getDrink.js"></script>

</body>
</html>