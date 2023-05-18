<template>
<div class="container" id="auth-component">
    <form action="#" class="d-flex flex-column">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
            <div class="row">
                <span class="span-text col-12">or use your account</span>
            </div>

            <div class="row">
			<input class="form-input col-10" type="email" placeholder="Email" />
            </div>

			<div class="row">
			<input class="form-input col-10" type="password" placeholder="Password" />
            </div>
			<a href="#">Forgot your password?</a>
			<button class="cta-btn">Sign In</button>
		</form>
</div>
</template>

<script>
export default {

}
</script>

<style>
#auth-component{
    width: 40rem;
    height: 30rem;
    margin-top: 6rem;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    justify-content: center;
    align-items: center;    
    padding: 3rem 1rem;
}

#auth-component .row{
    display: flex;
    align-items: center;
    justify-content: center;
}



</style>