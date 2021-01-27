@extends('layouts.app')

@section('content')
<section class="cart py-16">
	<div class="order container mx-auto w-1/2">
		<div class="flex items-center border-b border-gray-300  pb-4 ">
			<img src="/img/cart-black.png" alt="" />
			<h1 class="font-bold ml-4 text-2xl">Order summary</h1>
		</div>
		<div class="pizza-list">
			<div class="flex items-center my-8">
				<img class="w-24" src="/img/pastry.jpeg"  alt="" />
				<div class="flex-1 ml-4">
					<h1>Pastry</h1>
					<span> Medium</span>
				</div>
				<span class="flex-1">1 pcs</span>
				<span class="font-bold  text-lg">RS 500</span>
			</div>
            <div class="flex items-center my-8">
				<img class="w-24" src="/img/pastry.jpeg"  alt="" />
				<div class="flex-1 ml-4">
					<h1>Pastry</h1>
					<span> Medium</span>
				</div>
				<span class="flex-1">1 pcs</span>
				<span class="font-bold  text-lg">RS 500</span>
			</div>
            <div class="flex items-center my-8">
				<img class="w-24" src="/img/pastry.jpeg"  alt="" />
				<div class="flex-1 ml-4">
					<h1>Pastry</h1>
					<span> Medium</span>
				</div>
				<span class="flex-1">1 pcs</span>
				<span class="font-bold  text-lg">RS 500</span>
			</div>
		</div>
		<hr />
		<div class="text-right py-4">
			<div>
				<span class="text-lg font-bold">Total Amount </span>
				<span class="amount text-2xl font-bold ml-2">RS 1500</span>
			</div>
			<div>
				<form action="" class="mt-12">
					<input
						class="border border-gray-400 p-2 w-1/2 mb-4"
						type="text"
						placeholder="phone number"
					/>
					<input
						class="border border-gray-400 p-2 w-1/2"
						type="text"
						placeholder="Address"
					/>
					<div>
						<!-- <button
							class="btn-primary px-6 py-2 rounded-full text-white font-bold mt-6"
							type="submit"
						>
							Order Now
						</button> -->
					</div>
				</form>
			</div>
			<a
				href=""
				class="inline-block cursor-pointer btn-primary px-6 py-2 rounded-full text-white font-bold mt-6"
				>Login to continue
			</a>
		</div>
	</div>
	<!-- <div class="empty-cart py-16">
		<div class="container mx-auto text-center">
			<h1 class="text-3xl font-bold mb-2">Cart Empty</h1>
			<p class="text-gray-500 text-lg mb-12">
				you haven't ordered yet <br />
				go to mainpage to place order
			</p>
			<img class="w-2/5 mx-auto" src="/img/empty-cart.png" alt="empty-cart" />
			<a
				href="/"
				class="inline-block px-6 py-2 rounded-full btn-primary text-white font-bold mt-12"
				>Go Back</a
			>
		</div>
	</div> -->
</section>
@endsection