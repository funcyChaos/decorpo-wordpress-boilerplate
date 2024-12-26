// Styles for the menu and mobile menu can be found in sass/layouts/main/_header.scss

document.addEventListener('DOMContentLoaded', ()=>{
	const mobileMenu = document.getElementById('mobile_menu')
	const page = document.getElementById('page')
	let showMenu = false
	document.getElementById('mobile_toggle').addEventListener('click', ()=>{
		displayToggle(mobileMenu)
	})
	mobileMenu.addEventListener('click', ()=>{
		page.style.display = 'grid'
		displayToggle(mobileMenu)
	})
	mobileMenu.addEventListener('transitionend', ()=>{
		removeTransition(mobileMenu)
	})
	function displayToggle(el){
		if(!showMenu){
			// show
			el.classList.add('transition')
			el.clientWidth; // force layout to ensure the now display: block and opacity: 0 values are taken into account when the CSS transition starts.
			el.classList.remove('hidden')
			showMenu = true
		}else{
			// hide
			el.classList.add('transition')
			el.classList.add('hidden')
			showMenu = false
		}
	}
	function removeTransition(el){
		el.classList.remove('transition')
		if(showMenu){
			page.style.display = 'none'
		}
	}
})