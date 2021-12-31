<template>
    <div>
        <Nav />

        <div class="container-fluid" :style="bgImage">
            <div class="row" >
                
                <section class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12" >
                                  <div class="row"  >
                             <div  v-for="item in data" :key="item.id"  >
                            
                         <article class="col-xl-7 col-lg-7 col-md-7 col-sm-10 col-10" v-if="(item.chambre===search.chambre ||search.chambre===''||search.chambre==null) && (item.salon===search.salon ||search.salon===''||search.salon==null)&& (item.city===search.city ||search.city===''||search.city==null)&& (item.cuisine===search.cuisine ||search.cuisine===''||search.cuisine==null) && (item.douche===search.douche ||search.douche===''||search.douche==null) ">               
                        <figure
                            class="
                                col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12
                            "
                        >
                            <img :src="urlPhoto + item.photo" alt="" />
                        </figure>
                        <legend
                            class="
                                col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12
                            "
                        >
                            <h3>APPARTEMENT   DISPONIBLE <br> À  {{ item.city }}</h3>
                        </legend>
                        <blockquote
                            class="
                                col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12
                            "
                        >
                            <strong>Description : <br></strong
                            >{{ item.description.slice(0,50) }}...
                        </blockquote>
                        <span class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <button class="btn btn-outline-light" v-on:click="infos(item)" data-bs-toggle="modal" data-bs-target="#infoItem" >
                                Plus d'informations
                            </button>
                        </span>

                        <hr />
                        <h4
                            class="
                                col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12
                                d-flex
                                justify-content-center
                            "
                        >
                            À {{ item.mode }} / {{item.price}} dh
                        </h4>
                    
                    </article>
                    </div>
                    </div>
                     
                    
                    
                    
                </section>
                <!-- Modal -->
<div class="modal fade" id="infoItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title text-light" id="staticBackdropLabel">Appartemenent à {{modalInfo.mode}} / {{modalInfo.price}} dh</h5>
      </div>
      <div class="modal-body">
        <p class="text-danger"><strong>code appartement</strong> : {{modalInfo.id}}</p>
        <p><strong>Situé à  </strong> : {{modalInfo.city}}</p>
        <p><strong>Nombre salon  </strong> : {{modalInfo.salon}}</p>
        <p><strong>Nombre chambre </strong> : {{modalInfo.chambre}}</p>
        <p><strong>Nombre douche </strong> : {{modalInfo.douche}}</p>
        <p><strong>Nombre cuisine </strong> : {{modalInfo.cuisine}}</p>
        <p><strong>Description </strong> : {{modalInfo.description}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
                <section class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                   <h3 class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center text-light"> RECHERCHE</h3>
                   <label for="city" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-light ">VILLE</label>
                   <input type="text" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " name="city" v-model="search.city" placeholder="ex :casablanca">
                   <label for="salon" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-light ">SALON</label>
                   <input type="number" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " name="salon" v-model="search.salon" placeholder="ex : 1">
                   <label for="chambre" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-light ">CHAMBRE</label>
                   <input type="number" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " name="chambre" v-model="search.chambre" placeholder="ex : 3">
                   <label for="douche" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-light ">DOUCHE</label>
                   <input type="number" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " name="douche" v-model="search.douche" placeholder="ex : 2">
                   <label for="cuisine" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-light ">CUISINE</label>
                   <input type="number" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " name="cuisine" v-model="search.cuisine" placeholder="ex : 1">
                  
                 <br>
                   <p class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-light  bg-warning">
                       NB : Vous n'êtes pas obligé de renseigner tous les champs pour une recherche .
                       À chaque renseignement de nouvelle valeur la mise à jour sera automatique ainsi  vous pouvez faire toutes combinaisons pour arriver à votre résultat souhaité. 
                    
                   </p>
                </section>

            </div>
        </div>
        <Footer />
    </div>
</template>

<script>
import Nav from "./../Layouts/Nav";
import Footer from "./../Layouts/Footer";

export default {
    name: "House",
    components: {
        Nav,
        Footer,
    },
    props: {
        data: {
            type: Object,
            default: {},
        },
        img:{
            type:String,
            default:""
        }
    },
    data() {
        return {
            urlPhoto: "https://apis.ma/storage/",
            bgImage:"Background-image: url("+this.img+");"+"Background-repeat: No-repeat;"+"background-size: cover;",
            search:{
                city:null,
                salon:null,
                chambre:null,
                douche:null,
                cuisine:null,
                
            },
            modalInfo:{
                id:null,
                city:null,
                salon:null,
                chambre:null,
                douche:null,
                cuisine:null,
                price:null,
                mode:null,
                description:null,
                
            }
        };
    },
    methods:{
        infos(item){
           this.modalInfo.id=item.id;
           this.modalInfo.city=item.city;
           this.modalInfo.salon=item.salon;
           this.modalInfo.description=item.description;
           this.modalInfo.chambre=item.chambre;
           this.modalInfo.douche=item.douche;
           this.modalInfo.mode=item.mode;
           this.modalInfo.cuisine=item.cuisine;
           this.modalInfo.price=item.price;
   
        }
    },
 
 
};
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Arimo&family=Montserrat:wght@300&family=Roboto:wght@900&display=swap");
article{
    color: white;
    margin-top: 5px;
    margin-bottom: 5px;
    background-color: #353536;
    border-radius: 7px;
   
    span{
        margin-bottom: 3px;
        color:white;
    }
    img{    
        padding-top: 5px;
        width: 100%;
    }
    hr{
        color:rgb(128, 128, 128);
        margin-bottom: 2px;
    }
}

section:first-child{
    
    overflow-y: scroll;
    
    height: 100vh;
}
section:last-child{
    
    margin-top: 2px;
    
    background-color: rgb(255, 255, 255,0.2);
   
    h3{
        font-family: "Arimo", sans-serif;
    }
    label{
        text-transform: uppercase;
        font-weight: 600;
        
    }
   
    input{
        border-radius: 0px;
        background-color: rgb(255, 255, 255,0.7);
        &:focus{
            box-shadow: 0px 0px 0px transparent;
        }
    }

    p{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }


}
</style>
