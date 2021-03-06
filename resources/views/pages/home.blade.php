@extends('layouts.app')

@section('content')
<section class="hero py-16">
	<div class="container mx-auto flex items-center justify-between">
		<div class="w-1/2">
			<h6 class="text-lg"><em>Are you Hungry?</em></h6>
			<h1 class="text-6xl font-bold">Hurry up!</h1>
			<button
				class="px-6 py-2 rounded-full text-white font-bold mt-4  btn-primary"
			>
				Order Now
			</button>
		</div>
		<div class="w-1/2">
			<img src="/img/cakemain.png" alt="" />
		</div>
	</div>
</section>
<section class="menu container mx-auto py-8">
	<h1 class="text-xl font-bold mb-8">All items</h1>
	<div class="grid grid-cols-4 row-gap-16 col-gap-12">
         	@foreach($bakeryitems as $bakeryitem)
		<div class="w-64">
			<img class="h-40 mb-4 mx-auto" src="/img/{{$bakeryitem->image}}" alt="" />
			<div class="text-center">
				<h2 class="mb-4 text-lg">{{$bakeryitem->name}}</h2>
				<span class="size py-1 px-4 rounded-full uppercase text-xs"
					>{{$bakeryitem->size}}
				</span>
				<div class="flex items-center justify-around mt-6">
					<span class="font-bold text-lg">RS {{$bakeryitem->price}}</span>
					<button
						id="{{$bakeryitem->id}}"
						onclick= "incrementcart(this.id)"
						class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold"
					>
						<span>+</span>
						<span class="ml-4">Add</span>
					</button>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>
@endsection


