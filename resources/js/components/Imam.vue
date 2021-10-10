<template>
  <form>
    <div class="body_page2">
      <div v-if="step == 1"><personnel /></div>

      <div v-if="step == 2"><scolaire /></div>
      <div v-if="step == 3"><comReligieuses /></div>
      <div v-if="step == 4"><experience /></div>
      <div v-if="step == 5"><coran /></div>
      <div v-if="step == 6"><recherche /></div>
      <div v-if="step == 7"><futur /></div>
    </div>
    <div v-if="step == 8"><fin /></div>

    <button
      v-if="step < 8"
      @click.prevent="nextStep"
      class="button2"
      type="submit"
    >
      Suivant
    </button>
  </form>
</template>

<script>
import Personnel from "./step/Personnel.vue";
export default {
  components: { Personnel },
  data() {
    return {
      total: 8,
      step: 1,
      formData: {
        /* Renseignement Personnel */
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",

        /* Formation scolaire */
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",

        /* Formation religieuse */
        nom: "",
        nom: "",

        /* Informations complémentaires sur la formation religieuses */
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",

        /* Expérience dans l’enseignement des enfants/ados */
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",

        /* Niveau de Coran  */
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",

        /* Information concernant votre recherche d’établissement */
        nom: "",

        /* Dans le cadre d’une activité rémunérée ou non rémunérée par la futur Mosquée */
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
        nom: "",
      },
    };
  },
  methods: {
    nextStep() {
      if (this.step < 9) {
        this.step++;
      }
    },
  },
};
</script>
