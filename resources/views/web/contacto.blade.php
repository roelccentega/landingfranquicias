@extends('layouts.app')
@section('content')
<style type="text/css">
   .pad-bottom{
    font-size: 14px;
    padding: 8px 16px
}
.pad-contact{
    padding: 120px 100px
}
.get-free-quote__form-input-box input[type="text"], .get-free-quote__form-input-box input[type="email"], .get-free-quote__form-input-box input[type="file"] {
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
    height: 350px;
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
@media(max-width: 768px)
{
    .pad-container {
    padding: 0 25px;
}
.pad-contact{
    padding: 120px 20px
}
}
</style>




</style>

<style>


input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
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
  background-color: #36BA01;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
      border-radius: 17px;

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
input[type='checkbox'] { 
    padding: 10px;
    width: 10%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
}
.titulo1{
    color:#fff;
    font-family: 'Inter';
    font-weight: 700;
    font-style: italic;
    font-size: 36px
}
.name-label{
    color: #fff;
     font-family: 'Inter';
     font-style: none;
     font-size: 23px
}
.titulo2{
      color:#fff;
    font-family: 'Inter';
    font-weight: 700;
    font-style: italic;
    font-size: 24px
}
.titulo3{
      color:var(--gardon-gray);
    font-family: 'Inter';
    font-weight: 700;
    font-style: italic;
    font-size: px
}
.pad-20{
    padding-top: 30px;
    
}
.check >input:checked  {
background-color: red;
}
@media(max-width: 768px)
{
    button {
    background-color: #36BA01;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 14px;
    border-radius: 17px;
    cursor: pointer;
}
}
</style>
<body>
<div class="display-carousel-web">
  <img src="assets/images/bannercontactoletras.png">
  <!--Page Header End-->
</div>

<div class="display-carousel-mobile">
  <img src="assets/images/bannercontactomobile.png">
  <!--Page Header End-->
</div>

<div class="pad-container pad-contact">
    
<form id="regForm" action="/action_page.php">
  
  <div class="tab">
  
   <div class="row">
    <div class="col-lg-12">
    <h3 class="titulo1"> Información Personal   </h3>   
    <br>    

    </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="get-free-quote__form-input-box">
                                <input type="text" placeholder="Nombres" oninput="this.className = ''" name="scales1" id="name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="get-free-quote__form-input-box">
                                <input type="text" placeholder="Apellidos" oninput="this.className = ''" name="lastname" id="lastname">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="get-free-quote__form-input-box">
                                <input type="text" placeholder="DNI" oninput="this.className = ''" name="dni" id="dni">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="get-free-quote__form-input-box">
                                <input type="text" placeholder="Celular" oninput="this.className = ''" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="col-xl-12">
                           <div class="get-free-quote__form-input-box">
                            <input type="email" placeholder="Correo" oninput="this.className = ''" name="email" id="email">
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4">
                        <div class="get-free-quote__form-input-box">
                            <input type="text" placeholder="Departamento" oninput="this.className = ''" name="depart" id="depart">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="get-free-quote__form-input-box">
                            <input type="text" placeholder="Provincia" oninput="this.className = ''" name="provin" id="provin">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="get-free-quote__form-input-box">
                            <input type="text" placeholder="Distrito" oninput="this.className = ''" name="distric" id="distric">
                        </div>
                    </div>
                </div>
  </div>
  <div class="tab">
    <div class="col-lg-12">
        <h2 class="titulo1">  Preguntas específicas  </h2>
        <br><br>   
    </div>
    <div class="col-lg-12 check ">

        <h3 class="titulo2">  Cuentas con local  </h3>   
            <br>    
          <input type="checkbox" id="scales" oninput="this.className = ''" name="scales1" checked />
        <label class="name-label" for="Propio">Propio</label>
         <input type="checkbox" id="scales" oninput="this.className = ''" name="scales2" checked /> 
        <label class="name-label" for="Alquilado">Alquilado</label>
         <input type="checkbox" id="scales" oninput="this.className = ''" name="scales3" checked />
        <label class="name-label" for="No tengo Actualmente">No tengo Actualmente</label>
    </div>
    <br>    

     <div class="col-lg-12 pad-20">
        <h3 class="titulo2">  Tienes Acceso a Internet  </h3>   
            <br>    
          <input type="checkbox" id="scales" oninput="this.className = ''" name="scales1" checked />
        <label class="name-label" for="Propio">Si</label>
         <input type="checkbox" id="scales" oninput="this.className = ''" name="scales2" checked /> 
        <label class="name-label" for="Alquilado">No</label>
         
    </div>
    

     <div class="col-lg-12 pad-20">
        <h3 class="titulo2">  ¿Cuánto presupuesto de inversión tienes para la implementación de equipos?  </h3>   
            <br>    
          <input type="checkbox" id="scales" oninput="this.className = ''" name="scales1" checked />
        <label class="name-label" for="Propio">S/0 - S/5,000</label>
         <input type="checkbox" id="scales" oninput="this.className = ''" name="scales2" checked /> 
        <label class="name-label" for="Alquilado">S/5,000 - S/15,000 </label>
        <input type="checkbox" id="scales" oninput="this.className = ''" name="scales2" checked /> 
        <label class="name-label" for="Alquilado">S/15,000 - a más  </label>
         
    </div>
     <div class="col-lg-12 pad-20">
        <h3 class="titulo2">  ¿Eres una persona jurídica?: Régimen MYPE tributario o apertura nueva RUC - Sunat?</h3>   
            <br>    
          <input type="checkbox" id="scales" oninput="this.className = ''" name="scales1" checked />
        <label class="name-label" for="Propio">Si</label>
         <input type="checkbox" id="scales" oninput="this.className = ''" name="scales2" checked /> 
        <label class="name-label" for="Alquilado">No </label>
        
         
    </div>

   

</div>
                   
  <div class="tab">
    <div class="row"> 
    <div class="col-lg-6">
    <h3 class="titulo1">   Adjunte fotos del local </h3>
    <br>  
   <div class="col-lg-12">
    <div class="get-free-quote__form-input-box"> 
     <span class="titulo3">Adjuntar Foto de Fachada o Frontis  </span>
<input type="file" id="avatar" value="Fachada" />
</div>
       
   </div>
<br>
 <div class="col-lg-12">
        <div class="get-free-quote__form-input-box"> 
    <span class="titulo3">Adjuntar Foto de Fachada o Frontis 1 </span>
<input type="file" id="avatar" value="Fachada" />
     </div>
 </div>
<br>
<div class="col-lg-12">
        <div class="get-free-quote__form-input-box"> 
    <span class="titulo3">Adjuntar Foto de Fachada o Frontis 2</span>
<input type="file" id="avatar" value="Fachada" />
</div>
</div>
       
    </div>
    <div class="col-lg-6">   
        <h3 class="titulo1">   Dejar su mensaje </h3>
        <br>   <br>
        <div class="get-free-quote__form-input-box"> 
            <textarea name="w3review" placeholder="Escribir Mensaje" oninput="this.className = ''" rows="12" cols="100"></textarea>
        </div>
    </div>  
    </div>


  </div>
  
  <div style="overflow:auto; text-align: center;padding-top: 50px ">
    <div >
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">RETROCEDER</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">QUIERO SER UN PARTNER GANADOR</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  
  </div>
</form>
</div>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "ENVIAR";
  } else {
    document.getElementById("nextBtn").innerHTML = "QUIERO SER UN PARTNER GANADOR";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

@endsection