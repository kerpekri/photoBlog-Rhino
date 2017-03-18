@foreach($people as $i => $person)
	@if ($i % 2 == 0)
	<div class="row">
		<div class="col s6">
		    <a href="#"><img class="responsive-img" src="css/images/header_people.jpg"></a>
		</div>

		<div class="col s6">
			<div class="row">
				<div class="col s12">
		    		<p id="">{{ str_limit($person->first_name, 100) }}</p>
				</div>

				<div class="col s12">
		    		<p id="">Continue Reading...</p>
				</div>
			</div>
		</div>
	</div>
    @else
	<div class="row">
		<div class="col s6">
			<div class="row">
				<div class="col s12">
		    		<p id="">{{ str_limit($person->last_name, 100) }}</p>
				</div>

				<div class="col s12">
		    		<p id="">Continue Reading...</p>
				</div>
			</div>
		</div>
		
		<div class="col s6">
		    <a href="#"><img class="responsive-img" src="css/images/header_people.jpg"></a>
		</div>
	</div>
    @endif
@endforeach