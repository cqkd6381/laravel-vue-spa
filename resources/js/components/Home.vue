<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Home
            </div>
            <div v-for="post in posts" :key="post.id" class="card-body">
                <h5 class="card-title"><router-link :to="{ name: 'posts', params: {id: post.id}}">{{ post.title }}</router-link></h5>
                <p class="card-text">{{ post.body }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/api/posts').then(response => {
                this.posts = response.data.data
            });
        },
        data() {
            return {
                posts: []
            }
        }
    }
</script>