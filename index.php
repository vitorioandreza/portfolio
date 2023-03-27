<?php $debug = false; ?><!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta property="og:title" content="Andreza Vitório">
        <meta property="og:site_name" content="Andreza Vitório">

        <meta name="description" content="Desenvolvedora Fullstack">
        <meta property="og:description" content="Desenvolvedora Fullstack">

        <link rel="icon" type="image/png" href="assets/images/favicon.png">
        <link rel="favorite icon" type="image/png" href="assets/images/favicon.png">
        <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"> 

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link rel="preload" as="style" href="assets/initial<?php echo !$debug ? '.min' : ''; ?>.css">
        <link rel="stylesheet" type="text/css" href="assets/initial<?php echo !$debug ? '.min' : ''; ?>.css">
        
		<title>Andreza Vitório - Desenvolvedora Front-end</title>
	</head>
	<body class="scroll-hidden">
		<header class="site-header">
			<nav class="navbar container flex wrap align-center justify-space-between">
				<a href="#inicio" class="brand">
					<h1 class="for-reader">Andreza Vitório - Desenvolvedora Front-end</h1>
				</a>

				<button type="button" aria-label="Abrir menu hamburguer" class="toggle">
					<span></span>
					<span></span>
					<span></span>
				</button>

				<div class="menu">
					<button type="button" aria-label="Fechar menu hamburguer" class="toggle">
						<span></span>
						<span></span>
					</button>

					<ul class="flex wrap align-center justify-end">
						<li><a href="#sobre" modal>Sobre</a></li>
						<li><a href="#projetos">Projetos</a></li>
						<li><a href="#habilidades">Habilidades</a></li>
						<li><a href="#contato">Contato</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<div class="preload">
			<div class="container flex wrap align-center justify-center">
				<div class="block">
					<div class="title">
						<span>Andreza</span>
						<span>Vitorio</span>
					</div>

					<div class="subtitle">
						<span class="dk">Desenvolvedora front-end</span>
						<span class="mb">Dev. front-end</span>
					</div>
				</div>
			</div>
		</div>

		<div id="inicio" class="flex align-center justify-center pos-relative">
			<div class="container">
				<div class="flex column align-items justify-center">
					<div class="block">
						<img src="assets/images/logo-light.svg" alt="Logo Andreza Vitório" width="810" height="93">

						<div class="description dk">
							<svg width="805" height="45" viewBox="0 0 805 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.211844 2.4V43H3.40184V2.4H0.211844ZM11.2318 43C15.1758 43 18.6365 42.1493 21.6138 40.448C24.6298 38.7467 26.9692 36.388 28.6318 33.372C30.3332 30.3173 31.1838 26.76 31.1838 22.7C31.1838 18.64 30.3332 15.102 28.6318 12.086C26.9692 9.03133 24.6298 6.65333 21.6138 4.952C18.6365 3.25066 15.1758 2.4 11.2318 2.4H1.95184V5.59H11.2318C13.7452 5.59 16.0265 5.996 18.0758 6.808C20.1638 7.62 21.9425 8.78 23.4118 10.288C24.8812 11.7573 26.0025 13.5553 26.7758 15.682C27.5878 17.77 27.9938 20.1093 27.9938 22.7C27.9938 25.2907 27.5878 27.6493 26.7758 29.776C26.0025 31.864 24.8812 33.662 23.4118 35.17C21.9425 36.6393 20.1638 37.78 18.0758 38.592C16.0265 39.404 13.7452 39.81 11.2318 39.81H1.95184V43H11.2318ZM40.2962 43H60.4222V39.984H40.2962V43ZM40.2962 5.416H60.4222V2.4H40.2962V5.416ZM40.2962 22.236H59.2622V19.22H40.2962V22.236ZM38.6142 2.4V43H41.8042V2.4H38.6142ZM69.8866 31.284L67.2766 32.908C67.9339 34.8027 68.8619 36.562 70.0606 38.186C71.2593 39.81 72.7479 41.1053 74.5266 42.072C76.3053 43.0387 78.3739 43.522 80.7326 43.522C82.3953 43.522 83.9419 43.2707 85.3726 42.768C86.8033 42.2267 88.0406 41.4727 89.0846 40.506C90.1673 39.5007 90.9986 38.3213 91.5786 36.968C92.1973 35.6147 92.5066 34.1067 92.5066 32.444C92.5066 30.6653 92.1973 29.138 91.5786 27.862C90.9599 26.5473 90.1479 25.426 89.1426 24.498C88.1759 23.57 87.0933 22.7967 85.8946 22.178C84.6959 21.5593 83.5359 21.0373 82.4146 20.612C80.2493 19.8387 78.4319 19.0267 76.9626 18.176C75.4933 17.2867 74.3913 16.3007 73.6566 15.218C72.9219 14.1353 72.5546 12.84 72.5546 11.332C72.5546 9.51466 73.1926 8.00666 74.4686 6.808C75.7446 5.57067 77.5619 4.952 79.9206 4.952C81.6993 4.952 83.1879 5.3 84.3866 5.996C85.5853 6.65333 86.5713 7.48466 87.3446 8.49C88.1566 9.49533 88.7753 10.52 89.2006 11.564L91.9846 9.998C91.4433 8.68333 90.6506 7.40733 89.6066 6.17C88.5626 4.93266 87.2479 3.908 85.6626 3.096C84.1159 2.284 82.2599 1.878 80.0946 1.878C78.0066 1.878 76.1313 2.30333 74.4686 3.154C72.8059 3.966 71.5106 5.126 70.5826 6.634C69.6546 8.10333 69.1906 9.80466 69.1906 11.738C69.1906 13.478 69.5193 14.9667 70.1766 16.204C70.8726 17.4413 71.7619 18.5047 72.8446 19.394C73.9273 20.2447 75.0873 20.9793 76.3246 21.598C77.6006 22.178 78.8186 22.6807 79.9786 23.106C81.5253 23.686 82.9946 24.3627 84.3866 25.136C85.8173 25.8707 86.9773 26.8373 87.8666 28.036C88.7559 29.2347 89.2006 30.82 89.2006 32.792C89.2006 35.0347 88.4466 36.8907 86.9386 38.36C85.4693 39.7907 83.4199 40.506 80.7906 40.506C78.8573 40.506 77.1946 40.1 75.8026 39.288C74.4106 38.4373 73.2313 37.316 72.2646 35.924C71.3366 34.532 70.5439 32.9853 69.8866 31.284ZM101.695 43H121.821V39.984H101.695V43ZM101.695 5.416H121.821V2.4H101.695V5.416ZM101.695 22.236H120.661V19.22H101.695V22.236ZM100.013 2.4V43H103.203V2.4H100.013ZM161.851 2.4V36.388L130.995 0.833997V43H134.185V9.128L165.041 44.566V2.4H161.851ZM188.35 37.142L174.024 2.4H170.428L188.35 44.566L206.272 2.4H202.676L188.35 37.142ZM211.846 22.7C211.846 19.2973 212.561 16.2813 213.992 13.652C215.461 10.984 217.452 8.896 219.966 7.388C222.518 5.84133 225.418 5.068 228.666 5.068C231.914 5.068 234.794 5.84133 237.308 7.388C239.86 8.896 241.851 10.984 243.282 13.652C244.712 16.2813 245.428 19.2973 245.428 22.7C245.428 26.064 244.712 29.08 243.282 31.748C241.851 34.416 239.86 36.5233 237.308 38.07C234.794 39.578 231.914 40.332 228.666 40.332C225.418 40.332 222.518 39.578 219.966 38.07C217.452 36.5233 215.461 34.416 213.992 31.748C212.561 29.08 211.846 26.064 211.846 22.7ZM208.482 22.7C208.482 25.6773 208.984 28.442 209.99 30.994C210.995 33.5073 212.406 35.7113 214.224 37.606C216.041 39.462 218.168 40.912 220.604 41.956C223.078 43 225.766 43.522 228.666 43.522C231.566 43.522 234.234 43 236.67 41.956C239.144 40.912 241.29 39.462 243.108 37.606C244.925 35.7113 246.336 33.5073 247.342 30.994C248.347 28.442 248.85 25.6773 248.85 22.7C248.85 19.7227 248.347 16.9773 247.342 14.464C246.336 11.912 244.925 9.708 243.108 7.852C241.29 5.95733 239.144 4.488 236.67 3.444C234.234 2.4 231.566 1.878 228.666 1.878C225.766 1.878 223.078 2.4 220.604 3.444C218.168 4.488 216.041 5.95733 214.224 7.852C212.406 9.708 210.995 11.912 209.99 14.464C208.984 16.9773 208.482 19.7227 208.482 22.7ZM256.284 2.4V43H276.236V39.984H259.474V2.4H256.284ZM289.737 37.142L275.411 2.4H271.815L289.737 44.566L307.659 2.4H304.063L289.737 37.142ZM314.72 43H334.846V39.984H314.72V43ZM314.72 5.416H334.846V2.4H314.72V5.416ZM314.72 22.236H333.686V19.22H314.72V22.236ZM313.038 2.4V43H316.228V2.4H313.038ZM344.02 2.4V43H347.21V2.4H344.02ZM355.04 43C358.984 43 362.445 42.1493 365.422 40.448C368.438 38.7467 370.778 36.388 372.44 33.372C374.142 30.3173 374.992 26.76 374.992 22.7C374.992 18.64 374.142 15.102 372.44 12.086C370.778 9.03133 368.438 6.65333 365.422 4.952C362.445 3.25066 358.984 2.4 355.04 2.4H345.76V5.59H355.04C357.554 5.59 359.835 5.996 361.884 6.808C363.972 7.62 365.751 8.78 367.22 10.288C368.69 11.7573 369.811 13.5553 370.584 15.682C371.396 17.77 371.802 20.1093 371.802 22.7C371.802 25.2907 371.396 27.6493 370.584 29.776C369.811 31.864 368.69 33.662 367.22 35.17C365.751 36.6393 363.972 37.78 361.884 38.592C359.835 39.404 357.554 39.81 355.04 39.81H345.76V43H355.04ZM383.467 22.7C383.467 19.2973 384.182 16.2813 385.613 13.652C387.082 10.984 389.073 8.896 391.587 7.388C394.139 5.84133 397.039 5.068 400.287 5.068C403.535 5.068 406.415 5.84133 408.929 7.388C411.481 8.896 413.472 10.984 414.903 13.652C416.333 16.2813 417.049 19.2973 417.049 22.7C417.049 26.064 416.333 29.08 414.903 31.748C413.472 34.416 411.481 36.5233 408.929 38.07C406.415 39.578 403.535 40.332 400.287 40.332C397.039 40.332 394.139 39.578 391.587 38.07C389.073 36.5233 387.082 34.416 385.613 31.748C384.182 29.08 383.467 26.064 383.467 22.7ZM380.103 22.7C380.103 25.6773 380.605 28.442 381.611 30.994C382.616 33.5073 384.027 35.7113 385.845 37.606C387.662 39.462 389.789 40.912 392.225 41.956C394.699 43 397.387 43.522 400.287 43.522C403.187 43.522 405.855 43 408.291 41.956C410.765 40.912 412.911 39.462 414.729 37.606C416.546 35.7113 417.957 33.5073 418.963 30.994C419.968 28.442 420.471 25.6773 420.471 22.7C420.471 19.7227 419.968 16.9773 418.963 14.464C417.957 11.912 416.546 9.708 414.729 7.852C412.911 5.95733 410.765 4.488 408.291 3.444C405.855 2.4 403.187 1.878 400.287 1.878C397.387 1.878 394.699 2.4 392.225 3.444C389.789 4.488 387.662 5.95733 385.845 7.852C384.027 9.708 382.616 11.912 381.611 14.464C380.605 16.9773 380.103 19.7227 380.103 22.7ZM434.807 23.628L448.263 43H452.207L438.345 23.628H434.807ZM427.905 2.4V43H431.095V2.4H427.905ZM429.587 5.242H437.185C439.235 5.242 441.052 5.59 442.637 6.286C444.223 6.982 445.46 7.98733 446.349 9.302C447.277 10.6167 447.741 12.2407 447.741 14.174C447.741 16.1073 447.297 17.7507 446.407 19.104C445.518 20.4187 444.261 21.424 442.637 22.12C441.052 22.7773 439.235 23.106 437.185 23.106H429.587V25.948H437.185C439.815 25.948 442.154 25.5033 444.203 24.614C446.291 23.686 447.935 22.3327 449.133 20.554C450.332 18.7753 450.931 16.6487 450.931 14.174C450.931 11.6607 450.332 9.534 449.133 7.794C447.935 6.054 446.291 4.72 444.203 3.792C442.154 2.864 439.815 2.4 437.185 2.4H429.587V5.242ZM461.513 29.37H482.335L481.291 26.354H462.557L461.513 29.37ZM471.837 8.2L479.841 27.572L480.131 28.326L486.163 43H489.759L471.837 0.833997L453.915 43H457.511L463.601 28.094L463.949 27.398L471.837 8.2ZM514.208 5.416H532.014V2.4H514.208V5.416ZM514.208 22.526H531.434V19.51H514.208V22.526ZM512.526 2.4V43H515.716V2.4H512.526ZM547.295 23.628L560.751 43H564.695L550.833 23.628H547.295ZM540.393 2.4V43H543.583V2.4H540.393ZM542.075 5.242H549.673C551.723 5.242 553.54 5.59 555.125 6.286C556.711 6.982 557.948 7.98733 558.837 9.302C559.765 10.6167 560.229 12.2407 560.229 14.174C560.229 16.1073 559.785 17.7507 558.895 19.104C558.006 20.4187 556.749 21.424 555.125 22.12C553.54 22.7773 551.723 23.106 549.673 23.106H542.075V25.948H549.673C552.303 25.948 554.642 25.5033 556.691 24.614C558.779 23.686 560.423 22.3327 561.621 20.554C562.82 18.7753 563.419 16.6487 563.419 14.174C563.419 11.6607 562.82 9.534 561.621 7.794C560.423 6.054 558.779 4.72 556.691 3.792C554.642 2.864 552.303 2.4 549.673 2.4H542.075V5.242ZM571.797 22.7C571.797 19.2973 572.512 16.2813 573.943 13.652C575.412 10.984 577.404 8.896 579.917 7.388C582.469 5.84133 585.369 5.068 588.617 5.068C591.865 5.068 594.746 5.84133 597.259 7.388C599.811 8.896 601.802 10.984 603.233 13.652C604.664 16.2813 605.379 19.2973 605.379 22.7C605.379 26.064 604.664 29.08 603.233 31.748C601.802 34.416 599.811 36.5233 597.259 38.07C594.746 39.578 591.865 40.332 588.617 40.332C585.369 40.332 582.469 39.578 579.917 38.07C577.404 36.5233 575.412 34.416 573.943 31.748C572.512 29.08 571.797 26.064 571.797 22.7ZM568.433 22.7C568.433 25.6773 568.936 28.442 569.941 30.994C570.946 33.5073 572.358 35.7113 574.175 37.606C575.992 39.462 578.119 40.912 580.555 41.956C583.03 43 585.717 43.522 588.617 43.522C591.517 43.522 594.185 43 596.621 41.956C599.096 40.912 601.242 39.462 603.059 37.606C604.876 35.7113 606.288 33.5073 607.293 30.994C608.298 28.442 608.801 25.6773 608.801 22.7C608.801 19.7227 608.298 16.9773 607.293 14.464C606.288 11.912 604.876 9.708 603.059 7.852C601.242 5.95733 599.096 4.488 596.621 3.444C594.185 2.4 591.517 1.878 588.617 1.878C585.717 1.878 583.03 2.4 580.555 3.444C578.119 4.488 575.992 5.95733 574.175 7.852C572.358 9.708 570.946 11.912 569.941 14.464C568.936 16.9773 568.433 19.7227 568.433 22.7ZM647.091 2.4V36.388L616.235 0.833997V43H619.425V9.128L650.281 44.566V2.4H647.091ZM655.958 5.416H666.63V43H669.82V5.416H680.492V2.4H655.958V5.416ZM681.604 29.892H693.204V27.05H681.604V29.892ZM700.046 43H720.172V39.984H700.046V43ZM700.046 5.416H720.172V2.4H700.046V5.416ZM700.046 22.236H719.012V19.22H700.046V22.236ZM698.364 2.4V43H701.554V2.4H698.364ZM760.203 2.4V36.388L729.347 0.833997V43H732.537V9.128L763.393 44.566V2.4H760.203ZM773.13 2.4V43H776.32V2.4H773.13ZM784.15 43C788.094 43 791.554 42.1493 794.532 40.448C797.548 38.7467 799.887 36.388 801.55 33.372C803.251 30.3173 804.102 26.76 804.102 22.7C804.102 18.64 803.251 15.102 801.55 12.086C799.887 9.03133 797.548 6.65333 794.532 4.952C791.554 3.25066 788.094 2.4 784.15 2.4H774.87V5.59H784.15C786.663 5.59 788.944 5.996 790.994 6.808C793.082 7.62 794.86 8.78 796.33 10.288C797.799 11.7573 798.92 13.5553 799.694 15.682C800.506 17.77 800.912 20.1093 800.912 22.7C800.912 25.2907 800.506 27.6493 799.694 29.776C798.92 31.864 797.799 33.662 796.33 35.17C794.86 36.6393 793.082 37.78 790.994 38.592C788.944 39.404 786.663 39.81 784.15 39.81H774.87V43H784.15Z" fill="#DADCE2"/></svg>
						</div>
						<div class="description mb">
							<svg width="427" height="45" viewBox="0 0 427 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.193289 2.4V43H3.38329V2.4H0.193289ZM11.2133 43C15.1573 43 18.618 42.1493 21.5953 40.448C24.6113 38.7467 26.9506 36.388 28.6133 33.372C30.3146 30.3173 31.1653 26.76 31.1653 22.7C31.1653 18.64 30.3146 15.102 28.6133 12.086C26.9506 9.03133 24.6113 6.65333 21.5953 4.952C18.618 3.25066 15.1573 2.4 11.2133 2.4H1.93329V5.59H11.2133C13.7266 5.59 16.008 5.996 18.0573 6.808C20.1453 7.62 21.924 8.78 23.3933 10.288C24.8626 11.7573 25.984 13.5553 26.7573 15.682C27.5693 17.77 27.9753 20.1093 27.9753 22.7C27.9753 25.2907 27.5693 27.6493 26.7573 29.776C25.984 31.864 24.8626 33.662 23.3933 35.17C21.924 36.6393 20.1453 37.78 18.0573 38.592C16.008 39.404 13.7266 39.81 11.2133 39.81H1.93329V43H11.2133ZM40.2776 43H60.4036V39.984H40.2776V43ZM40.2776 5.416H60.4036V2.4H40.2776V5.416ZM40.2776 22.236H59.2436V19.22H40.2776V22.236ZM38.5956 2.4V43H41.7856V2.4H38.5956ZM83.1501 37.142L68.8241 2.4H65.2281L83.1501 44.566L101.072 2.4H97.4761L83.1501 37.142ZM101.892 41.608C101.892 42.188 102.104 42.6907 102.53 43.116C102.955 43.5413 103.458 43.754 104.038 43.754C104.656 43.754 105.159 43.5413 105.546 43.116C105.971 42.6907 106.184 42.188 106.184 41.608C106.184 40.9893 105.971 40.4673 105.546 40.042C105.159 39.6167 104.656 39.404 104.038 39.404C103.458 39.404 102.955 39.6167 102.53 40.042C102.104 40.4673 101.892 40.9893 101.892 41.608ZM136.227 5.416H154.033V2.4H136.227V5.416ZM136.227 22.526H153.453V19.51H136.227V22.526ZM134.545 2.4V43H137.735V2.4H134.545ZM169.314 23.628L182.77 43H186.714L172.852 23.628H169.314ZM162.412 2.4V43H165.602V2.4H162.412ZM164.094 5.242H171.692C173.741 5.242 175.559 5.59 177.144 6.286C178.729 6.982 179.967 7.98733 180.856 9.302C181.784 10.6167 182.248 12.2407 182.248 14.174C182.248 16.1073 181.803 17.7507 180.914 19.104C180.025 20.4187 178.768 21.424 177.144 22.12C175.559 22.7773 173.741 23.106 171.692 23.106H164.094V25.948H171.692C174.321 25.948 176.661 25.5033 178.71 24.614C180.798 23.686 182.441 22.3327 183.64 20.554C184.839 18.7753 185.438 16.6487 185.438 14.174C185.438 11.6607 184.839 9.534 183.64 7.794C182.441 6.054 180.798 4.72 178.71 3.792C176.661 2.864 174.321 2.4 171.692 2.4H164.094V5.242ZM193.815 22.7C193.815 19.2973 194.531 16.2813 195.961 13.652C197.431 10.984 199.422 8.896 201.935 7.388C204.487 5.84133 207.387 5.068 210.635 5.068C213.883 5.068 216.764 5.84133 219.277 7.388C221.829 8.896 223.821 10.984 225.251 13.652C226.682 16.2813 227.397 19.2973 227.397 22.7C227.397 26.064 226.682 29.08 225.251 31.748C223.821 34.416 221.829 36.5233 219.277 38.07C216.764 39.578 213.883 40.332 210.635 40.332C207.387 40.332 204.487 39.578 201.935 38.07C199.422 36.5233 197.431 34.416 195.961 31.748C194.531 29.08 193.815 26.064 193.815 22.7ZM190.451 22.7C190.451 25.6773 190.954 28.442 191.959 30.994C192.965 33.5073 194.376 35.7113 196.193 37.606C198.011 39.462 200.137 40.912 202.573 41.956C205.048 43 207.735 43.522 210.635 43.522C213.535 43.522 216.203 43 218.639 41.956C221.114 40.912 223.26 39.462 225.077 37.606C226.895 35.7113 228.306 33.5073 229.311 30.994C230.317 28.442 230.819 25.6773 230.819 22.7C230.819 19.7227 230.317 16.9773 229.311 14.464C228.306 11.912 226.895 9.708 225.077 7.852C223.26 5.95733 221.114 4.488 218.639 3.444C216.203 2.4 213.535 1.878 210.635 1.878C207.735 1.878 205.048 2.4 202.573 3.444C200.137 4.488 198.011 5.95733 196.193 7.852C194.376 9.708 192.965 11.912 191.959 14.464C190.954 16.9773 190.451 19.7227 190.451 22.7ZM269.11 2.4V36.388L238.254 0.833997V43H241.444V9.128L272.3 44.566V2.4H269.11ZM277.977 5.416H288.649V43H291.839V5.416H302.511V2.4H277.977V5.416ZM303.623 29.892H315.223V27.05H303.623V29.892ZM322.065 43H342.191V39.984H322.065V43ZM322.065 5.416H342.191V2.4H322.065V5.416ZM322.065 22.236H341.031V19.22H322.065V22.236ZM320.383 2.4V43H323.573V2.4H320.383ZM382.221 2.4V36.388L351.365 0.833997V43H354.555V9.128L385.411 44.566V2.4H382.221ZM395.148 2.4V43H398.338V2.4H395.148ZM406.168 43C410.112 43 413.573 42.1493 416.55 40.448C419.566 38.7467 421.906 36.388 423.568 33.372C425.27 30.3173 426.12 26.76 426.12 22.7C426.12 18.64 425.27 15.102 423.568 12.086C421.906 9.03133 419.566 6.65333 416.55 4.952C413.573 3.25066 410.112 2.4 406.168 2.4H396.888V5.59H406.168C408.682 5.59 410.963 5.996 413.012 6.808C415.1 7.62 416.879 8.78 418.348 10.288C419.818 11.7573 420.939 13.5553 421.712 15.682C422.524 17.77 422.93 20.1093 422.93 22.7C422.93 25.2907 422.524 27.6493 421.712 29.776C420.939 31.864 419.818 33.662 418.348 35.17C416.879 36.6393 415.1 37.78 413.012 38.592C410.963 39.404 408.682 39.81 406.168 39.81H396.888V43H406.168Z" fill="#DADCE2"/></svg>
						</div>

						<div class="links flex align-items justify-center">
							<a href="https://github.com/vitorioandreza" target="_blank" rel="noopener" aria-label="Minha conta do Github">
								<i class="icon-github"></i>
							</a>

							<a href="mailto:vitorio.andreza.s@gmail.com" target="_blank" rel="noopener" aria-label="Entre em contato por e-mail">
								<i class="icon-envelope"></i>
							</a>

							<a href="https://wa.me/5571999517448" target="_blank" rel="noopener" aria-label="Entre em contato pelo Whatsapp">
								<i class="icon-whatsapp"></i> 
							</a>

							<a href="https://www.linkedin.com/in/andreza-vitorio-s/" target="_blank" rel="noopener" aria-label="Meu perfil no LinkedIn">
								<i class="icon-linkedin"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<button type="button" class="scroll-down" aria-label="Scroll horizontal para a primeira seção do site" value="#projetos">
				<span></span>
			</button>
		</div>

		<section id="sobre" class="editor">
			<div class="container modal-container pos-relative">
				<button type="button" class="on-close" aria-label="Fechar modal">
					<span></span>
					<span></span>
				</button>

				<div class="modal-content flex wrap align-center justify-space-between">
					<div class="col photo">
						<img src="assets/images/andrezavitorio.jpg" alt="Andreza Vitório" width="576" height="1024" loading="lazy">
					</div>

					<div class="col about">
						<small>Um pouco sobre mim</small>
						<h2>Olá, me chamo Andreza...</h2>

						<p>tenho 23 anos e sou bacharel em Sistemas de Informação pela Unifacs e técnica em Desenvolvimento de Sistemas pelo SENAI. Sempre tive muita curiosidade em saber como as tecnologias e plataformas que usuava quando era mais nova funcionavam então acabei conhecendo a área de Ti e me apaixonando completamente pelo mundo que existe nos bastidores de cada acesso na web.</p>

						<a href="https://drive.google.com/file/d/1JaP2Srnkj_Ic8HUlSmjZ0wy6rsnaMov-/view?usp=sharing" target="_blank" rel="noopener">
							<i class="icon-id-card"></i> Visualizar currículo
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="projetos" class="editor p-default">
			<div class="container">
				<div class="title">
					<small class="animate-fade-in">Projetos</small>
					<h2 class="animate-scroll-up">Conheça um pouco do meu trabalho</h2>
					<p class="animate-scroll-up animate-delay-1">Estes são alguns dos principais projetos que desenvolvi ao longo dos meus 3 anos na área de programação utilizando tecnologias diversas e aprimorando cada vez mais meus conhecimentos.</p>
				</div>

				<div class="cards flex wrap align-center justify-center">
					<div class="card animate-scroll-up">
						<a href="https://quantica3d.com.br/" target="_blank" rel="noopener noreferrer">
							<img src="assets/images/project-quantica-3d.jpg" alt="Thumbnail do site quantica 3d" width="580" height="280" loading="lazy">
							<div class="flex wrap align-center justify-center details">
								<div>
									<h3>Quantica 3D</h3>
									<div class="tech">
										<p>Tecnologias utilizadas:</p>
										<i class="icon-angular"></i>
										<i class="icon-wordpress"></i>
									</div>
									<small>Criação: quantica comunicação</small>
								</div>
							</div>
						</a>
					</div>

					<div class="card animate-scroll-up animate-delay-1">
						<a href="https://hortoboulevard.com.br/" target="_blank" rel="noopener noreferrer">
							<img src="assets/images/project-horto-boulevard.jpg" alt="Thumbnail do site Horto Boulevard" width="580" height="280" loading="lazy">
							<div class="flex wrap align-center justify-center details">
								<div>
									<h3>Horto Boulevard</h3>
								
									<div class="tech">
										<p>Tecnologias utilizadas:</p>
										<i class="icon-html"></i>
										<i class="icon-css"></i>
										<i class="icon-jquery"></i>
										<i class="icon-wordpress"></i>
									</div>

									<small>Criação: quantica comunicação</small>
								</div>
							</div>
						</a>
					</div>

					<div class="card animate-scroll-up animate-delay-2">
						<a href="https://clinicaflorence.com.br/" target="_blank" rel="noopener noreferrer">
							<img src="assets/images/project-clinica-florence.jpg" alt="Thumbnail do site Clínica Florence" width="580" height="280" loading="lazy">
							<div class="flex wrap align-center justify-center details">
								<div>
									<h3>Clínica Florence</h3>

									<div class="tech">
										<p>Tecnologias utilizadas:</p>
										<i class="icon-html"></i>
										<i class="icon-css"></i>
										<i class="icon-bootstrap"></i>
										<i class="icon-jquery"></i>
										<i class="icon-wordpress"></i>
									</div>

									<small>Criação: quantica comunicação</small>
								</div>
							</div>
						</a>
					</div>

					<div class="card animate-scroll-up animate-delay-3">
						<a href="https://lit760.com.br/" target="_blank" rel="noopener noreferrer">
							<img src="assets/images/project-lit-760.jpg" alt="Thumbnail do site Lit 760" width="580" height="280" loading="lazy">
							<div class="flex wrap align-center justify-center details">
								<div>
									<h3>Lit 760</h3>
									<div class="tech">
										<p>Tecnologias utilizadas:</p>
										<i class="icon-html"></i>
										<i class="icon-css"></i>
										<i class="icon-jquery"></i>
									</div>
									<small>Criação: quantica comunicação</small>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="habilidades" class="editor p-default">
			<div class="container">
				<div class="title">
					<small class="animate-fade-in">Ferramentas & habilidades</small>
					<h2 class="animate-scroll-up">Competência profissional</h2>
					<p class="animate-scroll-up animate-delay-1">Estas são algumas ferramentas que aprendi e utilizei para desenvolver meus projetos, cada dia sempre buscar me aperfeiçoar e entregar o melhor resultado possível.</p>
				</div>

				<div class="abilities flex wrap justify-center justify-center">
					<div class="tool animate-scroll-up">
						<img src="assets/images/tool--html5.jpg" alt="Logo HTML" width="215" height="215" loading="lazy">
					</div>
					
					<div class="tool animate-scroll-up animate-delay-1">
						<img src="assets/images/tool--css3.jpg" alt="Logo CSS" width="215" height="215" loading="lazy">
					</div>
					
					<div class="tool animate-scroll-up animate-delay-2">
						<img src="assets/images/tool--javascript.jpg" alt="Logo Javascript" width="215" height="215" loading="lazy">
					</div>
					
					<div class="tool animate-scroll-up animate-delay-3">
						<img src="assets/images/tool--angular.jpg" alt="Logo Angular" width="215" height="215" loading="lazy">
					</div>
					
					<div class="tool animate-scroll-up">
						<img src="assets/images/tool--php.jpg" alt="Logo PHP" width="215" height="215" loading="lazy">
					</div>

					<div class="tool animate-scroll-up animate-delay-1">
						<img src="assets/images/tool--wordpress.jpg" alt="Logo Wordpress" width="215" height="215" loading="lazy">
					</div>
					
					<div class="tool animate-scroll-up animate-delay-2">
						<img src="assets/images/tool--mysql.jpg" alt="Logo Mysql" width="215" height="215" loading="lazy">
					</div>

					<div class="tool animate-scroll-up animate-delay-3">
						<img src="assets/images/tool--git.jpg" alt="Logo Git" width="215" height="215" loading="lazy">
					</div>
				</div>

				<div class="others txt-center animate-fade-in animate-delay-4">
					<p><strong>Outras ferramentas:</strong> SASS, Bootstrap, JQuery, SplideJS, Owl Carousel, Photoswipe, ACF Plugin, Figma e Photoshop.</p>
				</div>
			</div>
		</section>


		<section id="contato" class="editor p-default">
			<div class="container">
				<div class="title content">
					<small class="animate-fade-in">Como eu posso te ajudar</small>
					<h2 class="animate-scroll-up">Curtiu? Então entre em contato</h2>

					<div class="links flex wrap align-center justify-center">
						<div class="animate-fade-in">
							<a href="https://github.com/vitorioandreza" target="_blank" rel="noopener" aria-label="Ver projetos do Github">
								<i class="icon-github"></i>
								<span class="text">vitorioandreza</span>
							</a>
						</div>

						<div class="animate-fade-in animate-delay-1">
							<a href="mailto:vitorio.andreza.s@gmail.com" target="_blank" rel="noopener" aria-label="Entre em contato por e-mail">
								<i class="icon-envelope"></i>
								<span class="text">vitorio.andreza.s@gmail.com</span>
							</a>
						</div>

						<div class="animate-fade-in animate-delay-2">
							<a href="https://wa.me/5571999517448" target="_blank" rel="noopener" aria-label="Entre em contato pelo Whatsapp">
								<i class="icon-whatsapp"></i> 
								<span class="text">+55 71.99951-7448</span>
							</a>
						</div>

						<div class="animate-fade-in animate-delay-3">
							<a href="https://www.linkedin.com/in/andreza-vitorio-s/" target="_blank" rel="noopener" aria-label="Entre em contato pelo linkedIn">
								<i class="icon-linkedin"></i>
								<span class="text">Andreza Vitório</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="site-footer">
			<div class="container">
				<div class="flex wrap align-center justify-space-between">
					<p>&copy; Todos os direitos reservados</p>
					<img src="assets/images/logo-dark.svg" alt="" width="250" height="28" loading="lazy">
					<a href="https://github.com/vitorioandreza/Portfolio" target="_blank" rel="noopener">Código fonte</a>
				</div>
			</div>
		</footer>

		<link rel="stylesheet" type="text/css" href="assets/index<?php echo !$debug ? '.min' : ''; ?>.css">
		<script src="assets/library.js"></script>
		<script src="assets/index<?php echo !$debug ? '.min' : ''; ?>.js"></script>
	</body>
</html>