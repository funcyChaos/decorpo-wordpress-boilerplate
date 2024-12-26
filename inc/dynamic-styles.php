<?php
	$color1 = '#bebebe';
?>

<style>
	:root{
		--background-color: #0d000d;
		--aux-color: #1e1e25;
	}

	/* img{
		border: solid 1rem var(--aux-color);
		border-radius: 5px;
	} */
	.site{
		/* site background and foreground */
		/* background-color: #000014; */
		background-color: var(--aux-color);
		color: #ffffff;
		/* a tag colors */
		a{color: #ffffff;}
		a:visited{color: #ffffff;}
		a:hover{color: #555555;}

		.site-header{
			background-color: var(--background-color);
			color: #ffffff;
			border-radius: 0 0 .5rem .5rem;
			a{color: #ffffff;}
			a:visited{color: #ffffff;}
			a:hover{color: #afafaf;}
		}
		.content-main{
			background-color: var(--background-color);
			color: #ffffff;
			border-radius: .2rem;
			a{color: #ffffff;}
			a:visited{color: #ffffff;}
			a:hover{color: #afafaf;}
		}
		.site-footer{
			background-color: var(--background-color);
			color: #ffffff;
			border-radius: .5rem .5rem 0 0;
			a{color: #ffffff;}
			a:visited{color: #ffffff;}
			a:hover{color: #afafaf;}
		}
	}
</style>