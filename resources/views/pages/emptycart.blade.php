@extends('layouts.app')

@section('content')
<div class="empty-cart py-16">
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
	</div>
@endsection