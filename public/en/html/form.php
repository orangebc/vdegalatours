<!-- Form -->
<main class="main">
    <h2 class="base-fullTitle">Ask for a Quote</h2>
    <div class="container">
        <form action="php/sendForm.php" method="post">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="mainName">Name:</label>
                    <input type="text" class="form-control" id="mainName" name="mainName" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="mainEmail">Email:</label>
                    <input type="email" class="form-control" id="mainEmail" name="mainEmail" placeholder="mail@yourdomain.com" required>
                </div>
                <div class="form-group">
                    <label for="mainPhone">Phone:</label>
                    <input type="tel" class="form-control" id="mainPhone" name="mainPhone" placeholder="Phone a 10 digits" maxlength="10" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 nopadding">
                <div class="col-xs-12 col-sm-6">
                    <div class="fom-group">
                        <label for="mainCountry">Country:</label>
                        <input type="text" class="form-control" id="mainCountry" name="mainCountry" placeholder="Enter your country">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="fom-group">
                        <label for="mainCity">City:</label>
                        <input type="text" class="form-control" id="mainCity" name="mainCity" placeholder="Enter your city">
                    </div>
                </div>
                <div class="col-xs-12 nopadding move-top">
                    <div class="col-xs-12 col-sm-6">
                        <div class="fom-group">
                            <label>Travel Start Date:</label>
                            <input type="date" class="form-control" name="mainDateStart">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="fom-group">
                            <label>Travel Return Date:</label>
                            <input type="date" class="form-control" name="mainDateReturn">
                        </div>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 move-top">
                <div class="radio move-top">
                    <label for="">You Are:</label>
                    <label class="radio-inline move-left move-right">
                        <input type="radio" name="mainAreYou" value="Agencia"> Agency
                    </label>
                    <label class="radio-inline move-left">
                        <input type="radio" name="mainAreYou" value="Particular"> Particular
                    </label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12">
            <h5 class="main__interested">Interested in:</h5>
        </div>
          <div class="col-xs-12 col-sm-4">
              <div class="fom-group">
                <label for="mainNumberOfPersons"># Of Persons:</label>
                <input type="number" class="form-control" id="mainNumberOfPersons" name="mainNumberOf" placeholder="Número de Personas (Niños y Adultos)">
              </div>
          </div>
          <div class="col-xs-12 col-sm-4">
              <div class="fom-group">
                <label for="mainCircuits">Circuits:</label>
                <select class="form-control" name="mainCircuits" id="mainCircuits">
                    <option value="" selected>Pick a Circuit</option>
                    <option value="Mundo Maya">Mayan World</option>
                    <option value="Mexico Grand Tours">Mexico Grand Tours</option>
                    <option value="Urban Excitement">Urban Excitement</option>
                    <option value="Tesoros Coloniales">Colonial Treasures</option>
                    <option value="Aventura en Barrancas del Cobre">Adventure at Copper Canyon</option>
                    <option value="Aventura en la Huasteca">Adventure at la Huasteca</option>
                    <option value="Recorrido por el Mar de Cortés">Tour through the  "Cortés" sea</option>
                    <option value="Ruta de Cortés">Cortes Route</option>
                    <option value="Descubre la Mariposa Monarca">Discover the Monarch Butterfly</option>
                    <option value="Pueblos Mágicos Grand Tour">Magic Towns Grand Tour</option>
                    <option value="Ruta Pueblos Mágicos de Chiapas">Chiapas Magic Towns Route</option>
                    <option value="Camino Maya Colonial I">Mayan and Colonial Route I</option>
                    <option value="Camino Maya Colonial II">Mayan and Colonial Route II</option>
                </select>
              </div>
          </div>
          <div class="col-xs-12 col-sm-4">
              <label for="mainModulars">Modulars:</label>
                <select class="form-control" name="mainModulars" id="mainModulars">
                    <option value="" selected>Pick a Modular</option>
                    <option value="Corazón de México">Mexico's heart</option>
                    <option value="Mundo Maya">Mayan world</option>
                    <option value="Ruta de los Dioses">The Path of Gods</option>
                    <option value="Tesoros Coloniales">Colonial Treasures</option>
                    <option value="Jalisco es México">Jalisco is Mexico</option>
                    <option value="México Norte">North of Mexico</option>
                </select>
          </div>
          <div class="col-xs-12 col-sm-6">
            <label for="mainObservations">Observations:</label>
            <textarea class="form-control" name="mainObservations" rows="3" id="mainObservations">Do you have any comment?</textarea>
          </div>
          <div class="col-xs-12 col-sm-6">
            <label for="mainTrip">Your tailor made trip:</label>
            <textarea class="form-control" id="mainTrip" name="mainTrip" rows="3">Write your travel plan and we’ll contact you soon.</textarea>
          </div>
          <div class="col-xs-12 col-sm-12">
              <h5 class="main__interested move-top">How did you hear about us?:</h5>
          </div>
          <div class="col-xs-12 col-sm-12 text-center">
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Google"> Google
              </label>
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Medios Impresos"> Printed Media
              </label>
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Feria"> Fair
              </label>
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Redes Sociales"> Social media
              </label>
              <label class="checkbox-inline move-right">
                <input type="checkbox" name="mainWhereDidYouFindUs[]" value="Recomendación"> Recommendation
              </label>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 text-center">
              <label class="checkbox">
                <input type="checkbox" id="formAccepted" value="option1"> <strong>i accept the terms & conditions</strong>
              </label>
              <input type="submit" id="formSubmitBtn" name="submit" value="Send" disabled>
          </div>
        </form>
  </div>
</main>
<!-- /form -->
