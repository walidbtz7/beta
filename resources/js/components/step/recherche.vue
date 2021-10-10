<template>
       <div class="row">
                <div class="col-sm-6 form">
                    <div><input class="form-check-input" style="width:23px" type="checkbox" value="" id="Rémunér">
                    <label class="form-check-label" for="flexCheckDefault">Rémunér</label>
                    </div>
                    <label>Si Oui, Statut souhaité à cocher :</label>
                      <div>
                        <input class="form-check-input" style="width:23px" type="checkbox" value="" id="Contractuel">
                        <label class="form-check-label" for="flexCheckDefault">Contractuel</label>
                      </div>
                    <br>
                    <label>Si oui précisé si c’est pour une demande permanente ou temporaire :</label>
                      <div >
                        <input class="form-check-input" style="width:55px" type="radio" name="flexRadioDefault3" id="Permanent">
                        <label class="form-check-label" for="Permanent">Permanent (type CDI)</label>
                      </div>
                      <div >
                        <input class="form-check-input" style="width:55px" type="radio" name="flexRadioDefault3" id="Temporaire" checked>
                        <label class="form-check-label" for="Permanent">Temporaire</label>
                        <input type="text" class="form-control input12" style="width:220px" placeholder="Précisez le temps">
                      </div>
                      <div >
                        <input class="form-check-input" style="width:55px" type="radio" name="flexRadioDefault3" id="Uniquement le remboursement de frais kilométrique">
                        <label class="form-check-label" for="Uniquement le remboursement de frais kilométrique">Uniquement le remboursement de frais kilométrique</label>
                      </div>
                    <br>
                    <div><input class="form-check-input"  style="width:55px" type="checkbox" value="" id="non rémunér">
                        <label class="form-check-label" for="flexCheckDefault"> Si c’est pour une activité non rémunérée :</label>
                        </div>
                        <label>Combien de temps seriez-vous disponible pour cette activité d’Imama :</label>
                        <div >
                            <input class="form-check-input"  style="width:55px" type="radio" name="flexRadioDefault2" id="Toute la semaine">
                            <label class="form-check-label" for="Toute la semaine">Toute la semaine</label>
                          </div>
                          <div >
                            <input class="form-check-input" style="width:55px" type="radio" name="flexRadioDefault2" id="Seulement le soir">
                            <label class="form-check-label" for="Seulement le soir">Seulement le soir</label>
                          </div>
                          <div >
                            <input class="form-check-input" style="width:55px" type="radio" name="flexRadioDefault2" id="Seulement certains jours ">
                            <label class="form-check-label" for="Seulement certains jours ">Seulement certains jours </label>
                            <input type="text" class="form-control input13" style="margin-left:22px ; width:180px"  placeholder="précisez les moments">
                          </div>
                          <div >
                            <input class="form-check-input" style="width:55px" type="radio" name="flexRadioDefault2" id="Seulement le Vendredi">
                            <label class="form-check-label" for="Seulement le Vendredi">Seulement le Vendredi</label>
                          </div>
                          <div >
                            <input class="form-check-input"  style="width:55px" type="radio" name="flexRadioDefault2" id="Prières quotidiennes">
                            <label class="form-check-label" for="Prières quotidiennes">Prières quotidiennes</label>
                          </div>
                    <br>
                        <label>Expérience Sociale avec la jeunesse :</label>
                    <label>Précisez ici si vous avez une expérience particulière avec les jeunes :</label>
                    <label>Travaux réalisés, année de réalisation:</label>
                    <div class="form-floating">
                        <textarea class="formcontrol" placeholder="Travaux réalisés, année de réalisation" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="col-sm-6 form">
                    <label>Donner 3 références de professeur, Imam, Cheikh avec qui vous avez étudié si possible :</label>
                    <div class="form-floating">
                        <textarea class="formcontrol" placeholder="précisez-le ou les noms du diplôme et la spécialité..." id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>

                    <br>
                    <label>3 noms de mosquées avec leur coordonnée si possible si vous avez déjà eu une expérience dans l’Imama auparavant.</label>
                    <div class="form-floating">
                        <textarea class="formcontrol" placeholder="précisez-le ou les noms du diplôme et la spécialité..." id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>

                    <br>
                    <label>Possibilité de joindre une recommandation de Mosquée ou professeur ici (pièce jointe)</label>
                    <label>Êtes vous disponible pour donner des allocutions entre certaines heures de prières :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" style="width:55px" type="radio" name="inlineRadioOptions" id="Occasionnellement" value="option1">
                        <label class="form-check-label" for="Occasionnellement">Occasionnellement</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" style="width:55px" type="radio" name="inlineRadioOptions" id="Fréquemment" value="option2">
                        <label class="form-check-label" for="Fréquemment">Fréquemment</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" style="width:55px" type="radio" name="inlineRadioOptions" id="2 fois par semaines" value="option2">
                        <label class="form-check-label" for="2 fois par semaines">2 fois par semaines</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" style="width:55px" type="radio" name="inlineRadioOptions" id="Aucune idée pour le moment" value="option3">
                        <label class="form-check-label" for="Aucune idée pour le moment">Aucune idée pour le moment</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" style="width:55px" type="radio" name="inlineRadioOptions" id="Uniquement lors d’évènement dans à la Mosquée" value="option4">
                        <label class="form-check-label" for="Uniquement lors d’évènement dans à la Mosquée">Uniquement lors d’évènement dans à la Mosquée</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" style="width:55px" type="radio" name="inlineRadioOptions" id="Indisponible" value="option5">
                        <label class="form-check-label" for="Indisponible">Indisponible</label>
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
