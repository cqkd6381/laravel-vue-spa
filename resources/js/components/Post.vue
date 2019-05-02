<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Home
            </div>
            <div class="card-body">
                <h5 class="card-title">{{post.title}}</h5>
                <p class="card-text">{{ post.body }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/api/posts/' + this.$route.params.id).then(response => {
                this.post = response.data
            });
        },
        data() {
            return {
                post: {}
            }
        }
    }
</script>

<style scoped>

</style>