<template>
    <div>
    <Nav />
        <section class="container-fluid " id="search" >
            <!-- Serach a question-->
            <div class="row">
                <h2 class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">Besoin d'aide ? </h2>
                <input type="text" v-model="search" class="form-control col-xl-8 col-lg-8 col-md-8 col-sm-8 col-10" placeholder="Trouver les réponses à vos questions ( Mots clés ) ">

            </div>
            <!-- List of  questions-->
        
          <div class="row" >
             
    
                 <div  v-for="item in sourceFaq" :key="item.id">

                  <article  class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " v-if="item.title.includes(search) ||item.content.includes(search)"   >
                     <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-9">
                           <h4  class="d-flex justify-content-center">{{ item.title }}</h4>  
                        <span class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-start">
                                 {{ item.content }}
                         </span>
                     </div>
                  </article>
                    
                </div>
                 <Nothing v-if="testNothing"></Nothing>
           

          </div>

        </section>
   
<Footer />
    </div>
</template>

<script>

  import Nav  from "./../Layouts/Nav";
  import Footer  from "./../Layouts/Footer";
   import Nothing  from "./../Others/Nothing";

    export default {
       
        name:"Contact",
    
        components:{
            Nav,
            Footer,
            Nothing
        
        
        },  
           data() {
            return {

                sourceFaq:[
                    {
                        title:" Je veux un service mais je me trouve loin de Casablanca ?",
                        content:"Nous offrons des services hors casablanca sans problème peu importe votre localisation géographique au maroc.",
                        
                    },
                     {
                        title:"J'ai déjà eu des problèmes avec des agences précédentes .",
                        content:"Nous sommes désolé du désagrement , c'est avec beaucoups de joie que nous vous informons que notre entreprise est basée sur la confiance et la garantie total",
                       
                    },
                    {
                        title:"Combien de temps avant le début du contrat ?",
                        content:"Dès la soumission de votre demande , votre dossier est en traitement et cela prend au minimum entre 4 jours et 7 jours pour le début du service",
                        
                    },
                    {
                        title:" En cas de non satisfaction , quelle alternative pour moi ?",
                        content:" Nous enverrons une autre personne pour le service correspondant , vous n'aurez pas à vous souciez de frais supplémentaire . c'est gratuit",
                        
                    },
                    {
                        title:" Comment puis-je vous contacter pour un service ?",
                        content:"Vous pouvez nous contacter nos contacts en cliquant sur le boutton contact du haut de la page précédente . il est aussi possible de nous joindre via Nos cannaux sociaux ",
                       
                    },
        
                ],
                search:'',
                testNothing:false,  // var for testing if show component Nothing or not 
          
            }
        },
        computed: {
            testNothing(){
                let countTest=0;
                
                this.sourceFaq.forEach(element => {
                    if (element.title.includes(this.search) ||element.content.includes(this.search)) {
                          return countTest=1;
                    }
                });
               
               if (countTest==1) {
                   return false
               }else{
                   return true
               }
               

            }
        },
       
    
     
       

//


    }
</script>

<style lang="scss" scoped>
@import url('https://fonts.googleapis.com/css2?family=Arimo&family=Montserrat:wght@300&family=Roboto:wght@900&display=swap');

#search{
    margin-top: 10px;
    margin-bottom: 10px;
    h2{
        font-family: 'Arimo', sans-serif;
        color: rgb(189, 189, 189);
    }
    input{
        
        
        &:focus{
            box-shadow: 0px 0px 0px transparent;
        }
        &:hover{
            border:solid 1px rgb(97, 56, 97, 0.8);
            

        }
    }
  
    article div{
       margin-top: 7px;
       padding-bottom: 3px;
       padding-top: 3px;
       background-color: rgba(37, 35, 37, 0.8);  
       color: white; 
       font-family: 'Roboto', sans-serif;
       margin-bottom: 7px;
       border-left: solid 2px rgba(37, 35, 37, 0.8);
       border-right: solid 2px rgba(37, 35, 37, 0.8);
       
    }
    span{
        display: block;
        background-color: white;
        color: rgba(37, 35, 37, 0.8);
        font-family: 'Times New Roman', Times, serif;
    }
    
}


</style>