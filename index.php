<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>Home -  Satina-holding</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet"> 

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
$(document).ready(function(){
    var maxLength = 100;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="javascript:void(0);" class="read-more">...read more</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
});
</script>


<style type="text/css">

    .show-read-more .more-text{
        display: none;
    }

    button {
        background-color: blue;
    }
    .linkbutton {
        background-color: #1683b3;
        border-radius: 5px;
    }
    .linkbutton:hover {
        background-color: #169dd9;
        border-radius: 5px;
    }

.card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("images/phone1.jpg");
    background-size: cover;
    height: 135px;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.mycard {
  text-align: center;
  padding: 3px;
  padding-bottom: 20px;
  transition: 0.3s;
 }
 .mycard:hover {
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 }

 .myslidecontrol {
    width: 4%;
    opacity: 0.2;
    color: black;
    transition: 0.3s;
 }
  .myslidecontrol:hover {
    width: 5%;
 }
 .myvlog {
    border-left: 1px solid dodgerblue;
    padding-bottom: 40px;
    transition: 0.3s;
 }
 .myvlog:hover {
    border-left: 6px solid dodgerblue;
    background-color: #c6cfd6;
 }
</style> 
</head>
<body>
    <!-- LOADER 
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div>
     END LOADER -->

<div class="container-fluid">
    
<?php include('header.php'); ?>

<div id="wrapper">

        
<div class="row myslide">
    <div class="col-lg-12">  

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="width: 100%; height: 400px;">
          <div class="carousel-item active">
              <div class="row">
                  <div class="col-lg-12">
                      <img class="d-block w-100" src="images/slide0.jpg" alt="First slide" style="width: 100%;  ">      
                  </div>      
              </div>
          </div>
          <div class="carousel-item ">
              <div class="row ">
                  <div class="col-lg-6" style="padding: 40px; padding-top: 60px;">
                      <h1 style="padding-left: 40px;">SAMSUNG Galaxy A30S</h1>
                      <p style="font-size: 20px; padding-left: 40px;" class="show-read-more">La première nouveauté du Galaxy A51, c’est la présence d’un quadruple capteur photo à l’arrière contre trois capteurs pour le Galaxy A50 actuel. Les définitions sont aussi à la hausse. Le module principal…      
                      </p>      
                      <a href="#" class="btn btn-primary linkbutton" style=" margin-left: 40px;">Buy Now</a>      
                  </div>      
                  <div class="col-lg-6">
                      <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
                            
                  </div>      
              </div>
          </div>
          <div class="carousel-item">
              <div class="row">
                  <div class="col-lg-6">
                      <img class="d-block w-100" src="images/p1.jpg" alt="Third slide">
                  </div>
                  <div class="col-lg-6" style="padding: 40px; padding-top: 60px;">
                      <h1 style="padding-left: 40px;">SAMSUNG Galaxy A30S</h1>
                      <p style="font-size: 20px; padding-left: 40px;" class="show-read-more">La première nouveauté du Galaxy A51, c’est la présence d’un quadruple capteur photo à l’arrière contre trois capteurs pour le Galaxy A50 actuel. Les définitions sont aussi à la hausse. Le module principal…      
                      </p>      
                      <a href="#" class="btn btn-primary linkbutton" style=" margin-left: 40px;">Buy Now</a>      
                  </div>      
              </div>
          </div>

          <div class="carousel-item">
              <div class="row">
                  <div class="col-lg-6">
                      <img class="d-block w-100" src="images/p3.jpg" alt="Fourth slide">
                  </div>
                  <div class="col-lg-6" style="padding: 40px; padding-top: 60px;">
                      <h1 style="padding-left: 40px;">SAMSUNG Galaxy A30S</h1>
                      <p style="font-size: 20px; padding-left: 40px;" class="show-read-more">La première nouveauté du Galaxy A51, c’est la présence d’un quadruple capteur photo à l’arrière contre trois capteurs pour le Galaxy A50 actuel. Les définitions sont aussi à la hausse. Le module principal…      
                      </p>      
                      <a href="#" class="btn btn-primary linkbutton" style=" margin-left: 40px;">Buy Now </a>      
                  </div>      
              </div>
          </div>
        </div>
        <a class="carousel-control-prev myslidecontrol" href="#carouselExampleIndicators" role="button" data-slide="prev" >
          <img src="images/left.png" style="width: 100%;">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next myslidecontrol" href="#carouselExampleIndicators" role="button" data-slide="next">
          <img src="images/left.png" style="width: 100%;">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</div>


<hr>
<br><br>





<!--

<div align="center" style="padding-top: 10px;">
    <h1>Explore the Satina</h1>
</div>

<div class="row">


  <div class="col-lg-4 col-md-12 mb-4">

    
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-lg" role="document" >

        
        <div class="modal-content" >

       
          <div class="modal-body mb-0 p-0" >

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half" >
              <iframe style="border-radius: 50%;" class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                allowfullscreen></iframe>
            </div>

          </div>

       
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
     
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
       
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
     
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
       

      </div>
    </div>
  

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video"
        data-toggle="modal" data-target="#modal1"></a>

  </div>



  <div class="col-lg-4 col-md-6 mb-4">

   
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

      
        <div class="modal-content">

     
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wTcNtgA6gHs"
                allowfullscreen></iframe>
            </div>

          </div>

    
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
   
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
   
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
        
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
     

      </div>
    </div>
  

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg" alt="video"
        data-toggle="modal" data-target="#modal6"></a>

  </div>
 


  <div class="col-lg-4 col-md-6 mb-4">

  
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

        
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                allowfullscreen></iframe>
            </div>

          </div>

          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
           
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
      
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
           
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
      

      </div>
    </div>
 
    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" alt="video"
        data-toggle="modal" data-target="#modal4"></a>

  </div>

</div>


-->



<div class="container">
    <div align="center" style="padding-top: 10px;">
        <h1>Nos Produits & Services</h1>
        <p>SATINA distributeur officiel des produits Samsung, Lava, Oraimo, Felux en guinée </p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mycard">
                <img class="card-img-top" src="images/phone.jpg" alt="Card image" style="width:100%; margin-top: 0px;">
                <div class="card-body">
                    <h4 class="card-title">Téléphone</h4>
                    <p class="card-text show-read-more">Depuis plusieurs années dans la distribution de téléphone, accessoires et objet connectés, SATINA est devenu un leader incontestable dans le marché de la téléphonie. Faite nous part de vos besoins en téléphone, accessoires et objet connectés en gros et en détails et SATINA se fera le grand plaisir de vous satisfaire car nous sommes là pour vous. Faite nous part de vos besoins en téléphone, accessoires et objet connectés en gros et en détails et SATINA se fera le grand plaisir de vous satisfaire car nous sommes là pour vous.</p>
                    <a href="#" class="btn btn-primary stretched-link linkbutton">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mycard" >
                <img class="card-img-top" src="images/accessojries.jpg" alt="Card image" style="width:100%; margin-top: 0px;">
                <div class="card-body">
                    <h4 class="card-title">Accessoires</h4>
                    <p class="card-text show-read-more">Le monde de la téléphonie cohabite avec celui des accessoires, raison pour la quelle nous avons décidé de mètre à votre dispositions des accessoires de dernière génération .</p>
                    <a href="#" class="btn btn-primary stretched-link linkbutton">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mycard">
                <img class="card-img-top" src="images/connecte.jpg" alt="Card image" style="width:100%; margin-top: 0px;">
                <div class="card-body">
                    <h4 class="card-title">Mycash</h4>
                    <p class="card-text show-read-more">Toujours dans l'optique de satisfaire les clients et collaborateurs, nous avons mis en place un système de transfère d'argent indépendant</p>
                    <a href="#" class="btn btn-primary stretched-link linkbutton">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>  

<hr>




<div class="container">

    <div align="center" style="padding-top: 10px; padding-bottom: 10px;">
        <h1>Blog</h1>
        <p>SATINA distributeur officiel des produits Samsung, Lava, Oraimo, Felux en guinée </p>
    </div>

    <div class="row">
        <div class="col-md-6 myvlog">
            <div class="row">
                <div class="col-md-4">
                    <a href=""><img src="images/800.jpg" class="img-thumbnail" style="width: 100%;"></a>
                </div>
                <div class="col-md-8">
                <a href="">
                    <h3>Tirage « Bon de carburant »</h3>
                    <p>Ce samedi 15 Novembre 2019 a eu lieu au siège social de Satina</p>
                    <small><a href="single.html" title="" class="btn btn-success">Lire la suite</a></small>
                    <small style="float: right;">Nov 20,2019</small>
                </a>
            </div>
            </div>
        </div>

        <div class="col-md-6 myvlog">
            <div class="row">
                <div class="col-md-8">
                <a href="">
                    <h3>Appel à candidatur</h3>
                    <p>La société Satina recrute (6) Agents commerciaux</p>
                    <small><a href="single.html" title="" class="btn btn-success">Lire la suite</a></small>
                    <small style="float: right;">Nov 5,2019</small>
                </a>
            </div>
            </div>
        </div>

        <div class="col-md-6 myvlog">
            <div class="row">
                <div class="col-md-4">
                    <a href=""><img src="images/800.jpg" class="img-thumbnail" style="width: 100%;"></a>
                </div>

                <div class="col-md-8">
                <a href="">
                    <h3>Appel à candidature</h3>
                    <p>SATINA SARL recrute cinq (5) managers de zone pour conakry, boke, mamou, labe et n’zerekoré</p>
                    <small><a href="single.html" title="" class="btn btn-success">Lire la suite</a></small>
                    <small style="float: right;">Nov 4,2019</small>
                </a>
            </div>
            </div>
        </div>

        <div class="col-md-6 myvlog">
            <div class="row">
                <div class="col-md-8">
                <a href="">
                    <h3>Appel à candidature</h3>
                    <p>La société Satina Sarl recrute un responsable service après vente pour le Service après vente</p>
                    <small><a href="single.html" title="" class="btn btn-success">Lire la suite</a></small>
                    <small style="float: right;">Sep 21,2019</small>
                </a>
            </div>
            </div>
        </div>



    </div>
</div>


<br><br>








<hr>


<div class="container-fluid">

    <div class="container-fluid padding" style="width: 83%">
        <div class="row celcome text-center">
            <div class="col-12">
                <h4 class="display-4"><b> Nos partenaires</b> </h4>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">SATINA distributeur officiel des produits Samsung, Lava, Oraimo, Felux en guinée</p>
                <hr>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <img class="d-block w-100" src="images/logos/samsung.png" alt="First slide"></div>
                        <div class="col-md-2">
                            <img class="d-block w-100" src="images/logos/felux.png" alt="First slide"></div>
                        <div class="col-md-2">
                            <img class="d-block w-100" src="images/logos/lava.png" alt="First slide"></div>
                        <div class="col-md-2">
                            <img class="d-block w-100" src="images/logos/mycash.png" alt="First slide"></div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <img class="d-block w-100" src="images/logos/oraimo.png" alt="First slide"></div>
                        <div class="col-md-2">
                            <img class="d-block w-100" src="images/logos/mtn.png" alt="First slide"></div>
                        <div class="col-md-2">
                            <img class="d-block w-100" src="images/logos/orange.png" alt="First slide"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="transition: 0.3s;">
                    <img src="images/left.png" style="width: 20%;">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="transition: 0.3s;">
                    <img src="images/right.png" style="width: 20%;">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>


<?php include('footer.php') ?>
<div class="dmtop">Scroll to Top</div>
    
</div><!-- end wrapper -->




</div>









    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.collapser.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>