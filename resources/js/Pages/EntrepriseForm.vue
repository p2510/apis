<template>
    <div>
      <br>
        <form  method="post" class="container" @click.prevent="submit">
        
        <p class="alert alert-success" role="alert" v-if="$page.props.flash.success">
          {{$page.props.flash.success}}
        </p>
            <div class="row">
               <p>
                   <label for="name">Nom de l'entreprise</label>
                   <input type="text" name="name" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.name">
                    <strong class="text-danger" v-if="$page.props.errors.name">{{JSON.stringify($page.props.errors.name).slice(2,-2)}}</strong>
               </p>
               <p>
                   <label for="adresse">Adresse local</label>
                   <input type="text" name="adresse" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.adresse">
                   <strong class="text-danger" v-if="$page.props.errors.adresse">{{JSON.stringify($page.props.errors.adresse).slice(2,-2)}}</strong>
               </p>
               <p>
                   <label for="tel">Téléphone</label>
                   <input type="text" name="tel" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.tel">
                   <strong class="text-danger" v-if="$page.props.errors.tel">{{JSON.stringify($page.props.errors.tel).slice(2,-2)}}</strong>
               </p>
               <p>
                   <label for="choice">Quel(s) service(s) désiriez vous ? </label>
                   <select name="choice" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.choice">
                      <option value="acheter un appartement">Acheter un appartement</option>
                      <option value="Louer un appartement">Louer un appartement</option>
                      <option value="Femme de ménages">Femme de ménages</option>
                      <option value="Nounou">Nounou</option>
                      <option value="Syndic">Syndic</option>
                      <option value="Gardien">Gardien</option>
                      <option value="Enseignant">Enseignant</option>
                      <option value="Ouvrier">Ouvrier</option>

                   </select>
                   <strong class="text-danger" v-if="$page.props.errors.choice">{{JSON.stringify($page.props.errors.choice).slice(2,-2)}}</strong>
                
               </p>
             
              <p>
                <input type="submit" value="Soumettre" class="col-lg-4 col-xl-4 col-md-4 col-sm-4 col-4  btn btn-success">
             </p>
            </div>

        </form>
    </div>
</template>

<script>
    export default {
        name:"EntrepriseForm",
       
        data() {
            return {
                form:{
                    name:null,
                    adresse:null,
                    tel:null,
                    choice:"acheter un appartement"
                }
            }
        },
        methods: {
            submit(){
                    this.$inertia.post("/Contact/storeEntreprise",this.form);
                 
                    
            }
        },
    }
</script>

<style lang="scss" scoped>

input{
    border: solid 1px rgb(97, 56, 97, 0.8);
    &:focus{
        border-color: solid 2px white;
        border-radius: 15px;
        transition: border-color ease-in-out 500ms;
        transition: border-radius ease-in-out 500ms;
        box-shadow: 0px 0px 0px transparent;
        
    }


}
label{

    color: white;
    
}
</style>