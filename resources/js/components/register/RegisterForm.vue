<template>
    <form @submit.prevent="register">

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">用户名</label>

            <div class="col-md-6">
                <input v-model="name"
                       :class="{ 'is-invalid' : errors.has('name') }"
                       v-validate="'required|alpha_dash|min:4'"
                       data-vv-as="用户名 "
                       id="name" type="text" class="form-control" name="name" required autocomplete="name">
                <span class="invalid-feedback" v-show="errors.has('name')">{{errors.first('name')}}</span>
            </div>
        </div>

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

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">确认密码</label>

            <div class="col-md-6">
                <input :class="{ 'is-invalid' : errors.has('password_confirmation') }"
                       v-validate="{ rules: {required: true, min: 8, confirmed: 'password'} }"
                       data-vv-as="确认密码 "
                       id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                <span class="invalid-feedback" v-show="errors.has('password_confirmation')">{{errors.first('password_confirmation')}}</span>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    注册
                </button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        name: "RegisterForm",
        data() {
            return {
                name: '',
                email: '',
                password: ''
            }
        },
        methods: {
            register() {

                let formData = {
                    name: this.name,
                    email: this.email,
                    password: this.password
                }

                axios.post('/api/register',formData).then(response => {
                    this.$router.push({name:'confirm'});
                });
            }
        }
    }
</script>

<style scoped>

</style>