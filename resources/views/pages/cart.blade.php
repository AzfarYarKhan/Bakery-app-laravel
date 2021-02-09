@extends('layouts.app')

@section('content')
<section class="cart py-16">
	<div class="order container mx-auto w-1/2">
		<div class="flex items-center border-b border-gray-300  pb-4 ">
			<img src="/img/cart-black.png" alt="" />
			<h1 class="font-bold ml-4 text-2xl">Order summary</h1>
		</div>
		@foreach($storeditems as $storeditem)
		<div class="pizza-list">
			<div class="flex items-center my-8">
				<img class="w-24" src="/img/{{$storeditem->image}}" alt="" />
				<div class="flex-1 ml-4">
					<h1>{{$storeditem->name}}</h1>
					<span> {{$storeditem->size}}</span>
				</div>
				<span class="flex-1">{{$cart[$storeditem->id]}}pcs</span>
				<span class="font-bold  text-lg"
					>RS {{$cart[$storeditem->id] * $storeditem->price}}</span>
			</div>
		</div>
		@endforeach
		<hr />
		<div class="text-right py-4">
			<div>
				<span class="text-lg font-bold">Total Price</span>
				<span class="amount text-2xl font-bold ml-2">
				 {{$cart['totalprice']}} 
				</span>
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
				</form>
			</div>
			<a
				href=""
				class="inline-block cursor-pointer btn-primary px-6 py-2 rounded-full text-white font-bold mt-6"
				>Login to continue
			</a>
		</div>
	</div>
</section>
@endsection