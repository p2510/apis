<template>
    <div>
         <slot> <h3> Oups ,  Aucun résultat trouvé .</h3> <br> 
         <p class="bg-warning"> Pour améliorer les qualités , vous pouvez réessayer avec un bon mot clé. </p>
              <span>Par exemple pour repondre à la question : 
                   <mark>
                       Combien de temps avant le début du contrat ? 
                  </mark>
                  <br> Vous pouvez saisir les mots comme : <strong>"temps"</strong> ou <strong>"contrat" ...</strong> 
                </span>
          </slot>
    </div>
</template>

<script>
    export default {
        name:"Nothing"
    }
</script>

<style lang="scss" scoped>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
div{
    h3{
        font-weight: bold;

    }
    p{
        color: rgb(19, 18, 18);
        
    }
    span{
          font-family: 'Montserrat', sans-serif;
    }
}

</style>