<template>
    <div>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <Link class="navbar-brand text-light" href="/Admin/Home"
                    >APIS | ADMIN</Link
                >

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <Link
                                class="nav-link text-light"
                                href="/Admin/Create"
                                >Ajouter un appartement</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link text-light"
                                href="/Admin/Logout"
                                >Me deconnecter</Link
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: "App",

    components: {
        Link,
    },
};
</script>

<style lang="scss" scoped></style>
