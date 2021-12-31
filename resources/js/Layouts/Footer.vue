<template>
    <div>
    <div class="footer-dark">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3 item">
              <!--  information tag-->
              <h3>Liens</h3> 
              <ul>
               <li><Link href="/Presentation">Présentation</Link></li>
              <li> <Link href="/Services"  >Services</Link></li>
              <li><Link href="/House" >Nos appartements</Link></li>
              <li><Link href="/Contact"  >Contact</Link></li>
              <li><Link href="/Faq">FAQ</Link></li>
               
               
              </ul>
            </div>
          
            <div class="col-sm-6 col-md-3 item">
              <h3>Offre </h3>
              <ul>
                
               <li><Link href="/Contact"  >Obtenir un service en tant que particulier ou entreprise </Link></li>
               <li><Link href="/Job">Obtenir un emploi ?</Link></li>
              
              </ul>
            </div>

            <!--  about Us-->
            <div class="col-md-6 item text">
              <!--  règle tag-->
              <div class="col">
               
                
                
              </div>
            </div>
            <div class="col item social">
              <a href="https://www.facebook.com/profile.php?id=100076167297063"><i class="icon ion-social-facebook"></i></a
              ><a href="https://www.instagram.com/apis_organisatiion/"><i class="icon ion-social-instagram"></i></a>
            </div>
          </div>
          <p class="copyright">APIS © 2021</p>
        </div>
      </footer>
    </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: "Footer",

    components: {
        Link,
    },
};
</script>

<style lang="scss" scoped>


.footer-dark {
  padding: 50px 0;
  color: #f0f9ff;
  background-color: #282d32;
}

.footer-dark h3 {
  margin-top: 0;
  margin-bottom: 12px;
  font-weight: bold;
  font-size: 16px;
}

.footer-dark ul {
  padding: 0;
  list-style: none;
  line-height: 1.6;
  font-size: 14px;
  margin-bottom: 0;
}

.footer-dark ul a {
  color: inherit;
  text-decoration: none;
  opacity: 0.6;
}

.footer-dark ul a:hover {
  opacity: 0.8;
}

@media (max-width: 767px) {
  .footer-dark .item:not(.social) {
    text-align: center;
    padding-bottom: 20px;
  }
}

.footer-dark .item.text {
  margin-bottom: 36px;
}

@media (max-width: 767px) {
  .footer-dark .item.text {
    margin-bottom: 0;
  }
}

.footer-dark .item.text p {
  opacity: 0.6;
  margin-bottom: 0;
}

.footer-dark .item.social {
  text-align: center;
}

@media (max-width: 991px) {
  .footer-dark .item.social {
    text-align: center;
    margin-top: 20px;
  }
}

.footer-dark .item.social > a {
  font-size: 20px;
  width: 36px;
  height: 36px;
  line-height: 36px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  box-shadow: 0 0 0 1px rgb(97, 56, 97);
  margin: 0 8px;
  color: #fff;
  opacity: 0.75;
}

.footer-dark .item.social > a:hover {
  opacity: 0.9;
  transform: scale(1.1);
  transition: transform 800ms;
}

.footer-dark .copyright {
  text-align: center;
  padding-top: 24px;
  opacity: 0.3;
  font-size: 13px;
  margin-bottom: 0;
}


</style>
 