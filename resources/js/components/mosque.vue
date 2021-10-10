<template>
  <form>
    <div class="row">
      <div class="col-sm-6 form">
        <label>Nom de l’association de la Mosquée </label
        ><input
          type="text"
          v-model="formData.nom"
          class="form-control input1"
          placeholder="Nom de l’association de la Mosquée"
          required
        /><br /><br /><br /><label>Nom et Prénom du Président </label>
        <input
          type="text"
          v-model="formData.président"
          class="form-control input2"
          placeholder="Nom et Prénom du Président"
          required
        /><br /><br /><br /><label>Adresse de la Mosquée </label
        ><input
          type="text"
          v-model="formData.adresse"
          class="form-control input3"
          placeholder="Adresse de la Mosquée"
          required
        />
      </div>
      <div class="col-sm-6 form">
        <label>Année de création </label
        ><input
          v-model="formData.année"
          type="text"
          class="form-control input4"
          placeholder="Année de création"
          required
        /><br /><br /><br /><label>Capacité d’index :</label
        ><input
          type="text"
          v-model="formData.capacité"
          class="form-control input5"
          placeholder="Capacité d’index"
          required
        /><br /><br /><br /><label>Cours dispensé dans la Mosquée :</label
        ><input
          type="text"
          v-model="formData.cours"
          class="form-control input6"
          placeholder="Cours dispensé dans la Mosquée"
          required
        />
      </div>
    </div>
    <button @click.prevent="sendEmail" class="button2" type="submit">Envoyer</button>
  </form>
</template>
<script>
export default {
  data() {
    return {
    formData: {
        nom: "",
        président: "",
        adresse: "",
        capacité:"",
        année: "",
        cours:"",
      },
    };
  },
  name: "mosque",

  methods: {

    sendEmail(){
        axios.post("/api/mosque", this.formData)
               .then((response) => {
            console.log("successfully !", response);
          })
          .catch((error) => console.log(error.response.data));

    },

    },

};
</script>


<style>
</style>
