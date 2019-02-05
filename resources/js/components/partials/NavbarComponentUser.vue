<template>
    <b-navbar toggleable="md" type="dark" variant="info" fixed="top">
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <b-navbar-brand v-bind:href="this.routes.home">{{this.brand}}</b-navbar-brand>

        <b-collapse is-nav id="nav_collapse">
            <b-navbar-nav class="ml-auto">
                <b-nav-item-dropdown text="Lang" right>
                    <b-dropdown-item href="#">EN</b-dropdown-item>
                    <b-dropdown-item href="#">ES</b-dropdown-item>
                    <b-dropdown-item href="#">RU</b-dropdown-item>
                    <b-dropdown-item href="#">FA</b-dropdown-item>
                </b-nav-item-dropdown>

                <b-nav-item-dropdown right>
                    <!-- Using button-content slot -->
                    <template slot="button-content">
                        <em>{{this.user.name}}</em>
                    </template>
                    <b-dropdown-item href="#">Profile</b-dropdown-item>
                    <b-dropdown-item @click="signout">Signout</b-dropdown-item>
                </b-nav-item-dropdown>

                <form ref="logout" v-bind:action="this.routes.logout" method="POST" v-html="this.token" v-show="false"></form>
            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
</template>

<script>
    export default {
        props: [
            'brand',
            'user',
            'routes',
            'token'
        ],

        methods : {
            signout() {
                this.$refs.logout.submit();
            }
        }
    }
</script>
