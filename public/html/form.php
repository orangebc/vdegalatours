<!-- Form -->
<main class="main">
    <h2 class="base-fullTitle">Cotizador</h2>
    <div class="container">
        <form action="php/sendForm.php" method="post">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="mainName">Nombre:</label>
                    <input type="text" class="form-control" id="mainName" name="mainName" placeholder="Ingresa tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="mainEmail">Email:</label>
                    <input type="email" class="form-control" id="mainEmail" name="mainEmail" placeholder="email@tudominio.com" required>
                </div>
                <div class="form-group">
                    <label for="mainPhone">Teléfono:</label>
                    <input type="tel" class="form-control" id="mainPhone" name="mainPhone" placeholder="Teléfono a 10 digitos" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 nopadding">
                <div class="col-xs-12 col-sm-6">
                    <div class="fom-group">
                        <label for="mainCountry">País:</label>
                        <input type="text" class="form-control" id="mainCountry" name="mainCountry" placeholder="Ingresa tu país">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="fom-group">
                        <label for="mainCity">Ciudad:</label>
                        <input type="text" class="form-control" id="mainCity" name="mainCity" placeholder="Ingresa tu ciudad">
                    </div>
                </div>
                <div class="col-xs-12 nopadding move-top">
                    <div class="col-xs-12 col-sm-6">
                        <div class="fom-group">
                            <label>Fecha inicio de viaje:</label>
                            <input type="date" class="form-control" name="mainDateStart">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="fom-group">
                            <label>Fecha regreso de viaje:</label>
                            <input type="date" class="form-control" name="mainDateReturn">
                        </div>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 move-top">
                <div class="radio move-top">
                    <label for="">Es Usted:</label>
                    <label class="radio-inline move-left move-right">
                        <input type="radio" name="mainAreYou" value="Agencia"> Agencia
                    </label>
                    <label class="radio-inline move-left">
                        <input type="radio" name="mainAreYou" value="Particular"> Particular
                    </label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12">
            <h5 class="main__interested">Interesado en:</h5>
        </div>
          <div class="col-xs-12 col-sm-4">
              <div class="fom-group">
                <label for="mainNumberOfPersons"># De Personas:</label>
                <input type="number" class="form-control" id="mainNumberOfPersons" name="mainNumberOf" placeholder="Número de Personas (Niños y Adultos)">
              </div>
          </div>
          <div class="col-xs-12 col-sm-4">
              <div class="fom-group">
                <label for="mainCircuits">Circuitos:</label>
                <select class="form-control" name="mainCircuits" id="mainCircuits">
                    <option value="" selected>Escoge un Circuito</option>
                    <option value="Mexico Grand Tours">Mexico Grand Tour</option>
                    <option value="Ubran Excitement">Urban Excitement</option>
                    <option value="Tesoros Coloniales">Tesoros Coloniales</option>
                    <option value="Aventura en Barrancas del Cobre">Aventura en Barrancas del Cobre</option>
                    <option value="Aventura en la Huasteca">Aventura en la Huasteca</option>
                    <option value="Recorrido por el Mar de Cortés">Recorrido por el Mar de Cortés</option>
                    <option value="Ruta de Cortés">Ruta de Cortés</option>
                    <option value="Descubre la Mariposa Monarca">Descubre la Mariposa Monarca</option>
                    <option value="Pueblos Mágicos Grand Tour">Pueblos Mágicos Grand Tour</option>
                    <option value="Ruta Pueblos Mágicos de Chiapas">Ruta Pueblos Mágicos de Chiapas</option>
                    <option value="Mundo Maya">Mundo Maya</option>
                    <option value="Camino Maya Colonial I">Camino Maya Colonial I</option>
                    <option value="Camino Maya Colonial II">Camino Maya Colonial II</option>
                </select>
              </div>
          </div>
          <div class="col-xs-12 col-sm-4">
              <label for="mainModulars">Modulares:</label>
                <select class="form-control" name="mainModulars" id="mainModulars">
                    <option value="" selected>Escoge un Modular</option>
                    <option value="Corazón de México">Corazón de México</option>
                    <option value="Mundo Maya">Mundo Maya</option>
                    <option value="Ruta de los Dioses">Ruta de los Dioses</option>
                    <option value="Tesoros Coloniales">Tesoros Coloniales</option>
                    <option value="Jalisco es México">Jalisco es México</option>
                    <option value="México Norte">México Norte</option>
                </select>
          </div>
          <div class="col-xs-12 col-sm-6">
            <label for="mainObservations">Observaciones:</label>
            <textarea class="form-control" name="mainObservations" rows="3" id="mainObservations">¿Tienes algún comentario?</textarea>
          </div>
          <div class="col-xs-12 col-sm-6">
            <label for="mainTrip">Tu viaje a la medida:</label>
            <textarea class="form-control" id="mainTrip" name="mainTrip" rows="3">Escríbenos tu plan de viaje y nos pondremos en contacto contigo.</textarea>
          </div>
          <div class="col-xs-12 col-sm-12">
              <h5 class="main__interested move-top">¿Cómo te enteraste de nosotros?:</h5>
          </div>
          <div class="col-xs-12 col-sm-12 text-center">
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Google"> Google
              </label>
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Medios Impresos"> Medios Impresos
              </label>
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Feria"> Feria
              </label>
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Redes Sociales"> Redes Sociales
              </label>
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Recomendación"> Recomendación
              </label>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 text-center">
              <label class="checkbox">
                <input type="checkbox" id="formAccepted" value="option1"> <strong>Acepto Términos y Condiciones</strong>
              </label>
              <input type="submit" id="formSubmitBtn" name="submit" value="Enviar" disabled>
          </div>
        </form>
  </div>
</main>
<!-- /form -->
