<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div id="form_div" class="form-div">
	<form id="contact_form" class="contact-form" action="" method="post">
		<div class="customer">
			<label for="quote_first_name">First Name</label>
			<input type="text" name="quote_first_name">
			<label for="quote_last_name">Last Name</label>
			<input type="text" name="quote_last_name">
			<label for="quote_phone_number">Phone Number</label>
			<input
				pattern="^(\+0?1\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$"
				oninput="phoneNumberMask(event)"
				type="tel" name="quote_phone_number"
			>
			<label for="quote_zip_code">Zip Code *</label>
			<p>Please enter a 5 digit zip code</p>
			<input required type="text" pattern="[0-9]{5}" title="Five digit zip code" name="quote_zip_code"/>
			<label for="quote_email">Email Address *</label>
			<input required type="email" name="quote_email">
		</div>
		<div class="information">
			<label for="quote_description">Please be as concise as possible. *</label>
			<textarea required name="quote_description" cols="30" rows="10"></textarea>
		</div>
		<div class="g-recaptcha" data-sitekey="6LcC0fsrAAAAACWCHZPai1sJvGIvsrkU7bwcERhQ" data-callback="recaptchaValidate"></div>
		<button class="" id="submit_button" type="submit">Submit</button>
		<h3 style="margin-top: 1rem;" id="quote_message"></h3>
	</form>
</div>
<script>
	const form = document.getElementById('contact_form')
	form.addEventListener('submit', (event)=>{
		event.preventDefault()
		if(grecaptcha.getResponse() == ""){
			alert("Please verify that you're not a robot")
		}else{
			const formData = new FormData(form)
			let jsonData = {}
			formData.forEach((value, key)=>{
				jsonData[key] = value
			})
			fetch('<?=home_url()?>/wp-json/contact-me/v1/submit',{
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-WP-Nonce':		'<?=wp_create_nonce('wp_rest')?>',
				},
				body: JSON.stringify(jsonData),
			})
			.then(res=>res.json())
			.then(obj=>{
				console.log(obj)
				if(obj.response == 'POST successful'){
					form.reset()
					document.getElementById('quote_message').innerText = 'Quote Submitted'
				}else{
					document.getElementById('quote_message').innerText = 'There was an error'
				}
			})
		}
	})

	function phoneNumberMask(e){
		const x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/)
		e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '')
		const formatPattern = /^(\+0?1\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/
		const isValid = formatPattern.test(e.target.value)
		if (isValid) e.target.setCustomValidity('')
		else e.target.setCustomValidity('Must use a valid US phone number')
	}

	function recaptchaValidate(){
		const submitBtn = document.getElementById('submit_button')
		if(submitBtn.classList.contains("hidden")){
			submitBtn.classList.remove("hidden")
		}
	}
</script>