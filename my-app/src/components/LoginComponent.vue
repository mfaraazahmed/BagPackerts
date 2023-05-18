<template>
<div class="container" id="auth-component">
    <form action="#" class="d-flex flex-column">
        <div class="main-title">
            BagPackers
        </div>
        <div class="subtitle">Signin using</div>
        <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f facebook"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g google"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in linkdn"></i></a>
        </div>
        <div class="subtitle">Or signin using</div>

        <div class="row">
        <input class="form-input col-10" type="email" placeholder="Email" />
        </div>

        <div class="row">
        <input class="form-input col-10" type="password" placeholder="Password" />
        </div>
        <a class="note" href="#">Forgot your password?</a>
        <button class="cta-btn">Sign In</button>
		</form>
</div>
</template>

<script>
export default {
    name: 'LoginComponent',
}
</script>

<style>
#auth-component{
    margin: 0 auto;
    flex-direction: start;
    width: 35rem;
    height: 40rem;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    margin-top: 4rem;
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
    margin-top: 0.5rem;
    margin-block: 1rem;
}

form .subtitle{
    font-size: 0.9rem;
    margin: 0 auto;
    padding: 1rem 0;
}

form .social-container{
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    gap: 2rem;
}

form .social-container i{
    font-size: 2rem;
    transition: all .2s ease-in-out;
}

form .social-container i:hover{
    transform: scale(1.1);
}

form .social-container i.facebook{
    color: #3b5998;
}

form .social-container i.google{
    color: #dc4e41;
}

form .social-container i.linkdn{
    color: #0077b5;
}
form .row{
    margin-top: 1rem;
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