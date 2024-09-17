<template>
    <div class="container" id="auth-component">
        <form @submit="handleSubmit.preventDefault" class="d-flex flex-column">
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
    </div>
    </template>
    
    <script>
    import axios from 'axios'
    export default {
        name: 'SignupComponent',
        methods: {
            handleSubmit(){
                console.log("submitted")
                const data = {
                    firstName: this.firstName,
                    lastName: this.lastName,
                    email: this.email,
                    password: this.password,
                    confirmPassword: this.confirmPassword
                }
                
                axios.post('http://localhost:8000/api/register', data)
                .then((res) => {
                    console.log(res)
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
        margin: 0 auto;
        flex-direction: start;
        width: 35rem;
        height: fit-content;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        margin-top: 4rem;
        margin-block: 2rem;
    }
    
    #auth-component form{
        padding: 3rem 1rem;
        display: flex;
        margin: 0 auto;
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
        margin: 0 auto;
        padding: 0.125rem 2rem;
    }
    
    
    </style>