<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel='stylesheet' type='text/css' href='../css/x3dom.css'>
    <link rel="stylesheet" href="../css/custom.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <title>3D App - Jh892</title>
  </head>
  <body id="bodyColor">
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="container-fluid"> 
            <div class="logo">
                    <a class="navbar-brand" href="#">
                        <h1>1oca</h1>
                        <h2>Cola</h2>
                    </a>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="navHome" class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                            <a id="navAbout" class="nav-link"  href="#">About</a>
                    </li>
                
                    <li class="nav-item">
                        <a id="navModels" class="nav-link"  href="#">Models</a>
                    </li>
                    <li class="nav-item">
                        <a id="navContact"class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="main_contents" id="home">
            <div class="row">
                <div id="main_image_container" class="col-sm-12">
                    <div id="main_3d_image">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                            <img class="card-img-top img-fluid img-thumbnail" src="../assets/images/Coca-Cola-Logo.png" alt="Coca Cola">
                        <div class="card-body">
                            <div id="title_left" class="card-title drinksText"></div>
                            <div id="subTitle_left" class="card-subtitle drinksText"></div>
                            <div id="description_left" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>          
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-4">
                    <div class="card">
                            <img class="card-img-top img-fluid img-thumbnail" src="../assets/images/oasis-logo-original.png" alt="oasis">
                        <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="https://www.coca-cola.co.uk/brands/oasis" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                            <img class="card-img-top img-fluid img-thumbnail" src="../assets/images/Fanta-Logo.png" alt="Fanta">
                        <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/dr-fanta/dr-fanta" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="models" class="main_contents" style="display: none;">
            <div class="row">
                <!-- X3D Models -->
                <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-body">
                    <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"><h2><?php echo $data[0]['x3dModelTitle'] ?></h2></div>
                        <div id="x3dModelTitle_oasis" class="card-title drinksText"><h2><?php echo $data[1]['x3dModelTitle'] ?></h2></div>
                        <div id="x3dModelTitle_fanta" class="card-title drinksText"><h2><?php echo $data[2]['x3dModelTitle'] ?></h2></div>

                        <button type="button" class="btn btn-sucess btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</Button>
                        <button type="button" class="btn btn-sucess btn-responsive" onMouseUp="oasisScene(); oasisDescription();">Oasis</Button>
                        <button type="button" class="btn btn-sucess btn-responsive" onMouseUp="fantaScene(); fantaDescription();">Fanta</Button>

                        <div class="model3D">
                            <x3d id="wire">
                                <scene>
                                    <Switch whichChoice="0" id="SceneSwitch">
                                        <transform>
                                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url=<?php echo $data[0]['modelLocation'] ?> > </inline>
                                        </transform>
                                        <transform>
                                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url=<?php echo $data[1]['modelLocation'] ?> > </inline>
                                        </transform>
                                        <transform>
                                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url=<?php echo $data[2]['modelLocation'] ?> > </inline>
                                        </transform>
                                    </Switch>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText">
                            <p><?php echo $data[0]['x3dCreationMethod'] ?></p>
                        </div>
                        <div id="x3dCreationMethod_oasis" class="card-text drinksText">
                            <p><?php echo $data[1]['x3dCreationMethod'] ?></p>
                        </div>
                        <div id="x3dCreationMethod_fanta" class="card-text drinksText">
                            <p><?php echo $data[2]['x3dCreationMethod'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    

        <!-- Image gallery -->
            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div>
                </div> 
            </div> 
        </div> 

        <!-- Interaction panel -->
        <div id="interaction" class="row" >
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-body">
                          <div class="card-Title x3dCameraTitle drinksText"></div>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="cameraRight();">Right</a>
                          <div class="card-text x3dCameraDescription drinksText"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-body">
                          <div class="card-Title x3dAnimationtitle drinksText"></div>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="animateModel();">Animate</a>
                          <div class="card-text x3dAnimationDescription drinksText"></div>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-body">
                          <div class="card-Title x3dRenderTitle drinksText"></div>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="wireframe();">Toggle Wireframe</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="headlight();">Toggle Headlight</a>
                          <div class="card-text x3dRenderDescription drinksText"></div>
                        </div>
                      </div>
                </div>
        </div>

        <!-- Descriptions -->
        <div id="cokeDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                        <div id="description_coke" class="card-text drinksText">
                            <p><?php echo $data[0]['modelDescription'] ?></p>
                        </div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                    </div>
                </div>
            </div>
        </div> 
        <div id="oasisDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_oasis" class="card-title drinksText"></div>
                        <div id="subTitle_oasis" class="card-subtitle drinksText"></div>
                        <div id="description_oasis" class="card-text drinksText">
                            <p><?php echo $data[1]['modelDescription'] ?></p>
                        </div>  
                        <a href="http://www.coca-cola.co.uk/drinks/oasis/oasis" class="btn btn-primary btn-responsive">Visit oasis</a>                 
                    </div>
                </div>
            </div>
        </div> 
        <div id="fantaDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_fanta" class="card-title drinksText"></div>
                        <div id="subTitle_fanta" class="card-subtitle drinksText"></div>
                        <div id="description_fanta" class="card-text drinksText">
                            <p><?php echo $data[2]['modelDescription'] ?></p>
                        </div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-fanta/dr-fanta" class="btn btn-primary btn-responisve">Visit Fanta</a>                 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" >
        <p><a href="https://github.com/joehardie1/3dapp">Github Repository</a></p>
    </div>  

    <div id="contact" >
        <p>Joe Hardie, Email: jh892@sussex.ac.uk</p>
    </div>  

    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 2019 Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
            </div>
            <div class="navbar-text float-right social">
                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
            </div>
        </div>
    </nav> 

    <!-- JavaScript Files -->
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/custom.js" crossorigin="anonymous"></script>
    <script src="../js/swap_restyle.js"></script>
    <script type='text/javascript' src='../js/x3dom.js'></script>
    <script type="text/javascript" src="../js/gallery.js"></script>
    <script src="../js/getJsonData.js"></script>
    <script src="../js/modelInteractions.js"></script>

  </body>
</html>