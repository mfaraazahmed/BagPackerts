<template>
    <div class="container d-flex flex-md-row flex-column" id="auth-component">
        <form @submit="handleSubmit" class="d-flex flex-column">
            <div class="main-title">
                BagPackers
            </div>
            <div class="subtitle">Signup here</div>
    
            <div class="row">
            <label class="title col-10">First name</label>
            <input class="form-input col-10" v-model="firstName" type="text" placeholder="Type here" />
            </div>

            <div class="row">
            <label class="title col-10">Last name</label>
            <input class="form-input col-10" v-model="lastName" type="text" placeholder="Type here" />
            </div>

            <div class="row">
            <label class="title col-10">Email</label>
            <input class="form-input col-10" v-model="email" type="email" placeholder="Type here" />
            </div>
    
            <div class="row">
            <label for="password" class="title col-10">Password</label>
            <input class="form-input col-10" v-model="password" type="password" placeholder="Password" />
            </div>

            <div class="row">
            <label class="title col-10">Confirm Password</label>
            <input class="form-input col-10" v-model="confirmPassword" type="password" placeholder="Password" />
            </div>

            <button class="cta-btn">Register</button>
        </form>

            <div class="img-div">
                <img src="../assets/backtrans.png" alt="image" class="home_image">
            </div>
    </div>
    </template>
    
    <script>
    import axios from 'axios'
    export default {
        name: 'SignupComponent',
        methods: {
            handleSubmit(e){
                e.preventDefault();
                console.log("submitted")
                const data = {
                    firstName: this.firstName,
                    lastName: this.lastName,
                    email: this.email,
                    password: this.password,
                    confirmPassword: this.confirmPassword
                }
                
                axios.post('http://localhost:8000/register', data)
                .then((res) => {
                    console.log(res.data)
                }).catch(
                    err => {
                        console.log(err)
                    }
                )
            }
        },
        data(){
            return {
                firstName: '',
                lastName: '',
                email: '',
                password: '',
                confirmPassword: '',
            }
        }
    }
    </script>
    
    <style>
    #auth-component{
        flex-direction: start;
        width: fit-content;
        height: fit-content;
        margin-top: 4rem;
        margin-block: 2rem;
        background-color: #DBD4F3;
        padding: 0;
    }
    
    #auth-component form{
        display: flex;
        background-color: #eee;
    }
    .home_image{
        height: 40rem;
        width: 37.5rem;
    }

    form .main-title{
        font-size: 2rem;
        text-transform: capitalize;
        font-weight: 700;
        margin: 0 auto;
    }
    
    form .subtitle{
        font-size: 0.9rem;
        margin: 0 auto;
        padding: 1rem 0;
    }
    
    form .row{
        margin-top: 1rem;
    }

    form .row label.title{
        margin: 0 auto;
        margin-block: 0.5rem;
    }
    
    form .row input{
        border: 1px solid #333;
        border-radius: 8px;
        height: 2.5rem;
        margin: 0 auto;
    }
    
    form .note{
        text-align: center;
        margin: 2rem 0;
    }
    
    form .cta-btn{
        border: 1px solid #333;
        border-radius: 8px;
        height: 2.5rem;
        margin: 1.5rem auto;
        padding: 0.125rem 2rem;
    }
    
    
    </style>