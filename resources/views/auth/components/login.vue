<template>
    <div class="theme-loader">
        <section class="login-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                    <!-- form -->
                        <form class="md-float-material form-material" @submit.prevent="submitFormLogin" enctype="multipart/form-data" method="POST">
                           
                            <div class="text-center">
                                <img src="../../../../public/assets/images/logo.png" alt="logo.png">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center txt-primary">
                                                <b>AUTHENTIFICATION</b>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="row m-b-20"></div>
                                    <p class="text-muted text-center p-b-5">
                                        Identifiez-vous pour acc&eacute;der &agrave;
                                        votre Espace
                                    </p>
                                    <p></p>
                                    <div class="form-group form-primary">
                                        <label class="form-label" for="email">
                                            <b>E-MAIL</b>
                                        </label>
                                        <input type="email" name="email" class="form-control" id="email" required
                                            placeholder="kgandji225@gmail.com" v-model="email">
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="form-group">&nbsp;</div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">
                                            <b>MOT DE PASSE</b>
                                        </label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control" required
                                                id="password">

                                            <!-- Affiche l'icône en fonction de l'état -->
                                            <button type="button" class="input-group-text .md-col-8" @click="showPass">
                                                <span>
                                                    <i class="fa fa-eye" aria-hidden="true" id="fa"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary">
                                                <input type="checkbox" id="remember"  name="remember" v-model="remember" class="form-check-input">
                                                <label for="remember">&nbsp;Me Souvenir</label>
                                            </div>
                                            <div class="forgot-phone text-right float-right">&nbsp;
                                                <!-- <a href="auth-reset-password.html" class="text-right f-w-600">Mot de passe oubli&eacute;?  
                                                </a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit"
                                                class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">SE
                                                CONNECTER</button>
                                        </div>
                                    </div>
                                    <!-- <p class="text-inverse text-left">Pas de compte?&nbsp;
                                        <a  :href="showLogin"> <b>Cr&eacute;er</b>&nbsp;&nbsp;ici</a></p> -->
                                </div>
                            </div>
                        </form>
                    <!-- /form -->
                    </div>

                </div>
            </div>
        </section>
    </div>
</template>
<script>
import axios from 'axios';
import { route } from 'ziggy-js';
export default {
    name: 'Login',

    data() {
        return {
            // Define your component data here
            appName: window.appName || 'MyApp', // Fallback to 'My App' if appName is not defined
            pageTitle: appName + " | AUTHENTIFICATION",
             email: '',
             password: '',
             remember:'',

        };
    },
    watch: {
        pageTitle(newTitle) {
            document.title = newTitle;
        }
    },
    mounted() {
        // Set the initial document title
        document.title = this.pageTitle;
    },
    methods: {
        // Define your component methods here
        // For example, you can add a method to handle form submission
        showLogin: () => {
            return route('login.show');
            //    window.location.href = "{{route('login.show')}"; 
        },
        registerShow: () => {
            return route('register.show');
        },
        submitFormLogin: () => {
            // Handle form submission logic here
            // You can use axios or fetch to send a request to your backend
            // For example:
           
            let url=route('login'); 
           
            // Récupérer les valeurs des champs de formulaire
         
      
                email= document.getElementsByTagName('email');
                email=email.item(0).value;
                password= document.getElementsByName('password');
                remember=  document.getElementsByName('remember');
          
             console.log(email,password,remember);
            axios.post(url, email, password, remember)
                .then(response => {
                    // Handle success response
                    console.log(response.data);
                    if (response.data.status === 200) {
                        window.location.href = response.data.redirectTo;
                    }else if (error.response && error.response.status == 422) {
                        // Affiche les messages d'erreurs de validation
                        console.log('Erreurs de validation:', error.response.data.errors);
                    }else {
                        // Handle error response
                        console.log(response.data.message);
                    }
                })
                .catch(error => {
                    // Handle error response
                    console.error(error);
                });
            // return console.log("Bonjour " + email.value);
        },
        showPass: () => {
            let passwordInput = document.getElementById('password');
            let faIcon = document.getElementById('fa');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                faIcon = faIcon.setAttribute('class', 'fa fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                faIcon = faIcon.setAttribute('class', 'fa fa-eye');
            }
        },


    }
};
</script>