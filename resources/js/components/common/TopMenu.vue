<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <router-link class="navbar-brand" to="/">Laravel Vue SPA</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <router-link v-if="!user.authenticated" class="nav-item" tag="li" to="/login">
                        <a class="nav-link">登录</a>
                    </router-link>
                    <router-link v-if="!user.authenticated" class="nav-item" tag="li" to="/register">
                        <a class="nav-link">注册</a>
                    </router-link>
                    <router-link v-if="user.authenticated" class="nav-item" tag="li" to="/profile">
                        <a class="nav-link">个人中心</a>
                    </router-link>
                    <li v-if="user.authenticated" class="nav-item">
                        <a @click.prevent="logout" href="#" class="nav-link">退出</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</template>

<script>
    import {mapState} from 'vuex'
    export default {
        name: "TopMenu",
        computed: {
            ...mapState({
                user: state => state.AuthUser
            })
        },
        methods:{
            logout() {
                this.$store.dispatch('logoutRequest').then(response => {
                    this.$router.push({name: 'home'})
                })
            }
        }
    }
</script>

<style scoped>

</style>