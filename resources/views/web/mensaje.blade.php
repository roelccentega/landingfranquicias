@extends('layouts.app')
@section('content')

<style type="">
    .style-border{
        padding: 220px 0;
        background: #fff
    }
    .pad-bottom{
        padding: 180px 0
    }
    .title-form{
        color: #fff;
        font-size: 28px;
        font-weight: 700;
        font-style: italic;
    }
</style>
        <!--Pricing One Start-->
      
        <!--Pricing One End-->
        <section class="container">
                <div class="section-title text-center pad-bottom" >
                            
                              <div class="col-xl-12 col-lg-8 text-center" >

                                        <div class="pricing-one__single" style="background-image: url({{asset('assets/images/mensaje.png')}});">
                                            <div class="pricing-one__single-inner"  >
                                                    
                                                <div class="pricing-one__price-box text-center">
                                                    <h3 class="title-form" style="color: #fff, font"> ¡GRACIAS POR COMPARTIR <br>  TUS DATOS!</h3>
                                                    <br>    
                                                    <p style="font-size: 20px; font-style: italic"> NOS ESTAREMOS <br> COMUNICANDO CONTIGO</p>
                                           
                                                </div>
                                               
                                             <div class="about-one__btn-box">
                                                <a href="{{url('/contacto')}}" class="about-one__btn thm-btn"><img src="{{asset('assets/images/whatsapp.png')}}" width="27px"> WhatsApp</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>   
                </div>   
        </section>


@endsection