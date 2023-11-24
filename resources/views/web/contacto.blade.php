@extends('layouts.app')
@section('content')
<style type="text/css">
   .pad-bottom{
    font-size: 14px;
    padding: 8px 16px
}
.pad-contact{
    padding: 50px 0
}
.get-free-quote__form-input-box input[type="text"], .get-free-quote__form-input-box input[type="email"] {
    height: 60px;
    width: 100%;
    border: none;
    border: 1px solid green;
    background-color: transparent;
    padding-left: 30px;
    padding-right: 30px;
    outline: none;
    font-size: 13px;
    color: var(--gardon-gray);
    display: block;
    font-weight: 400;
    border-radius:55px;
}
.get-free-quote__form-input-box textarea {
    font-size: 13px;
    color: var(--gardon-gray);
    font-weight: 400;
    height: 130px;
    width: 100%;
    background-color: transparent;
    padding: 20px 30px 30px;
    border: none;
    outline: none;
    border: 1px solid green;
    margin-bottom: 0px;
    border-radius: 55px;
}
.font-contact{
    color: #fff;
    font-size: 42px;
    font-family: 'Inter';
    font-style: italic;
    font-weight: 700
}

</style>

<!-- tab form -->
<style type="">


    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
      
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;  
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
     
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
      
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;  
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }
input {
    padding: 10px;
     width: 10%; 
    font-size: 17px;

    border: 1px solid #aaaaaa;
}
h2.font-span-title5 {
    font-weight: 800;
    font-size: 36px;
    color: #fff;
    font-family: inter;
    font-style: italic;
        }
@media(max-width: 768px)
{
    .pad-container {
    padding: 0 25px;
}
h2.font-span-title5 {
    font-weight: 800;
    font-size: 25px;
    color: #fff;
    font-family: inter;
    font-style: italic;
        }
        .pad-contact{
    padding: 50px 25px
}

}
</style>
<div class="display-carousel-web">
  <img src="assets/images/bannercontactoletras2.png">
  <!--Page Header End-->
</div>

<div class="display-carousel-mobile">
  <img src="assets/images/bannercontactM.png">
  <!--Page Header End-->
</div>

 <div class="row pad-contact">
  <div class="col-lg-12 text-center">
      <h2 class="font-span-title5">Información Personal  </h2> 
  </div>
    <div class="col-lg-12 text-center ">
             <script>!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:"1201143",hash:"8ee53b8aa4614692d259af0c69fb022b",locale:"es"}),a[o+m]=a[o+m]||function(f,k){a[o+m].f=(a[o+m].f||[]).concat([[f,k]])}}(window,0,"amo_forms_","params","load","loaded");</script><script id="amoforms_script_1201143" async="async" charset="utf-8" src="https://forms.kommo.com/forms/assets/js/amoforms.js?1700673362"></script>
             
           </div>  
 </div>
 <!--
<section class="pad-contact" id="contacto">
    <div class="pad-container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title ">
                    <h3 class="font-contact">Informaci贸n Personal</h3>


                </div>
                <div class="get-free-quote__form-box">
                    <form action=""
                    class="get-free-quote__form contact-form-validated" novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="get-free-quote__form-input-box">
                                <input type="text" placeholder="Nombres" name="name" id="name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="get-free-quote__form-input-box">
                                <input type="text" placeholder="Apellidos" name="lastname" id="lastname">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="get-free-quote__form-input-box">
                                <input type="text" placeholder="DNI" name="dni" id="dni">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="get-free-quote__form-input-box">
                                <input type="text" placeholder="Celular" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="col-xl-12">
                           <div class="get-free-quote__form-input-box">
                            <input type="email" placeholder="Correo" name="email" id="email">
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4">
                        <div class="get-free-quote__form-input-box">
                            <input type="text" placeholder="Departamento" name="depart" id="depart">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="get-free-quote__form-input-box">
                            <input type="text" placeholder="Provincia" name="provin" id="provin">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="get-free-quote__form-input-box">
                            <input type="text" placeholder="Distrito" name="distric" id="distric">
                        </div>
                    </div>
                </div>
                <br>    <br>    
                <div class="row">
                    <div class="col-xl-12 text-center">


                        <button type="submit" class="thm-btn pad-bottom get-free-quote__form-btn">QUIERO SER UN PARTNER GANADOR</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="result"></div>
    </div>
</div>
</div>

</div>
</div>
</section>
-->

@endsection