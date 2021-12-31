<template>
    <div>
    <Nav />
    <section class="container-fluid">

        <div class="row">
            <span class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 bg-dark">
                   <h4 class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center ">EMPLACEMENT</h4>
               <p class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">   
                   <strong>
                         N°11 Rue Aziz Bellal , 5ème étage Maarif, Casablanca <br>
                         Contacts : +212 711 936 735 / +212 620 446 100
                   </strong>
                </p>    
                  <h4 class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center ">HORAIRES </h4>
               <p class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">   
                   <strong>
                         Lundi-vendredi ..... 8h30 - 18h00 <br>
                         Samedi ..... 8h30 - 13h30 <br>
                         Dimanche ..... Fermé
                   </strong>
                </p>

                <aside class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <h4 class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center ">NOUS JOINDRE VIA</h4>
                  <Social /> 
                </aside>
            </span>
            <span class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12 " :style="backImg">
                <div class="container">

               
                   <div class="row align-items-center">
                       <h4>Choisissez votre statut pour obtenir un service </h4>
                       <br><br> 
                      <button class="btn btn-outline-light col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-on:click="particular">
                     Vous êtes un particulier ? 
                     </button>
                       <br> <br> <br><br><br>
                     <button class="btn btn-outline-light col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-on:click="entreprise">
                     Vous êtes une entreprise ? 
                    </button>
                       
                     <br><br>
                     <article class=" col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-if="testParticular">
                      <ParticularForm />
                     </article>

                     <article class=" col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-if="testEntreprise">
                     <EntrepriseForm />
                     </article>

             
                   
                    </div>

                </div>

            </span>
        </div>

    </section>
    <Footer />
   

    </div>
</template>

<script>

  import Nav  from "./../Layouts/Nav";
  import Footer  from "./../Layouts/Footer";
  import Social  from "./../Others/Social";
  import ParticularForm  from "./ParticularForm";
  import EntrepriseForm  from "./EntrepriseForm";


    export default {
        
        name:"Contact",
        components:{
            Nav,
            Footer,
            Social,
            ParticularForm,
            EntrepriseForm,
             
        },
        
       props: {
           img: {
               type: String,
               default:"Nan"
           },
       },
          data() {
           return {
               backImg:"Background-image: url("+this.img+");"+"Background-repeat: No-repeat;"+"background-size: cover;",
               testParticular:false,
               testEntreprise:false,

           }
       },
       methods: {
           particular(){
               this.testParticular=true;
               this.testEntreprise=false;
           },
           entreprise(){
                this.testEntreprise=true;
                this.testParticular=false;
           }
       },
    }
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Arimo&family=Montserrat:wght@300&family=Roboto:wght@900&display=swap");
h4{
    color: white;
    font-family: "Arimo", sans-serif;
    padding-top: 5px;
    padding-bottom: 3px;
}
strong{
    color: rgb(226, 226, 226);
    font-family: "Arimo", sans-serif;
}
aside{
    margin-top: 8px;

}
button{
    font-size: 20px;
    font-weight: 600;
}



</style>