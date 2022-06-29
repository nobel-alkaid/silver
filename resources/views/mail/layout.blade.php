<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Eshore Shop</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
		<style>
			*{
				box-sizing: border-box;
			}
			body {
				width: 100%;
				margin: 0;
				font-family: 'Work Sans', sans-serif;
				font-weight: 400;
				font-size: 15px;
				line-height: 1.8;
				color: rgba(0,0,0,0.4);
				background-color: #f1f1f1
			}
			.page-main {
				width: 100%;
			}

            .btn {
                border: none;
                font-size: 15px;
                font-weight: 500;
                text-transform: uppercase;
                border-radius: 6px;
                border: 2px solid #2d58a4;
                padding: 1rem 1.5rem;
                text-decoration: none;
                display: inline-block;
                margin: 30px 0 0;
            }

            .btn-primary {
                background: #2d58a4;
                color: white;
            }

            .btn-primary:hover {
                color: #2d58a4;
                background: white;
                transition: all .5s;
            }

            .btn-secondary {
                color: #2d58a4;
                background: white;
            }

            .btn-secondary:hover {
                background: #2d58a4;
                color: white;
            }

			.page-container {
				max-width: 600px;
				margin: 0 auto;
			}

			.mail-header {
				background: #fff;
			}

			.head-logo {
				text-align: center; 
				padding: 20px 0;
			}

			.head-logo img {
				width: 100px;
			}

			.head-banner {
				background: linear-gradient(
					rgba(0, 0, 0, .5), 
					rgba(0, 0, 0, 0.5)
				), url("{{ asset('assets/images/home.svg')}}");
				
				background-color: rgba(33, 37, 41, 1);
				background-position-y: center;
				background-size: contain;
				background-repeat: no-repeat;
				height: 320px;
				width: 100%;
				position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
			}

			.head-banner .banner-content {
                display: flex;
                flex-direction: column;
                align-items: center;
			}

			.head-banner h1 {
				margin: 0;
				padding: 0 15px;
				font-size: 2.5rem;
				line-height: 1.4;
				font-weight: bolder;
				text-align: center;
				font-family: "system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji";
				color:rgba(255, 255, 255, 1);
			}

			/* .head-banner a {
				margin: 30px 0 0;
			} */

			/* .btn{
				color: #fff;
				background-color: #7399df;
				border-color: #7399df;
				border-radius: 5px;
				padding: 0.7rem 1rem;
				display: inline-block;
				text-decoration: none;
				text-align: center;
				margin: 10px 0 0;
				text-transform: capitalize;
				font-weight: 500;
				font-size: 15px;
				line-height: 1.5
			} */

			.email-section {
				padding: 2.5rem;
				background: #fff;
				text-align: center;
			}

			.heading-section {
				padding: 0 30px;
			}

			.heading-section h2{
				color: #000000;
				font-family: 'Work Sans', sans-serif;
				font-size: 28px;
				margin-top: 0;
				line-height: 1.4;
				font-weight: 400;
			}

			.info-part .info-img {
				width: 100%;
				height: 350px;
				object-fit: cover;
			}

			.info-part .info-title, .info-part .info-description {
				text-align: center !important;
			}

			.mail-footer {
				background: #2d58a4;
				color: #fff;
				padding: 1.3rem 0;
			}

			.footer-content {
				width: fit-content;
				max-width: -moz-fit-content;
				margin: auto;
			}

			.ft-row a {
				color: inherit;
			}

			.ft-row .copy-right div {
				padding: 10px 0;
			}
			.col-links{
				text-align: center;
			}

			@media screen and (max-width: 425px) {
				.head-banner .banner-content {
					top: 60px;
				}	

				.heading-section {
					padding: 0 0 15px;
					text-align: justify;
				}

				.info-part .info-img {
					height: 250px;
				}

				.ft-row {
					text-align: center;
				}
			}
		</style>
    </head>
    <body>
		<div class="page-main">
			<div class="page-container">
				<div class="page-row">
					<div class="mail-header">
						<div class="head-logo">
							
							<img src="{{url('main/assets/logo/logo.png')}}" alt="Our logo">	
							{{-- <img src="{{ asset('images/logo/png/logo1.png') }}" alt="">		 --}}
						</div>
						<div class="head-banner">
							<div class="banner-content">
								<h1>À votre service.</h1>
								<a href="#" class="btn btn-primary">Nous contacter</a>
							</div>
						</div>
					</div>

					{{ $slot }}

					<div class="mail-footer">
						<div class="footer-content">
							<div class="ft-row">
								<div class="copy-right">
									<div class="text-white">Tous droits réservés | <a>Silver AUBERGES</a></div>
								</div>
								{{-- <div class="col-links">
									<a class="link-light small" href="#">FAQ</a>
									<span class="text-white mx-1">·</span>
									<a class="link-light small" href="#">Contact</a>
									<span class="text-white mx-1">·</span>
									<a class="link-light small" href="#">Boutique</a>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>

                    