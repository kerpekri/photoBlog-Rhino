@foreach($people as $person)
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
@endforeach