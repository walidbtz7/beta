<template>
<div class="row">
                <div class="col-sm-6 form">
                    <label>Bac géneral</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="oui1">
                        <label class="form-check-label" for="oui1">
                          Oui
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="non1" checked>
                        <label class="form-check-label" for="non1">
                          Non
                        </label>
                      </div>
                      <br>
                    <br>
                    <br>
                    <div><label>Niveau d'études supérieurs</label>
                        <select class="form-control input7 form-select form-select-lg mb-3"  aria-label=".form-select-lg example">
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
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="oui2">
                        <label class="form-check-label" for="oui2">
                          Oui
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="non2" checked>
                        <label class="form-check-label" for="non2">
                          Non
                        </label>
                      </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-floating">
                        <label for="floatingTextarea2">Si Oui</label>
                        <textarea class="formcontrol" placeholder="précisez-le ou les noms du diplôme et la spécialité..." id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <br>
                    <br>
                    <br>
                    <label>Langues</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Français">
                        <label class="form-check-label" for="flexCheckDefault">
                            Français
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Arabe">
                        <label class="form-check-label" for="flexCheckDefault">
                            Arabe
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Arabe Dilectale">
                        <label class="form-check-label" for="flexCheckDefault">
                            Arabe Dilectale
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Autre">
                        <label class="form-check-label" for="flexCheckDefault">
                            Autre
                        </label>
                      </div>

                </div>
                <div class="col-sm-6 form">
                    <label>Niveau de Français</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Débutant</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">intérmédiaire</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Avancé</label>
                      </div>

                    <br>
                    <br>
                    <br>

                    <label>Niveau d'Arabe</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Débutant</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">intérmédiaire</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Avancé</label>
                      </div>
                    <br>
                    <br>
                    <br>

                    <label>Autre: </label>
                    <div>
                    <input type="password" class="form-control input16" id="exampleInputPassword1" placeholder="Autre langue">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Débutant">
                        <label class="form-check-label" for="Débutant">
                            Débutant
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="intérmédiaire">
                        <label class="form-check-label" for="intérmédiaire">
                            intérmédiaire
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Avancé">
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

}
</script>

<style>

</style>
