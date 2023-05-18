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



</style>