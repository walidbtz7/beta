<template>
 <div class="row">
                <div class="col-sm-6 form">
                    <label>Bac géneral</label>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="radio" name="flexRadioDefault">
                        <label class="form-check-label" for="oui1">
                          Oui
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="radio" name="flexRadioDefault"  checked>
                        <label class="form-check-label" for="non1">
                          Non
                        </label>
                      </div>
                      <br>
                    <br>
                    <br>
                    <div><label>Niveau d'études supérieurs</label>
                        <select class="form-control input1 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>1 an</option>
                        <option value="1">2 ans</option>
                        <option value="2">3 ans</option>
                      </select>
                    </div>
                    <br>
                    <br>
                    <br>
                    <label>Diplôme obtenue</label>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="radio" name="flexRadioDefault">
                        <label class="form-check-label" for="oui2">
                          Oui
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="radio" name="flexRadioDefault"  >
                        <label class="form-check-label" for="non2">
                          Non
                        </label>
                      </div>
                    <br>
                    <br>
                    <br>
                    <div v-if="deplome" class="form-floating">
                        <label for="floatingTextarea2">Si Oui</label>
                        <textarea class="formcontrol" placeholder="précisez-le ou les noms du diplôme et la spécialité..."  style="height: 100px; width:50%; margin-left:20px"></textarea>
                    </div>
                    <br>
                    <br>
                    <br>
                    <label>Langues</label>
                    <div class="form-check">
                        <input class="form-check-input inputbox" type="checkbox" value="" >
                        <label class="form-check-label" for="flexCheckDefault">
                            Français
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckDefault">
                            Arabe
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="checkbox" value="">
                        <label class="form-check-label" for="flexCheckDefault">
                            Arabe Dilectale
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="checkbox" value="" >
                        <label class="form-check-label" for="flexCheckDefault">
                            Autre
                        </label>
                      </div>

                </div>
                <div class="col-sm-6 form">
                    <label>Niveau de Français</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputbox" type="radio" name="inlineRadioOptions"  value="option1">
                        <label class="form-check-label" for="inlineRadio1">Débutant</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input inputbox" type="radio" name="inlineRadioOptions" value="option2">
                        <label class="form-check-label" for="inlineRadio2">intérmédiaire</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input inputbox" type="radio" name="inlineRadioOptions"  value="option2">
                        <label class="form-check-label" for="inlineRadio2">Avancé</label>
                      </div>

                    <br>
                    <br>
                    <br>

                    <label>Niveau d'Arabe</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input inputbox" type="radio" name="inlineRadioOptions"  value="option1">
                        <label class="form-check-label" for="inlineRadio1">Débutant</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input inputbox" type="radio" name="inlineRadioOptions" value="option2">
                        <label class="form-check-label" for="inlineRadio2">intérmédiaire</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input inputbox" type="radio" name="inlineRadioOptions" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Avancé</label>
                      </div>
                    <br>
                    <br>
                    <br>

                    <label class="label">Autre: </label>
                    <div>
                    <input type="text" class="form-control input16 butdton"  placeholder="Autre langue">
                    <div class="form-check">
                        <input class="form-check-input inputbox" type="radio" name="flexRadioDefault">
                        <label class="form-check-label" for="Débutant">
                            Débutant
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="radio" name="flexRadioDefault" >
                        <label class="form-check-label" for="intérmédiaire">
                            intérmédiaire
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input inputbox" type="radio" name="flexRadioDefault">
                        <label class="form-check-label" for="Avancé">
                            Avancé
                        </label>
                      </div>
                </div>
                </div>

            </div>


</template>

<script>
export default {
  data() {
    return {
        deplome : false
    };
  },
};

</script>

<style>
.form-check{
    margin-left:  106px;
}
.butdton{
    margin-bottom: 24px;
    margin-left:72px;
}
</style>
