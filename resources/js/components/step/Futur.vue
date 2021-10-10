<template>
  <div class="row">
    <div class="col-sm-6 form">
      <label
        >Possibilité de joindre une recommandation de Mosquée ou professeur ici
        (pièce jointe)</label
      >
      <label
        >Êtes vous disponible pour donner des allocutions entre certaines heures
        de prières :</label
      >
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          style="width: 32px"
          type="radio"
          name="inlineRadioOptions"
          id="Occasionnellement"
          value="option1"
        />
        <label class="form-check-label" for="Occasionnellement"
          >Occasionnellement</label
        >
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          style="width: 32px"
          type="radio"
          name="inlineRadioOptions"
          id="Fréquemment"
          value="option2"
        />
        <label class="form-check-label" for="Fréquemment">Fréquemment</label>
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          style="width: 32px"
          type="radio"
          name="inlineRadioOptions"
          id="2 fois par semaines"
          value="option2"
        />
        <label class="form-check-label" for="2 fois par semaines"
          >2 fois par semaines</label
        >
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          style="width: 32px"
          type="radio"
          name="inlineRadioOptions"
          id="Aucune idée pour le moment"
          value="option3"
        />
        <label class="form-check-label" for="Aucune idée pour le moment"
          >Aucune idée pour le moment</label
        >
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          style="width: 32px"
          type="radio"
          name="inlineRadioOptions"
          id="Uniquement lors d’évènement dans à la Mosquée"
          value="option4"
        />
        <label
          class="form-check-label"
          for="Uniquement lors d’évènement dans à la Mosquée"
          >Uniquement lors d’évènement dans à la Mosquée</label
        >
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          style="width: 32px"
          type="radio"
          name="inlineRadioOptions"
          id="Indisponible"
          value="option5"
        />
        <label class="form-check-label" for="Indisponible">Indisponible</label>
      </div>
      <br />
      <br />
      <br />
      <div>
        <label
          >Précisez si vous voulez le faire mais de manière rémunérée ou
          non</label
        >
        <div class="form-check">
          <input
            class="form-check-input"
            style="width: 32px"
            type="radio"
            name="flexRadioDefault3"
            id="Au moyen d’une rémunération"
          />
          <label class="form-check-label" for="Au moyen d’une rémunération"
            >Au moyen d’une rémunération</label
          >
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            style="width: 32px"
            type="radio"
            name="flexRadioDefault3"
            id="Sans rémunération"
          />
          <label class="form-check-label" for="Sans rémunération"
            >Sans rémunération</label
          >
        </div>
        <br />
        <br />
        <br />
        <label
          >Remarque particulière à préciser sur la Mosquée recherchée :</label
        >
        <div class="form-floating">
          <textarea
            class="formcontrol"
            placeholder="Remarques d’ordre organisationnelle, préférences, choses à éviter…"
            id="floatingTextarea1"
            style="height: 100px"
          ></textarea>
        </div>
      </div>
    </div>
    <div class="col-sm-6 form">
      <label
        >Êtes-vous disponibilité pour un entretien avec un membre de la
        plate-forme ou un cadre de</label
      >
      <label>Mosquée intéressé par votre profil ?</label>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          style="width: 32px"
          type="radio"
          name="flexRadioDefault4"
          id="Oui si oui précisez vos disponibilités "
          value="option1"
        />
        <label
          class="form-check-label"
          for="Oui si oui précisez vos disponibilités "
          >Oui si oui précisez vos disponibilités
        </label>
        <input type="text" class="form-control input7" placeholder="Nom" />
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          style="width: 32px"
          type="radio"
          name="flexRadioDefault4"
          id="Non uniquement échange par mail pour le moment"
          value="option2"
        />
        <label
          class="form-check-label"
          for="Non uniquement échange par mail pour le moment"
          >Non uniquement échange par mail pour le moment
        </label>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>
