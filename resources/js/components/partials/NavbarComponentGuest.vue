<template>
    <b-navbar toggleable="md" type="dark" variant="info">
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <b-navbar-brand v-bind:href="this.routes.home">{{this.brand}}</b-navbar-brand>

        <b-collapse is-nav id="nav_collapse">
            <b-navbar-nav class="ml-auto">
                <b-nav-item v-bind:href="this.routes.login">Login</b-nav-item>
                <b-nav-item v-bind:href="this.routes.register">Register</b-nav-item>
            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
</template>

<script>
    export default {
        props: [
            'brand',
            'routes'
        ]
    }
</script>