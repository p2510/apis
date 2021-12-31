<template>
    <div>
        <App />
        <div class="container">
            <div class="row">
                <br />
                <p
                    class="
                        alert alert-success
                        col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12
                    "
                    role="alert"
                    v-if="$page.props.flash.successCreate"
                >
                    {{ $page.props.flash.successCreate }}
                </p>

                <section class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <article
                            class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-10"
                            v-for="item in data"
                            :key="item.id"
                        >
                            <figure
                                class="
                                    col-xl-12
                                    col-lg-12
                                    col-md-12
                                    col-sm-12
                                    col-12
                                "
                            >
                                <img :src="urlPhoto + item.photo" alt="" />
                            </figure>
                            <legend
                                class="
                                    col-xl-12
                                    col-lg-12
                                    col-md-12
                                    col-sm-12
                                    col-12
                                "
                            >
                                <h3>
                                    APPARTEMENT DISPONIBLE <br />
                                    À {{ item.city }}
                                </h3>
                            </legend>
                            <blockquote
                                class="
                                    col-xl-12
                                    col-lg-12
                                    col-md-12
                                    col-sm-12
                                    col-12
                                "
                            >
                                <strong>Description : <br /></strong
                                >{{ item.description }}
                            </blockquote>
                            <span
                                class="
                                    col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6
                                "
                            >
                                <p class="text-light">
                                    <strong>Nombre salon </strong> :
                                    {{ item.salon }}
                                </p>
                                <p class="text-light">
                                    <strong>Nombre chambre </strong> :
                                    {{ item.chambre }}
                                </p>
                                <p class="text-light">
                                    <strong>Nombre cuisine </strong> :
                                    {{ item.cuisine }}
                                </p>
                                <p class="text-light">
                                    <strong>Nombre douche </strong> :
                                    {{ item.douche }}
                                </p>
                                <Link  :href="linkEdit+item.id"   class="btn btn-outline-primary col-xl-6 col-md-6 col-lg-6 col-sm-6 col-6">Modifier</Link>
                                <Link  :href="linkDestroy+item.id" method="delete"   class="btn btn-outline-danger col-xl-6 col-md-6 col-lg-6 col-sm-6 col-6">Supprimer</Link>
                            
                            </span>

                            <hr />
                            <h4
                                class="
                                    col-xl-12
                                    col-lg-12
                                    col-md-12
                                    col-sm-12
                                    col-12
                                    d-flex
                                    justify-content-center
                                "
                            >
                                À {{ item.mode }} / {{ item.price }} dh
                            </h4>
                        </article>
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import App from "./Layouts/App";
export default {
    name: "Login",

    components: {
        App,
        Link
    },
    props: {
        data: {
            type: Object,
            default: {},
        },
    },
    data() {
        return {
            urlPhoto: "http://127.0.0.1:8000/storage/",
            linkEdit:"/Admin/Edit/",
            linkDestroy:"/Admin/Destroy/",
            
        };
    },
    
};
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Arimo&family=Montserrat:wght@300&family=Roboto:wght@900&display=swap");
article {
    color: white;
    margin-top: 5px;
    margin-bottom: 5px;
    background-color: #353536;
    border-radius: 7px;
    margin-right: 5px;

    span {
        margin-bottom: 3px;
        color: white;
    }
    img {
        padding-top: 5px;
        width: 100%;
    }
    hr {
        color: rgb(128, 128, 128);
        margin-bottom: 2px;
    }
}
</style>
