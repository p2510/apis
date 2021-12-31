<template>
    <div>
        <App />
             
      <br>
        <form @submit.prevent="submit" method="post"  class="container" >
               
            <div class="row">
                  <input type="hidden" name="id"   v-model="form.id" >
               <p>
                   <label for="name">Nom du vendeur</label>
                   <input type="text" name="name"  class="form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12"  v-model="form.name" >
                   <strong class="text-danger " v-if="$page.props.errors.name">{{ JSON.stringify($page.props.errors.name).slice(2,-2)}}</strong>
                  
               </p>
               <p>
                   <label for="city">Ville</label>
                   <input type="text" name="city" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.city" >
                   <strong class="text-danger "   v-if="$page.props.errors.city">{{ JSON.stringify($page.props.errors.city).slice(2,-2)}}</strong>
                  
               </p>
               <p>
                   <label for="tel">Téléphone </label>
                   <input type="text" name="tel"   class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.tel" >
                   <strong class="text-danger " v-if="$page.props.errors.tel">{{ JSON.stringify($page.props.errors.tel).slice(2,-2)}}</strong>
                   
               </p>
                  <p>
                   <label for="chambre">Nombre de chambre</label>
                   <input type="number" name="chambre" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.chambre" >
                   <strong class="text-danger " v-if="$page.props.errors.chambre">{{ JSON.stringify($page.props.errors.chambre).slice(2,-2)}}</strong>
                   
                </p>
                   <p>
                   <label for="salon">Nombre de salon</label>
                   <input type="number" name="salon" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.salon" >
                   <strong class="text-danger " v-if="$page.props.errors.salon">{{ JSON.stringify($page.props.errors.salon).slice(2,-2)}}</strong>
                   
               </p>
                 <p>
                   <label for="douche">Nombre de douche</label>
                   <input type="number" name="douche" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.douche" >
                   <strong class="text-danger " v-if="$page.props.errors.douche">{{ JSON.stringify($page.props.errors.douche).slice(2,-2)}}</strong>
                   
               </p>
                 <p>
                   <label for="cuisine">Nombre de cuisine</label>
                   <input type="number" name="cuisine" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.cuisine" >
                   <strong class="text-danger " v-if="$page.props.errors.cuisine">{{ JSON.stringify($page.props.errors.cuisine).slice(2,-2)}}</strong>
                   
               </p>
                <p>
                   <label for="price">Prix </label>
                   <input type="number" name="price" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.price" >
                   <strong class="text-danger " v-if="$page.props.errors.price">{{ JSON.stringify($page.props.errors.price).slice(2,-2)}}</strong>
                   
               </p>
               <p>
                   <label for="mode">Mode de distribution </label>
                   <select name="mode" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12" v-model="form.mode">
                      <option value="VENDRE">VENDRE</option>
                      <option value="LOUER">LOUER</option>
                      

                   </select>
                   <strong class="text-danger " v-if="$page.props.errors.mode">{{ JSON.stringify($page.props.errors.mode).slice(2,-2)}}</strong>
                  
                
               </p>
                 <p>
          
                  <label for="description">Description</label>
                  <textarea name="description" minlength="50" class=" form-control col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12"  cols="30" rows="10" v-model="form.description"></textarea>
                  <strong class="text-danger " v-if="$page.props.errors.description">{{ JSON.stringify($page.props.errors.description).slice(2,-2)}}</strong>

               </p>
              
              <p>
                <input type="submit" value="Mise à jour"  class="col-lg-4 col-xl-4 col-md-4 col-sm-4 col-4  btn btn-success">
             </p>
            </div>

        </form>
    </div>
</template>

<script>
import App from "./Layouts/App";
export default {
    name: "Login",

    components: {
        App,
    },
    props: {
        data: {
            type: Object,
            default: {}
        },
    },
    data() {
        return {
            form:{
                id:this.data.id,
                name:this.data.name,
                city:this.data.city,
                tel:this.data.tel,
                chambre:this.data.chambre,
                salon:this.data.salon,
                douche:this.data.douche,
                cuisine:this.data.cuisine,
                price:this.data.price,
                mode:this.data.mode,
                description:this.data.description,

            },
            

        }
    },


    methods:{
        submit(){

          this.$inertia.put("/Admin/Update",this.form);

        }
    }
};
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

    color: rgb(97, 56, 97, 0.8);
    
}</style>
