<template>
    <div>
        <Nav />
        <section id="acceuil">
            <div class="container home">
                <div class="row">
                    <!--  climb message-->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="container-fluid">
                            <div class="row">
                                <!--  title-->
                                <h3
                                    class="
                                        title-home
                                        col-xl-12
                                        col-lg-12
                                        col-md-12
                                        col-sm-12
                                        col-12
                                    "
                                >
                                    Bienvenue chez <br /><i>A</i>gence
                                    <i>P</i>oligad <i>I</i>termédiaire
                                    <i>S</i>ervice
                                </h3>
                                <!--  contain -->
                                <blockquote
                                    class="
                                        col-xl-12
                                        col-lg-12
                                        col-md-12
                                        col-sm-12
                                        col-12
                                    "
                                >
                                    Vous avez trouvé dès aoujourd'hui ce rêve
                                    inaccessible d'avoir près de vous une
                                    entreprise fiable et organisée . APIS vous
                                    accompagne dans toutes vos quêtes de :
                                    <br />
                                    ☻ Ventes & locations des appartements <br />
                                    ☻ Recherche de femme ménagère et nounou
                                    <br />
                                    ☻ Gardiennage & Syndic<br />
                                    ☻ Enseignement à domicile <br />
                                    ☻ ouviers<br />
                                </blockquote>
                               <Link  href="/Contact"    type="button"
                                    class="
                                        btn-join
                                        d-flex
                                        justify-content-center
                                        col-xl-9
                                        col-lg-9
                                        col-md-9
                                        col-sm-9
                                        col-9
                                    ">Nous joindre maintenant</Link>
                            </div>
                            <br /><br />
                        </div>
                    </div>
                    <!--  people -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div
                                    class="
                                        col-xl-6
                                        col-lg-6
                                        col-md-6
                                        col-sm-6
                                        col-6
                                        align-self-start
                                    "
                                >
                                    <img
                                        class="
                                            col-xl-12
                                            col-lg-12
                                            col-md-12
                                            col-sm-12
                                            col-12
                                        "
                                        :src="source.img1"
                                        alt="Man"
                                    />
                                    <br /><br /><br /><br /><br />
                                </div>

                                <div
                                    class="
                                        col-xl-6
                                        col-lg-6
                                        col-md-6
                                        col-sm-6
                                        col-6
                                        align-self-end
                                    "
                                >
                                    <img
                                        class="
                                            col-xl-12
                                            col-lg-12
                                            col-md-12
                                            col-sm-12
                                            col-12
                                        "
                                        :src="source.img2"
                                        alt="Woman"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <aside>
            <div class="container-fluid">
                <!--  movie explain-->
                <figure class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <img
                            :src="source.gif"
                            class="
                                col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12
                            "
                            alt=""
                        />
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="container-fluid">
                            <!-- legend -->
                            <div class="row">
                                <h3
                                    class="
                                        col-xl-12
                                        col-lg-12
                                        col-md-12
                                        col-sm-12
                                        col-12
                                    "
                                >
                                    Tissez des liens avec une entreprise basée
                                    sur la conficance
                                </h3>
                                <div
                                    class="
                                        col-xl-12
                                        col-lg-12
                                        col-md-12
                                        col-sm-12
                                        col-12
                                    "
                                >
                                    <p id="text-movie">
                                        Nous avions longtemps obsservé
                                        l'écosystème marocain sur les relations
                                        internes et externes . C'est dans cette
                                        optique que nous facilitons les
                                        rencontres dépuis notre local et nos
                                        différents cannaux. Avec
                                        <strong>APIS</strong> , vous signez un
                                        engagement solide et basé sur la
                                        garantie . Nous vous accompagnons
                                        24h/24h et 7j/7j.
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </aside>
        <Footer />
    </div>
</template>

<script>
import Nav from "./../Layouts/Nav";
import Footer from "./../Layouts/Footer";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    props: {
        source: {
            type: Array,
            default: []
        },
    },
    name: "Home",
    components: {
        Nav,
        Footer,
        Link
    },
};
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Merriweather&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Oxygen&display=swap");

.home {
    margin-top: 7px;
    margin-bottom: 7px;
    padding-bottom: 4px;
    padding-top: 4px;
    background-color: rgb(225, 225, 224, 0.2);
    box-shadow: 8px 8px 8px rgb(225, 225, 224, 0.6);
    border-radius: 10px;
    blockquote {
        color: rgba(27, 27, 27, 0.7);
        font-family: "Oxygen", sans-serif;
    }
}

.title-home {
    color: black;
    opacity: 0.9;
    font-family: "Merriweather", serif;

    i {
        font-style: normal;
        color: orange;
    }
}

.btn-join {
    background-color: rgb(97, 56, 97, 0.8);
    border-radius: 0px;
    color: white;
    font-weight: 600;
    padding-top: 5px;
    padding-bottom: 5px;
    border: none;
    text-decoration: none;
    &:hover {
        background-color: rgb(97, 56, 97, 0.6);
        transition: background-color 700ms;
    }
}
</style>
