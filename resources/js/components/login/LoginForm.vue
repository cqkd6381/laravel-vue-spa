<template>
    <form @submit.prevent="login">

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">邮箱</label>

            <div class="col-md-6">
                <input v-model="email"
                       :class="{ 'is-invalid' : errors.has('email') }"
                       v-validate="{ rules: {required: true, email: true} }"
                       data-vv-as="邮箱 "
                       id="email" type="email" class="form-control" name="email" required>
                <span class="invalid-feedback" v-show="errors.has('email')">{{errors.first('email')}}</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">密码</label>

            <div class="col-md-6">
                <input v-model="password"
                       :class="{ 'is-invalid' : errors.has('password') }"
                       v-validate="{ rules: {required: true, min: 8} }"
                       data-vv-as="密码 "
                       id="password" type="password" class="form-control" name="password" required>
                <span class="invalid-feedback" v-show="errors.has('password')">{{errors.first('password')}}</span>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    登录
                </button>
            </div>
        </div>
    </form>
</template>

<script>
    import jwtToken from './../../helpers/jwt'
    export default {
        name: "LoginForm",
        data() {
            return {
                email: '',
                password: ''
            }
        },
        methods: {
            login() {
                this.$validator.validateAll().then(result => {
                    if(result){
                        let formData = {
                            email: this.email,
                            password: this.password
                        }
                        this.$store.dispatch('loginRequest', formData).then(response => {
                            this.$router.push({name: 'profile'})
                        })
                    }
                    //
                })
            }
        }
    }
</script>

<style scoped>

</style>