<template>
    <div>
    <nav class="navbar navbar-expand-lg  "  id="nav" >
  <div class="container-fluid">
    <Link href="/" class="navbar-brand text-uppercase font-weight-bold">
      <img src="http://127.0.0.1:8000/storage/img/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      APIS |
    </Link>
    <button class="navbar-toggler" type="button" v-on:click="showMenu" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <transition mode="out-in"  enter-active-class="animate_animated animate__flipOutY" leave-active-class="animate_animated animate__flipOutX">
               <i class="fas fa-bars"  v-if="testMenu"></i>
               <i class="fas fa-times" v-else ></i> 
           </transition>        
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item ">
               <Link href="/Presentation"  class="nav-link text-uppercase ">Présentation</Link>
              </li>
              <li class="nav-item ">
               <Link href="/Services"  class="nav-link text-uppercase" >Services</Link>
              </li>
            
              <li class="nav-item ">
               <Link href="/House"  class="nav-link  text-uppercase ">Nos appartements</Link>
              </li>

              <li class="nav-item ">
                <Link href="/Contact"  class="nav-link text-uppercase">Contact</Link>
              </li>
              
              <li class="nav-item ">
               <Link href="/Faq"  class="nav-link text-uppercase ">FAQ</Link>
              </li>
              
        
      </ul>
      <span class="d-flex">
        <Social />
      </span>
     
    </div>
  </div>
</nav>

    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Social  from "./../Others/Social";
export default {
    name: "Nav",

    components: {
        Link,
        Social
    },
    data() {
      return {
        testVar:0,
        testMenu:true
      }
    },
    methods: {
      showMenu(){
       
       $(".navbar-toggler").css("box-shadow", "0px 0px 0px transparent");
       
        this.testVar+=1;
        
      }
    },
    watch: {
      testVar(){
        if (this.testVar % 2==0) {
         this.testMenu=true
        } else {
          this.testMenu=false
        }
       
      }
    },
};
</script>

<style lang="scss" scoped>

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  
  
}

#nav {
  padding: 30px;
  background-color: rgb(97, 56, 97, 0.8);
  .navbar-brand{
    color: rgb(235, 235, 235);
    font-weight: bold;
  }
  .nav-link{
    color: white;
    font-weight: bold;
    &:hover{
      color: rgb(204, 204, 204);
    }
  }
}

#active {
  color: #42b983;
}
 
</style>
 