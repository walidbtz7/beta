<template>
  <div class="row">
                <div class="col-sm-6 form">
                    <label>Vous-avez une expérience dans l'imama?</label>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="radio" name="flexRadioDefault" id="oui3">
                        <label class="form-check-label" for="oui3">
                          Oui
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="radio" name="flexRadioDefault" id="non3" checked>
                        <label class="form-check-label" for="non3">
                          Non
                        </label>
                      </div>
                      <br>
                    <br>
                    <br>
                    <div><label>Si oui combien de temps</label>
                        <select class="form-control input1 form-select form-select-lg mb-3"  aria-label=".form-select-lg example">
                        <option selected>moin de 5 ans</option>
                        <option value="1">Entre 10 et 12 ans</option>
                        <option value="2">Entre 20 et plus</option>
                      </select>
                    </div>
                    <br>
                    <br>
                    <br>
                    <label>Au sujet de votre formation religieuse, avez-vous passé un cursus dans :</label>
                    <label>Langues</label>
                    <div class=" check2">
                        <input class="form-check-input inputbox" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckDefault">
                         Université(s) :
                        </label>
                        <input  class="form-control input13 " style="width:40%" placeholder="Université">

                      </div>
                     <div class=" check2">
                        <input class="form-check-input inputbox" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckDefault">
                         Institut(s) :
                        </label>
                        <input  class="form-control input13 " style="width:40%" placeholder="Université">

                      </div>
                          <div class=" check2">
                        <input class="form-check-input inputbox" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckDefault">
                         Etablissement(s) d'enseignement particulier :
                        </label>
                        <input  class="form-control input13 " style="width:40%" placeholder="Université">

                      </div>
                           <div class=" check2">
                        <label class="form-check-label" for="flexCheckDefault">
                        cursus d'enseignement dans une ou de s mosquée :
                        </label>
                        <input  class="form-control input13 " style="width:40%" placeholder="Université">

                      </div>


                </div>
                <div class="col-sm-6 form">
                 <div class=" check2">
                        <input class="form-check-input inputbox" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckDefault">
                         Université(s) :
                        </label>
                        <input  class="form-control input13 " style="width:40%" placeholder="Université">

                     </div>
                    <div class=" check2">
                        <input class="form-check-input inputbox" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckDefault">
                         Institut(s) :
                        </label>
                        <input  class="form-control input13 " style="width:40%" placeholder="Université">

                      </div>
                          <div class=" check2">
                        <label class="form-check-label" for="flexCheckDefault">
                         Etablissement(s) d'enseignement particulier :
                        </label>
                        <input  class="form-control input13 " style="width:40%" placeholder="Université">

                      </div>


            </div>
            </div>

</template>

<script>
export default {
  created () {
  },

}
</script>

<style>
.form-check{
    margin-left:  106px;
}
.butdton{
    margin-bottom: 24px;
    margin-left:72px;
}
.check2{
    margin-left:4px;
}
</style>
