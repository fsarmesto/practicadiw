<!DOCTYPE html >

<html>
	<head>
		<link data-n-head="ssr" rel="icon" type="image/image/png" href="./images/favicon-196x196.png" sizes="196x196">
	    <title>DEGENESIS - Home</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		<link rel="stylesheet" type="text/css" href="reset.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="script.js"> </script>
	</head>

	<body id="media">
		<noscript> 
			<style> 
			#loadPage{
				opacity: 0;
				display: none;
				height: 0px;
			} 
			#loadPage svg{
				opacity: 0;
				display: none;
				height: 0px;
			}
			#side-bar-nav{
				display: flex;
			}
			</style>
		</noscript>
		<div id="loadPage">
			<?php include "./images/logo.svg"; ?>
		</div>
		<aside id="side-bar-nav">
			<div id="nav-logo">
				<?php include "./images/logo.svg"; ?>
			</div>
			<div id="nav-section">
				<div>
					<?php include "./images/tipografia.svg"; ?>
				</div>
				<div id="ql-cont">
					<div id="quick-links">
						<a href="https://sixmorevodka.eu.auth0.com/login?state=hKFo2SBxbzBLLTJWSGkwQW9BOG5MUlR1ZV94Qy1vZ05sbm9yR6FupWxvZ2luo3RpZNkgSnJxdmlvUnB6dXVaRnJNWDRRV0hqaXpRbnROUnQ4dmWjY2lk2SBoZDc1bFhDaHJLYUl5QXpMRHdTOGpLdERqS1hxbXNRWQ&client=hd75lXChrKaIyAzLDwS8jKtDjKXqmsQY&protocol=oauth2&response_type=token&redirect_uri=https%3A%2F%2Fdegenesis.com%2Flogin_success&scope=openid%20profile%20email">LOGIN</a>
						<div class="separator" id="nav-sep"></div>
						<a href="https://www.degenesis.com/game">PLAY NOW</a>
					</div>
				</div>
			</div>
			<a id="mini" href="https://www.degenesis.com/"><?php include "./images/tipografia.svg"; ?></a>
		</aside>

		<main id="main-pag">
				<section id="top-part">
					<div id="page-logo-cont">
						<div id="test">
							<?php include "./images/tipografia.svg"; ?>
							<p id="sub-title-logo" class="caps">REBIRTH EDITION</p>
						</div>
					</div>
					<p id="f2p" class="caps">FREE TO PLAY | PRIMAL PUNK RPG</p>
				</section>
				<section id="second-part">
					<div id="welcome">
						<p class="text-down caps">WELCOME TO DEGENESIS</p>
					</div>
					<div id="contrapture-rebirth">
						<img id="rebirth-cover-img" src="./images/rebirth-cover.jpg">
						<?php include "./images/bg-rebirth.svg"; ?>
						<?php include "./images/rebirth-triangle-outer.svg"; ?>
						<?php include "./images/rebirth-triangle-inner.svg"; ?>

						<div id="forms_side_text">
							<div id="whatisdegenesis">
								<p id="whatisdegenesis_title" class="caps">
									<span>WHAT</span>
									<span>IS</span>
									<span>DEGENESIS</span> 
								</p>

								<p>
								DEGENESIS is a critically acclaimed and <span>Free to Play</span> Tabletop RPG, with an international community and cult following. It merges visionary design, intuitive gameplay, and dense worldbuilding, thrusting new Players into an inhospitable future at the close of the 26th century.
								</p>
							</div>
						</div>
						<div id="forms_separator" class="separator"></div>

						<div id="box-links-welcome">
							<a href="https://shop.sixmorevodka.com/" texto="VISIT SHOP" class="ql-boxes"><span>VISIT SHOP</span> <?php include "./images/arrow.svg"?></a>
							<a href="https://degenesis.com/downloads/books/" texto="DOWNLOAD FOR FREE" class="ql-boxes"><span>DOWNLOAD FOR FREE </span> <?php include "./images/arrow.svg" ?></a>
							<a href="https://degenesis.com/game" texto="LEARN MORE" class="ql-boxes"><span>LEARN MORE</span><?php include "./images/arrow.svg" ?></a>
						</div>
					</div>

					
				</section>
				<section id="hometeaser">
					<div id="hometeaser-txt">
						<h3>Esathon</h3>
						<p><span>Eshaton.</span> That’s what they call the end of the world. The day when fire rained from the Heavens, burning the land, scorching the people. The planet trembled, heaving in pain like a feverish person in agony. And though Earth endured, it was forever changed.</p>
					</div>
				</section>
				<section id="homecultures">
					<article>
						<section id="homecultures_upper">
							<div id="title-left">
								<span>07</span>
								<span><div class="separator"></div></span>
								<span>Cultures</span>
							</div>
							<p>Seven Cultures rose from the ashes to dominate the post apocalyptic world of Degenesis. All of them follow their own ideals and traditions, and each is vying for power while facing threats beyond human understanding.</p>
						</section>
					</article>

					<article id="homeslider">
						<div id="slider_hc">
							<img src="./images/africa-opener.jpg">
							<img src="./images/jus-calendar-square-final.jpg">
							<img src="./images/franka-opener.jpg">
							<img src="./images/pollen-opener.jpg">
							<img src="./images/balkhan-opener.jpg">
							<img src="./images/hybrispania-opener.jpg">
							<img src="./images/purgare-opener.jpg">
						</div>
					</article>
					<a href="https://degenesis.com/world/cultures/" id="etw" class="ql-boxes"><p>Explore the world</p> <?php include "./images/arrow-up.svg" ?></a>
				</section>
				<section id="homebooks">
					<h2>
						<span>UPCOMING</span>
						<span>RELEASES</span>
					</h2>

					<article id="homebooks-container">
						<div class="hb-item">
							<div class="hb-image-container">
								<img src="./images/lex-talionis-cover.jpg" class="hb-img">
							</div>
							<div class="hb-info-container">
								<span>Lex Talionis</span>
								<div class="hb-info">
									<div class="lines">
										<div class="line-spaces"></div>
										<div class="line-spaces"></div>
										<div class="line-spaces"></div>
										<div class="line-spaces"></div>
										<div class="line-spaces"></div>
									</div>
									<ul>
										<li class="line-spaces"><p>Writing: <span>100%</span></p></li>
										<li class="line-spaces"><p>Art: <span>100%</span></p></li>
										<li class="line-spaces"><p>Layout: <span>100%</span></p></li>
										<li class="line-spaces"><p>Proofing: <span>100%</span></p></li>
										<li class="line-spaces"><p>Print: <span>30%</span></p></li>
									</ul>
								</div>
								<div class="hb-qls">
									<a id="special-arrow" href="https://www.degenesis.com/" class="ql-boxes hb-links">Pre-Order <?php include "./images/arrow.svg" ?></a>
									<a href="https://www.degenesis.com/" class="ql-boxes hb-links">Book <?php include "./images/arrow.svg" ?></a>
								</div>
							</div>
						</div>
						<div class="hb-item">
							<div class="hb-image-container">
								<img src="./images/exalters-cover.jpg" class="hb-img">
							</div>
							<div class="hb-info-container">
								<span>Exalters</span>
								<div class="hb-info">
									<div class="lines">
										<div class="line-spaces"></div>
										<div class="line-spaces"></div>
										<div class="line-spaces"></div>
										<div class="line-spaces"></div>
										<div class="line-spaces"></div>
									</div>
									<ul>
										<li class="line-spaces"><p>Writing: <span>100%</span></p></li>
										<li class="line-spaces"><p>Art: <span>100%</span></p></li>
										<li class="line-spaces"><p>Layout: <span>100%</span></p></li>
										<li class="line-spaces"><p>Proofing: <span>100%</span></p></li>
										<li class="line-spaces"><p>Print: <span>0%</span></p></li>
									</ul>
								</div>
								<div class="hb-qls">
									<a href="https://www.degenesis.com/" class="ql-boxes hb-links">Pre-Order <?php include "./images/arrow.svg" ?></a>
									<a href="https://www.degenesis.com/" class="ql-boxes hb-links">Book <?php include "./images/arrow.svg" ?></a>
								</div>
						</div>
					</article>
					<a href="https://degenesis.com/downloads/books/" class="ql-boxes spaced">EXPLORE ALL BOOKS <?php include "./images/arrow-up.svg" ?></a>
				</section>
				<section id="trailers">
					<h1>TRAILER</h1>

					<div>
						<iframe 
							width="888" 
							height="500" 
							src="https://www.youtube.com/embed/0Tw3KaMr8wk?autoplay=1&muted=1" 
							frameborder="0" 
							allow="autoplay; encrypted-media" 
							allowfullscreen
							style="border: none;">
						</iframe>
					</div>
					<a href="https://degenesis.com/downloads/multimedia/" class="ql-boxes spaced">EXPLORE MULTIMEDIA <?php include "./images/arrow-up.svg" ?></a>
				</section>
				<section id="support-us">
					<div> <!--LEFT SIDE -->
						<h2>SUPPORT US</h2>
						<p>Degenesis is made possible by a small and committed group of artists. To keep the game alive and allow for more free content in the future, we depend on the support of our fans.</p>
					</div>
					<div> <!--RIGHT SIDE -->
						<div id="support-header">
							<span>Choose amount</span>
							<div id="header-icons">
								<i class="fa fa-lock"></i>
								<i class="fa fa-circle"></i>
								<i class="fa fa-circle-o"></i>
								<i class="fa fa-circle-o"></i>
							</div>
						</div>
						<fieldset id="support-plan">
							<button id="one-time" class="selection-button selected">One-time</button>
							<button id="monthly" class="selection-button">Monthly</button>
						</fieldset>
						<div id="amounts">
							<div>
								<input type="checkbox">
								<div class="recommended">
									<span>
										$10
									</span>
									<span>
										Support our troops in Franka
									</span>
								</div>
							</div>
							<div>
								<input type="checkbox">
								<div class="recommended">
									<span>
										$50
									</span>
									<span>
										Secure the borders of the Protectorate
									</span>
								</div>
							</div>
							<div>
								<input type="checkbox">
								<div class="recommended">
									<span>
										$<input type="text" placeholder="Custom amount">
									</span>
									<span>
										Enter custom amount
									</span>
								</div>
							</div>
							<div id="donating-towards">
									<label>Donating towards</label>
									<select class="ql-boxes">
										<option value="Choose One">Choose One</option>
										<option value="Ferran Sanchis">Ferran Sanchis</option>
										<option value="Si vols donar-me">Si vols donar-me</option>
										<option value="Per mi encantat">Per mi encantat</option>
									</select>
							</div>
						</div>
						<button>NEXT</button>
					</div>
				</section>
				<footer>
					<div id="top-left">
						<?php include "./images/smv-logo.svg" ?>
						<span>
							<p>SIXMOREVODKA STUDIO GMBH</p>
							<p>Boxhagener Strasse 16</p>
							<p>10245 Berlin, Germany</p>
							<p><a href="tel:00493076231031">Phone: +49 (0) 30 / 76231031</a></p>
							<p><a href="https://www.sixmorevodka.com">www.sixmorevodka.com</a></p>
						</span>
					</div>
					<div id="top-right">
						<div class="footer-creds">
							<p>PUBLISHER</p>
							<p>Ferran Sanchis Armesto</p>
						</div>
						<div class="footer-creds">
							<p>DEGENESIS BY</p>
							<p>Marko Djurdjevic, Christian Günther</p>
						</div>
						<div class="footer-creds">
							<p>CREATIVE DIRECTOR</p>
							<p>Marko Djurdjevic</p>
						</div>
						<div class="footer-creds">
							<p>PRODUCTION</p>
							<p>Marko Djurdjevic, Erwan Roudaut, Jerzy Ferdyn</p>
						</div>
					</div>
					<div id="footer-bottom">
						<div>
							<span>General inquiries:</span>
							<a href="mailto:info@sixmorevodka.com">info@sixmorevodka.com</a>
						</div>
						<div>
							<span>COPYRIGHT © 2021 -</span>
							<span>SIXMOREVODKA - Imprint</span>
						</div>
						<div>
							<span>Website by</span>
							<a href="https://github.com/fsarmesto">
								<?php include "./images/credits.svg" ?>
							</a>
						</div>
					</div>
				</footer>
		</main>		
	</body>
</html>