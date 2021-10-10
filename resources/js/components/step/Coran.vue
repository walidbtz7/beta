<template>
<div>
     <div class="row">
                <div class="col-sm-6 form">
                    <div><label>Mémorisation</label>
                        <select class="form-control inputt form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>moins de 5 hizb</option>
                        <option value="1">entre 5 et 10 hizb</option>
                        <option value="1">entre 10 et 20 hizb</option>
                        <option value="1">entre 20 et 30 hizb</option>
                        <option value="1">entre 30 et 40 hizb</option>
                        <option value="1">entre 40 et 50 hizb</option>
                        <option value="1">entre 50 et 60 hizb</option>
                      </select>
                    </div>
                    <br>
                    <br>
                    <br>
                    <label>Niveau de tajwid</label>
                      <div class="form-check">
                        <input class="form-check-input" style="width:55px;" type="radio" name="flexRadioDefault1" id="débutant1">
                        <label class="form-check-label" for="débutant1">
                            Débutant
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" style="width:55px;" type="radio" name="flexRadioDefault1" id="intermédiaire1" checked>
                        <label class="form-check-label" for="intermédiaire1">
                            Intermédiaire
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" style="width:55px;" type="radio" name="flexRadioDefault1" id="avancé1" checked>
                        <label class="form-check-label" for="avancé1">
                            Avancé
                        </label>
                      </div>
                    <br>
                    <br>
                    <br>



                </div>
                <div class="col-sm-6 form">
                    <div class="col-sm-6 form">
                    <div class="form-floating">
                        <label>Maitrise des sciences du Coran:</label>
                        <label for="floatingTextarea2">Ouvrages étudiés:</label>
                        <textarea class="formcontrol" placeholder="Ouvrages étudiés" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="col-sm-6 form">
                <div class="form-floating">
                    <label>Maitrise des Sciences du Hadith:</label>
                    <label for="floatingTextarea2">Ouvrages de Hadith étudiés:</label>
                    <textarea class="formcontrol" placeholder="Ouvrages de Hadith étudiés" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
            </div>
                    <br>
                    <br>
                    <br>
                    <label class="bottop">Connaissance de la Jurisprudence islamique :</label>
                      <div class="form-check">
                        <input class="form-check-input" style="width:55px;" type="radio" name="flexRadioDefault2" id="débutant2">
                        <label class="form-check-label" for="débutant2">
                            Débutant
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" style="width:55px;" type="radio" name="flexRadioDefault2" id="intermédiaire2" checked>
                        <label class="form-check-label" for="intermédiaire2">
                            Intermédiaire
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" style="width:55px;" type="radio" name="flexRadioDefault2" id="avancé2" checked>
                        <label class="form-check-label" for="avancé2">
                            Avancé
                        </label>
                      </div>
                </div>
                  <label>Mobilité géographique :</label>
                    <div class="form-check">
                        <input class="form-check-input" style="width:55px;" type="checkbox" value="" id="Mobilité géographique">
                        <label class="form-check-label" for="flexCheckDefault">
                            Mobilité géographique
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" style="width:55px;" type="checkbox" value="" id="Par Région recherchée (par ordre de préférence)">
                        <label class="form-check-label" for="flexCheckDefault">
                            Par Région recherchée (par ordre de préférence) :
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" style="width:55px;"  type="checkbox" value="" id="Par Villes (précisez par ordre les choix recherchés)">
                        <label class="form-check-label" for="flexCheckDefault">
                            Par Villes (précisez par ordre les choix recherchés)
                        </label>
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
.inputt{
    width: 40%;
}
.bottop{
    margin-top: 27px;
    margin-left: 15px;
}
</style>
