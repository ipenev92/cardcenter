@extends('layouts.app')

@section('content')
<h2>Purchases</h2>
<div class="col text-center">
		<button ><h2><a href="{{route('purchases')}}" >Purchases</a></h2></button> - <button><h2><a href="{{route('sales')}}">Sales</a></h2></button>
	</div>
<div class="flex-container">
	<div>
		<table id="info-card">
			<th>Card Name</th>
			<th>Seller</th>
			<th>Product Information</th>
			<th>Price</th>
			<th>Quantity</th>
			@foreach($purchases as $purchase)
							@switch($purchase->language)
								@case("English")
									@php ($flag = "https://www.countryflags.io/gb/flat/64.png")
									@break
								@case("German")
									@php ($flag = "https://www.countryflags.io/de/flat/64.png")
									@break
								@case("French")
									@php ($flag = "https://www.countryflags.io/fr/flat/64.png")
									@break
								@case("Spanish")
									@php ($flag = "https://www.countryflags.io/es/flat/64.png")
									@break
								@case("Italian")
									@php ($flag = "https://www.countryflags.io/it/flat/64.png")
									@break
								@case("Japanese")
									@php ($flag = "https://www.countryflags.io/jp/flat/64.png")
									@break
								@case("Chinese")
									@php ($flag = "https://www.countryflags.io/cn/flat/64.png")
									@break
							@endswitch
				<tr>
					<td>{{$purchase->card_name}}</td>
					<td>{{$purchase->seller}}</td>
					<td><span>{{$purchase->condition}}</span><img class="flag" src="{{$flag}}"></td>
					<td>{{$purchase->price_unit}}€</td>
					<td>{{$purchase->t_quantity}}</td>
				</tr>
			@endforeach
		</table>
	</div>
</div>
@stop