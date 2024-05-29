@extends('layouts.app_account') @section('content') <section class="scheduler-1">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 mb-4">
        <h1 class="text-center">Cuéntanos más de tí y lo que sanarás</h1>
      </div>
      <div class="col-lg-9">
        <p class="text-center">Los videos son doblados a varios idiomas. Elige tu idioma preferido y el de respaldo.
        Se te pide llenar tus síntomas para que recuerdes lo que dejaste atrás.</p>
      </div>
      <div class="col-lg-9 bg-white rounded form-c">
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="idiomaPrincipal">Idioma Principal *</label>
              <div class="input-icon">
                <i class="fas fa-language"></i>
                <input type="text" class="form-control" id="idiomaPrincipal" placeholder="Escribe tu idioma principal">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="idiomaVideo">Idioma de Video *</label>
              <div class="input-icon">
                <i class="fas fa-video"></i>
                <select id="idiomaVideo" class="custom-select">
                  <option selected>Selecciona una opción</option>
                  <option value="1">Español</option>
                  <option value="2">Inglés</option>
                  <option value="3">Francés</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="edad">Edad *</label>
              <div class="input-icon">
                <i class="fas fa-calendar-alt"></i>
                <input type="number" class="form-control" id="edad" placeholder="##">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="enfoquePrincipal">Enfoque Principal *</label>
              <div class="input-icon">
                <i class="fas fa-bullseye"></i>
                <select id="enfoquePrincipal" class="custom-select">
                  <option selected>Selecciona una opción</option>
                  <option value="1">Mental</option>
                  <option value="2">Emocional</option>
                  <option value="3">Físico</option>
                  <option value="4">Emocional y Físico</option>
                  <option value="5">Mental y Emocional</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6 pr-0 pl-0">
              <label for="sintomas">Síntomas *</label>
              <div class="input-icon sintoma">
                <i class="fas fa-notes-medical"></i>
                    <input name='tags' placeholder='' id="tags-input">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="idiomaPrincipal">Ciudad *</label>
              <div class="input-icon">
                <i class="fas fa-flag"></i>
                <input type="text" class="form-control" id="idiomaPrincipal" placeholder="Escribe donde vives">
              </div>
            </div>
          </div>
          
          <div class="text-right" style="    margin-top: 2rem;
    border-top: 1px solid #C199E0;
    padding-top: 2rem;
    border-top-style: dashed;">
            <button type="submit" class="btn btn-dark button-b disabled d-inline" style="width: 250px"><span style="color: #fff">Guarda</span> tu información <i class="ml-4 fa-solid fa-arrow-up"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section></section>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.5/tagify.min.js"></script>
<script>

  $(document).ready(function() {
    // Select the input element
        var input = document.querySelector('#tags-input');

        // Initialize Tagify on the input element
        var tagify = new Tagify(input);

  });
</script> @stop