<template>
  <form class="body_page2">
    <div v-if="step == 1"><personnel /></div>

    <div v-if="step == 2"><scolaire /></div>
        <div v-if="step == 3"><religieuse /></div>
    <div v-if="step == 4"><comReligieuses /></div>
    <div v-if="step == 5"><experience /></div>
    <div v-if="step == 6"><coran /></div>
    <div v-if="step == 7"><recherche /></div>
    <div v-if="step == 8"><futur /></div>

    <button v-if="step < 9" @click.prevent="nextStep" class="button2" type="submit">
      Suivant
    </button>
  </form>
</template>

<script>
import Personnel from './step/Personnel.vue';
export default {
  components: { Personnel },
  data() {
    return {
      total: 8,
      step: 1,
    };
  },
  methods: {
    nextStep() {
      this.step++;
      console.log(this.step);
    },
  },
};
</script>
