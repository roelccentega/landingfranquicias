@extends('layouts.app')
@section('content')


<!-- banner web -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="">
    .h1, .h2, .h3, h1, h2, h3 {
     margin-top: 0px; 
     margin-bottom: 0px; 
}
        .display-image-web{
            display: block;
        }
        .display-image-mobile{
            display: none;
        }

        @media(max-width: 768px)
        {
                .display-image-web{
                    display: none;
                }
                .display-image-mobile{
                    display: block;
                }            
        }

        .carousel-control .carousel-control-prev-icon, .carousel-control .carousel-control-next-icon, .carousel-control .icon-next, .carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
}
.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%;
    height: auto;
    width: 100%;
}
.carousel-control-next-icon {
    border: 3px solid#fff;
    padding: 15px;
    font-size: 10px
    
}
.carousel-control-prev-icon {
    border: 3px solid#fff;
    padding: 15px;

    
}
.carousel-control-next-icon, .carousel-control-prev-icon {
    display: inline-block;
    width: 3px;
    height: 30px;
 
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 100% 100%;
}
.carousel-control .carousel-control-prev-icon, .carousel-control .carousel-control-next-icon, .carousel-control .icon-next, .carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
       border-radius: 50%;
    display: inline-block;
    margin-top: -10px;
}
.carousel-indicators .active {
    width: 42px;
    height: 8px;
    margin: 0 10px;
    background-color: #36BA01;
}
.carousel-indicators li {
    display: inline-block;
    width: 42px;
    height: 8px;
    margin: 0 10px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000\9;
    background-color: rgba(0,0,0,0);
    border: 1px solid #fff;
    border-radius: 0px;
}

.carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 60px;
}
.text-left{
    text-align: left;
}
.text-top{
    top: 55%
}


@media(max-width: 768px)
{
    .carousel-control-next-icon {
    border: 0px solid transparent;
    padding: 15px;
    font-size: 10px;
        }
        .carousel-control-prev-icon {
    border: 0px solid transparent;
    padding: 15px;
    font-size: 10px;
        }
        .carousel-control .carousel-control-prev-icon, .carousel-control .carousel-control-next-icon, .carousel-control .icon-next, .carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
    right: 10px;
    border-radius: 50%;
    display: inline-block;
    margin-top: -10px;
}
.carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 40px;
}
.text-top{
    top: inherit;
}
.text-left{
    text-align:inherit;
}
}
body {
    font-family: "Inter";
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #121212;
}
</style>

     <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
  <div id="myCarousel" class="carousel slide display-image-eb" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
 
            
                    <img src="assets/images/bannerkingtecha.png" id="myImageId" alt="Franquicias">   
                    

         <div class="carousel-caption  d-md-block">
                <div class="about-one__btn-box text-center">
                        <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                </div>  
         </div>
      
    </div>
 
     <div class="item ">
      
            <img src="assets/images/web4a.png" alt="Franquicias" id="myImageId2">
      
          <div class="carousel-caption  d-md-block">
                <div class="about-one__btn-box text-center">
                        <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                </div>  
         </div>
      
    </div>
    


    <div class="item ">
    
      <img src="assets/images/web5a.png" alt="Franquicias" id="myImageId3">

    <div class="carousel-caption d-md-block text-top">
                <div class="about-one__btn-box text-left " >
                        <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                </div>  
         </div>
    </div>  
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
      <script>
        let navegador = navigator.userAgent;
        if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) || window.innerWidth <= 780) {
            document.getElementById('myImageId').src = 'assets/images/mobile1a.png';
             document.getElementById('myImageId2').src = 'assets/images/mobile2a.png';
             document.getElementById('myImageId3').src = 'assets/images/mobile3a.png';
        } else {
            console.log("No estás usando un móvil");
        }
    </script>
<!-- ENDDDDDDDDDDDDDDDDDDDDDDD -->
<!-- SLIDER MOBILE -->

<!-- <div id="carouselExample" class="carousel slide display-image-mobile">
  <div class="carousel-inner">
    <div class="carousel-item active">
 
      <img src="assets/images/mobile1.png" class="d-block w-100" alt="...">
         <div class="nuevo d-none d-md-block">
                <div class="about-one__btn-box text-center">
                        <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                </div>  
         </div>
    </div>
    <div class="carousel-item">
        <a href="{{url('/contacto')}}">
      <img src="assets/images/mobile2.png" class="d-block w-100" alt="...">
  </a>
    </div>
    <div class="carousel-item">
        <a href="{{url('/contacto')}}">
      <img src="assets/images/mobile3.png" class="d-block w-100" alt="...">
  </a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->


<!-- end banner web -->




      


<!--LOGO Start-->
        <section class="team-one display-carousel-web" id="productos" style="background-image: url({{asset('assets/images/banner-world.png')}}); ">
            <div class="container">
                <div class="section-title text-center" >
                    
                    <h2 class="titleh2">CONVIÉRTETE EN UN PARTNER GANADOR <br>  
                   <span class="font-span-title">CON CERO SOLES   </span><br><span class="font-span-title2">DE LAS MARCAS CON MEJORES BENEFICIOS</span> 
                        </h2>
                        <br>

                     
                </div>
                <div class="row">
                    
                     <!--Team One Single Start-->
                    <div class="col-xl-6 col-lg-6  wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single3 ">
                            <div class="text-center">
                                    <img src="{{asset('/assets/images/logotinbet.png')}}">  
                            </div>
                           
                          <ul class="ul-logos"> 
                            <li>    La Interfaz más atractiva y moderna </li>
                            <li>    Fácil de usar </li>
                            <li>    Gran variedad de deportes totalmente en Vivo</li>
                          </ul>
                          <div class="about-one__btn-box text-center">
                                <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                            </div>  
                        </div>
                          
                    </div>
                    <!--Team One Single End-->
                     <!--Team One Single Start-->
                    <div class="col-xl-6 col-lg-6  wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single3">
                            <div class="team-one__img-box">
                               <div class="text-center">    
                                     <img src="{{asset('/assets/images/logobetgana.png')}}">
                               </div>
                           <ul class="ul-logos">    
                                <li>    Verificación de datos, historiales Y estadísticas detalladas </li>
                                <li>Presenta un interfaz atractivo que logrará el potencial rendimiento.    </li>
                           </ul>
                            </div>
                              <div class="about-one__btn-box text-center">
                                <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                            </div>  
                        </div>
                    </div>
                    <!--Team One Single End-->
                 
                </div>
            </div>
        </section>
    <!--LOGO End-->
    <style type="text/css">
        span.font-span-title2{
            padding-top: 80px;
        }
    </style>

       
        <section class="services-one display-carousel-mobile"   style="background-image: url({{asset('assets/images/back-primera-seccion.png')}}); background-position: bottom;
    background-repeat: no-repeat;
    /* display: block; */
    width: 100%;
    height: 100%;">
            <!--Services One Start-->
            <div class="services-one__bg" >
            </div>
            <div class="container">
                <div class="section-title text-center">
                           
                    <h2 class="titleh2">CONVIÉRTETE EN UN PARTNER GANADOR <br>  
                   <span class="font-span-title">CON CERO SOLES   </span><br><span class="font-span-title2">DE LAS MARCAS CON MEJORES BENEFICIOS</span> 
                        </h2>
                        <br>
                <div class="services-one__bottom">
                    <div class="services-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                      
                        "autoplayTimeout": 2000, 
                        "navText": ["<span class=\"fas fa-angle-left\"></span>","<span class=\"fas fa-angle-right\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 3
                            },
                            "1200": {
                                "items": 3
                            }
                        }
                    }'>
                        <!--Services One Single Start-->
                        <div class="item ">
                            <div class="services-one__single team-one__single3 ">
                                <div class="services-one__img-box">
                                    <div class="services-one__img">
                                        <img src="{{asset('/assets/images/logotinbet.png')}}" alt="">
                                    </div>
                                </div>
                                
                                <ul class="ul-logos">   
                            <li>    La Interfaz más atractiva y moderna </li>
                            <li>    Fácil de usar </li>
                            <li>    Gran variedad de deportes totalmente en Vivo</li>
                          </ul>
                          <div class="about-one__btn-box text-center">
                                <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                            </div>  
                        </div>
                         
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="item">
                            <div class="services-one__single team-one__single3">
                                <div class="services-one__img-box">
                                    <div class="services-one__img">
                                        <img src="{{asset('/assets/images/logobetgana.png')}}" alt="">
                                    </div>
                                </div>
                                
                              <ul class="ul-logos"> 
                                <li>    Verificación de datos, historiales Y estadísticas detalladas </li>
                                <li>Presenta un interfaz atractivo que logrará el potencial rendimiento.    </li>
                               </ul>
                               
                                  <div class="about-one__btn-box text-center">
                                    <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                                </div>  
                          </div>
                        </div>
                        <!--Services One Single End-->
                     
                   
                     
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

<style type="">
    
    .display-images{
        display: block;
    }
    .pad2, .pad3
    {
        padding-top: 240px;}
    .pad-video{
        padding: 200px 0 100px
    }

    @media(max-width: 768px)
    {
     .display-images{
        display: none;
            }   
    .whiteh4 {
                color: #fff;
                font-style: italic;
                padding-top: 40px
            }
    .center-mobile{
        text-align: center

         }
    .pad-container{
              padding: 0 15px 0px 30px;
            }
    .title3-h2 {
    color: #fff;
    font-style: italic;
    font-size: 24px;
    font-weight: 100

        }
        .font-span-title5 {
    font-weight: 800;
    font-size: 23px;
        }
        .team-bootom {
    border: 2px solid #36BA01;
    border-radius: 15px;
    text-align: center;
    margin: 0 20px;
    padding: 4px 2px;
        }
        .team-one__name {
    font-size: 16px;
    font-weight: 500;
    line-height: 30px;
        }
        .pad-new-banner {
    padding-top: 100px;
        }
        .new-style{
            padding-right: 0px
        }
        .text-none{
            display: none
        }
     
    .team-one__single2 {
    border: 2px solid #36BA01;
    margin-bottom: 50px;
    padding: 20px 30px 30px;
    border-radius: 48px;
    background: rgba(26, 26, 26, 0.7);
        }
        .team-one__single2 p {
    color: #fff;
    font-size: 14px;
        }
        .team-one__single2 h3 {
    padding: 10px 0 15px;
    font-size: 20px;
    font-weight: 600;
        }
        .team-one-img img {
    width: 80px;
        }
        .pad-buttom {
    padding-top: 30px;
    padding-right: 0px;

        }
        .pad3{
            padding-top: 20px
        }
        .pad2{
            padding-top: 100px
        }
        .pad-title{
            padding-left: 20px
        }
        .pad-bottom{
            padding-bottom:100px;
            padding-top: 80px
        }
        .padleft{
            padding-left: 0px;
        }
        .section-title__title {
        font-size: 29px;
    text-align: center;
    line-height: 40px;
    padding: 0 30px;
        }
        .about-one {
    position: relative;
    display: block;
    padding: 20px 0 180px;
    z-index: 1;
        }

       
    }

    .banner-section{
        background-image: url({{asset('assets/images/banner-section.png')}});
    }
    @media(max-width: 768px)
    {
      .banner-section{
        background-image: url({{asset('assets/images/seccion2y3.png')}});  
        background-position: bottom;
         background-repeat: no-repeat;
          
        
      }   
    }
   
    
</style>
        <!--About One Start-->
        <section class="about-one pad banner-section" id="requerimientos">
            <div class="">
                <!-- Presentacion 1500 socios -->
                <div class="row ">
                    <div class="col-xl-6 display-carousel-web" >
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="assets/images/1500socios.png" alt="">
                                </div>
                            
                         
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 ">
                        <div class="about-one__right center-mobile">
                            <div class="section-title text-left">
                           
                                <h2 class="section-title__title">Tenemos más de <span class="socios1500"><b>1500 socios</b></span> <br> ganadores en el Perú</h2>
                            </div>
                              <div class="about-one__left display-carousel-mobile">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="assets/images/1500socios.png" alt="">
                                </div>
                            
                         
                            </div>
                        </div>
                            <h4 class="whiteh4">¿Qué necesitas para ser un <br><span><b>KINGTECH PARTNER</b></span>?</h4>
                         
                        
                            <ul class="about-one__points-2 list-unstyled ">
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/ico1.png')}}">
                                    </div>
                                    <div class="text">
                                        <p>Local propio o alquilado</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                          <img src="{{asset('assets/images/ico2.png')}}">
                                    </div>
                                    <div class="text">
                                        <p>Acceso a internet</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/ico3.png')}}">
                                    </div>
                                    <div class="text">
                                        <p class="display-carousel-web">Inversión para implementación de equipos</p>
                                        <p class="display-carousel-mobile">Inversión para implementación <br>   de equipos</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/ico4.png')}}">
                                    </div>
                                    <div class="text">
                                        <p>Caja chica</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/ico5.png')}}">
                                    </div>
                                    <div class="text">
                                        <p>Ser persona jurídica</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__btn-box">
                                <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- En presentación 1500 socios -->

                <!-- galeria de franquicias -->
                <div class="row pad-new-banner " id="#trabajo">
                    <div class="section-title text-center">
                    
                    <h2 class="title3-h2 display-carousel-web">CON KINGTECH PARTNER, <span class="font-span-title2">TU TIENDA <br>SE VERÁ DE ESTA MANERA   </span>  </h2>
                     <h2 class="title3-h2 display-carousel-mobile">CON KINGTECH PARTNER, <br>   <span class="font-span-title5"><b>TU TIENDA <br>SE VERÁ DE ESTA MANERA  </b>   </span>  </h2>
                    <br>  
                     <br>    
                    <div class="row pad-container">
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow padleft fadeInUp margin-col " data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box text-center">
                                    <div class="team-one__img">
                                        <img src="{{asset('assets/images/frame1.png')}}" alt="">
                                    </div>
                                      <div class="team-bootom text-center">
                          
                                        <h3 class="team-one__name">Personalización del establecimiento</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow padleft fadeInUp margin-col" data-wow-delay="200ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{asset('assets/images/frame2.png')}}" alt="">
                                    </div>
                                      <div class="team-bootom text-center">
                          
                                        <h3 class="team-one__name">Software atractivo y estable</h3>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow padleft fadeInUp margin-col" data-wow-delay="300ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{asset('assets/images/frame3.png')}}" alt="">
                                    </div>
                                        <div class="team-bootom text-center">
                          
                                        <h3 class="team-one__name">Zona de autoapuestas</h3>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                         <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow padleft fadeInUp margin-col" data-wow-delay="300ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{asset('assets/images/frame4.png')}}" alt="">
                                    </div>
                                       <div class="team-bootom text-center">
                          
                                        <h3 class="team-one__name">Asesoramiento / Capacitación</h3>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                         <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow padleft fadeInUp margin-col" data-wow-delay="300ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{asset('assets/images/frame5.png')}}" alt="">
                                    </div>
                                       <div class="team-bootom text-center">
                          
                                        <h3 class="team-one__name">Respaldo Financiero</h3>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                         <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow padleft fadeInUp margin-col" data-wow-delay="300ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{asset('assets/images/fachada.png')}}" alt="">
                                    </div>
                                     <div class="team-bootom text-center">
                          
                                        <h3 class="team-one__name">Fachada llamativa</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                    </div>
                </div>
                <!-- end galeria de kingtech partner -->

                <!-- Como trabajamos -->
                <div class="row pad3 new-style" id="trabajo" >


                     <div class="section-title text-center">
                    
                    <h2 class="section-title__title pad-title">¿CÓMO TRABAJAMOS?
                        </h2>
                        <br>
                        <P class="text-work text-none">En Kingtech Perú estamos comprometidos con nuestros socios, por lo que no estarás solo, te apoyamos en la planificación, <br> construcción y crecimiento de tu negocio.</P>
                </div>
                <style type="">
                    .como-back{
                        background-image: url({{asset('assets/images/.png')}})
                    }
                    @media(max-width: 768px)
                    {
                          .como-back{
                        background-image: url({{asset('assets/images/back.png')}})
                    }
                    }
                </style>
                <div class="">
                    
                  <div class="row pad-container como-back" style="    ;">
                                      <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single2">
                             <div class="team-one-img text-center">
                                <div>
                                    <img src="{{asset('assets/images/nos-reunimos.png')}}">
                                </div>
                               <h3>Nos reunimos</h3>
                               <p>Resuelve tus dudas desde el primer día. Nuestros asesores lo harán posible. ¡El primer contacto es importante!</p>
                           </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                     <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single2">
                            <div class="team-one-img  text-center">
                                <div class=".team-one-img2">
                                    <img src="{{asset('assets/images/te-impulsamos.png')}}">
                                </div>
                                <h3>Te Impulsamos</h3>
                               <p>Te apoyamos en cada fase de nuestra asociación. Desde la planificación hasta las operaciones en curso, no lo dejaremos solo.</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                     <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single2">
                            <div class="team-one-img text-center">
                                <div>
                                    <img src="{{asset('assets/images/crecemos.png')}}">     
                                </div>
                                
                                <h3>Crecemos</h3>
                               <p>Nos importa tu crecimiento. Juntos lograremos alcanzar todas tus metas comerciales y garantizar tus ingresos.</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                  </div>
                </div> 
                  </div>
             
             
                    <br>    
                        <div class="col-md-12 text-center pad-buttom">
                            <div class="about-one__btn-box">
                                <a href="{{url('/contacto')}}" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                            </div>  
                        </div>  
                
                </div> 
            
                <!-- End como trabajamos -->
                

<!-- video caroisel -->



              
</div>
<style type="">
    .text-right {
        text-align: right;
    }
    .pad-video2{
        padding: 0px 0px 150px
    }
    .about-two__video-link {
    position: absolute;
    top: 155px;

     left: 25% ;
    z-index: 2;
}
.owl-carousel .owl-item img {
    display:block;
     width: none; 
}
.owl-carousel .owl-item img {
    display: block;
    width: none;
    width: 100%;
}

video{
    border:3px solid green;
    border-radius: 35px
}
@media(max-width: 768px)
{
    .pad-video {
    padding: 150px 0 1px;
        }
}
</style>
            <div class="container pad-video display-image-web" id="testimonios">
                    <div class="section-title text-center">
                    
                    <h2 class="section-title__title">TESTIMONIOS DE NUESTROS PARTNER
                        </h2>
                        <br>
                        <p class="text-work">Conoce la experiencias de nuestros clientes</p>
                    </div>
                  <div class="row align-self-center">
                   
                    
                   
                    <div class="col-xl-12 col-lg-12 text-center wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="team--">

                            <video height="auto" width="35%" controls autoplay poster="{{asset('images/influencerimages.png')}}">
                                <source src="https://tinbet.la/lobaton-promo.mp4" type="video/mp4">
                              
                            </video>
                                    
                        </div>
                    </div>
                 

                  
                   </div>   
                     <br>    
                        <div class="col-md-12 text-center pad-buttom">
                            <div class="about-one__btn-box">
                                <a href="http://127.0.0.1:8000/contacto" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                            </div>  
                        </div>  
                

                </div>
                 <div class="container pad-video display-image-mobile" id="testimonios">
                    <div class="section-title text-center">
                    
                    <h2 class="section-title__title">TESTIMONIOS DE NUESTROS PARTNER
                        </h2>
                        <br>
                        <p class="text-work">Conoce la experiencias de nuestros clientes</p>
                    </div>
                  <div class="row align-self-center">
                   
                    
                   
                    <div class="col-xl-12 col-lg-12 text-center wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="team--">

                            <video height="auto" width="80%" controls autoplay poster="{{asset('images/influencerimages.png')}}">
                                <source src="https://tinbet.la/lobaton-promo.mp4" type="video/mp4">
                              
                            </video>
                                    
                        </div>
                    </div>
                 

                  
                   </div>   
                     <br>    
                        <div class="col-md-12 text-center pad-buttom">
                            <div class="about-one__btn-box">
                                <a href="http://127.0.0.1:8000/contacto" class="about-one__btn thm-btn">QUIERO SER SOCIO</a>
                            </div>  
                        </div>  
                

                </div>
    </section>

      

@endsection