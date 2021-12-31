<template>
    <div class="bg-light">
        <Nav />
        <div class="container">
            <div class="row">
                <h2
                    class="
                        col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12
                        d-flex
                        justify-content-center
                        text-secondary
                    "
                >
                    Présentation de l'entreprise 
         
                </h2>
                <blockquote
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                >
                    L’idée de créer cette entreprise est de répondre à un besoin
                    ardent de la population Marocaine et étrangère vivant sur le
                    sol Marocain. En effet, plusieurs personnes cherchent d’une
                    manière quotidienne les femmes de ménage, les gardes
                    enfants, le service de gardiennage, les syndics, les
                    enseignants à domicile et les appartements meublés ou non
                    meubles pour la location ou la vente . Elles se retrouvent
                    souvent face à non satisfaction de leur besoin à cause du
                    manque de service professionnel qualifié qui pourrait les
                    aider dans la recherche des profils qui correspondent au
                    mieux à ce qu’ils désirent. Il est donc question pour nous
                    de regrouper des compétences dans les différents domaines à
                    savoir : Ménage et garde enfant, syndic, sécurité,
                    enseignement à domicile, plus particulier les appartements
                    disponibles afin de mettre au service de nos clients sur la
                    base d’un contrat. Notre objectif sera axé sur le Sourcing
                    des personnes capables, de bonnes moralités susceptibles de
                    contribuer à la bonne marche des activités de notre
                    clientèle. PRESENTATION GENERALE DE L’ENTREPRISE : AGENCE
                    POLIGAD INTERMEDIAIRE SERVICE t-elle que son nom l’indique
                    est une Société A Responsabilité Limitée (S.A.R.L) au
                    capital de 10 000,00 DH.Elle est une entreprise de prestation de service
                            d’intermédiaire dans la mise à disposition des
                            clients des Services de ménage et garde enfant,
                            syndic, sécurité, enseignement à domicile, et les
                            appartements meublés ou non meublés. Il se veut
                            facilitateur de tout type des travaux
                            d’intermédiation afin de rendre plus facile des
                            différentes tâches dans les foyers Marocains et
                            étrangers. Notre idée est donc basée sur cette
                            notion de facilité, que ce soit la facilité de
                            compréhension, la facilité de la qualité de notre
                            organisation, ainsi que notre service en termes de
                            démarche et tarif. Nous souhaitons la présenter de
                            manière simpliste, via une plate-forme en ligne
                            d’internet d’objets ouvert au public et des
                            solutions accessibles à tous. 
                    
                </blockquote>
                <section class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <blockquote
                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"
                        >
                            <br> <strong> PRESENTATION DE
                            L’EQUIPE DE GESTION .</strong><br> De nationalité Centrafricaine,
                            M. Teston Grâce â Dieu SOUMBA est le Président
                            Directeur Général (PDG) de l’AGENCE POLIGAD
                            INTERMEDIAIRE SERVICE. Passionné du service
                            d’intermédiaire, il a décidé d’investir environ 90%
                            de son fond propre dans la réalisation de ce projet.
                            Pourtant rien ne le destinait à ce métier, puisqu’il
                            a un parcours financier d’entreprise (Master en
                            Finance : Option contrôle de gestion). En date du
                            Novembre 2020, il a servi la communauté
                            Centrafricaine au Maroc, comme le Coordonnateur
                            National du Conseil Consultatif de l’UESCAM-MAROC
                            sans oublier qu’il a été Président des élèves
                            étudiants et stagiaires Centrafricains de Casablanca
                            entre 2018-2020. En outre, son rôle de Chargé des
                            finances auprès de la Confédération des élèves
                            étudiants et stagiaires Africains étrangers au Maroc
                            lui a permis de se fondre dans un environnement
                            multiculturel où les sujets de rencontres et
                            conseils étaient orientés vers les projets de
                            développement de l’Afrique. Il débuté sa carrière en
                            janvier 2020 en tant que Spécialiste Associé à la
                            livraison chez la Société Française du
                            Radiotéléphone (SFR) installée au Maroc.
                        </blockquote>

                        <figure
                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"
                        >
                            <img
                                :src="img"
                                class="
                                    col-xl-12
                                    col-lg-12
                                    col-md-12
                                    col-sm-12
                                    col-12
                                "
                                alt="PDG de APIS"
                            />
                        </figure>
                    </div>
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
    name: "Presentation",
    props: {
        img: {
            type: String,
            default: "Nan",
        },
    },

    components: {
        Nav,
        Footer,
    },
};
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Arimo&family=Montserrat:wght@300&family=Roboto:wght@900&display=swap");

h2 {
    font-family: "Arimo";
}
img {
    width: 100%;
    height: 100vh;
}
</style>
