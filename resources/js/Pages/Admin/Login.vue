<template>
    <div class="container">
        <div class="row">
            <section class="bg-dark col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <h3 class="text-light d-flex justify-content-center col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     Me connecter
                 </h3>
                 <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <form  method="post" @submit.prevent="submit">
                      <input type="text" name="name" class="form-control col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6" placeholder="Nom utilisateur" v-model="form.name" >
                      <strong class="text-danger" v-if="$page.props.errors.name">{{JSON.stringify($page.props.errors.name).slice(2,-2)}}</strong>
                      <input type="password" name="password" class="form-control col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6" placeholder="Mot de passe" v-model="form.password">
                       <strong class="text-danger" v-if="$page.props.errors.password">{{JSON.stringify($page.props.errors.password).slice(2,-2)}}</strong>
                       <input type="submit" class=" d-flex justify-content-center btn btn-outline-light" value="Connexion">
                       </form>
                 </div>
            </section>
        </div>
    </div>
</template>

<script>

    export default {
       
        name:"Login",
        data() {
            return {
                form:{
                    name:null,
                    password:null
                }
            }
        }, 

        methods: {
            submit(){
                this.$inertia.post("Admin/Login",this.form);
            }
        },
               
    

    }
</script>

<style lang="scss" scoped>

section{
    
    position: relative;
    top: 50vh;
    input{
        margin-top: 10px;
        margin-bottom: 10px;
        &:focus{
            box-shadow: 0px 0px 0px transparent;
        }
    }
}


</style>