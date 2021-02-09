<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Restaurant</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="/css/app.css" />
		<script src="/js/app.js"></script>
	</head>
	<body>
		<nav class="container mx-auto flex items-center justify-between py-4">
			<div>
				<img src="/img/logo1.png" alt="logo" />
			</div>
			<div>
				<ul class="flex items-center">
					<li class="ml-6"><a class="ml-6" href="/"> Menu </a></li>
					<li class="ml-6"><a href="#"> offers </a></li>
					<li class="ml-6"><a href="/register"> Register </a></li>
					<li class="ml-6"><a href="/login"> Login </a></li>
					<li class="ml-6">
						<a href="/cart" class="inline-block px-4 py-2 rounded-full flex item-center">
						<span id="cartCounter" class="text-white font-bold pr-2">
								0
						</span>
							<img src="/img/cart.png" alt="" />
						</a>
					</li>
				</ul>
			</div>
		</nav>
        @yield("content")
		<script src="/js/app.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>		
		
		<script >
      function incrementcart(id) {
		  let count=parseInt(document.getElementById("cartCounter").innerHTML)+1;
		  document.getElementById("cartCounter").innerHTML = count;	 
		  
		  const url= '/addto-cart/' + id;
		  alert(url);
		  axios.get(url);
		  
      }
    </script>
	</body>
</html>
