@foreach($people as $i => $person)
	@if ($i % 2 == 0)
	<div class="row">
		<div class="col s6">
		    <a href="#"><img class="responsive-img" src="css/images/header_people.jpg"></a>
		</div>

		<div class="col s6">
			<div class="row intro_text_block">
				<div class="col s12">
		    		<!--<p id="">{{ str_limit($person->first_name, 100) }}</p>-->
		    		<p id="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at odio non nisl elementum iaculis. Pellentesque pretium, dui eget mattis tempor, sem purus efficitur ligula, quis maximus mi lectus ac lectus.</p>
				</div>

				<div class="col s12">
					<a id="specific_person" href="{!! url('persons', $person->id) !!}"><p>Continue Reading</p></a>
				</div>
			</div>
		</div>
	</div>
    @else
	<div class="row">
		<div class="col s6">
			<div class="row intro_text_block">
				<div class="col s12">
	    			<p id="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at odio non nisl elementum iaculis. Pellentesque pretium, dui eget mattis tempor, sem purus efficitur ligula, quis maximus mi lectus ac lectus.</p>
				</div>

				<div class="col s12">
		    		<a id="specific_person" href="{!! url('persons', $person->id) !!}"><p>Continue Reading</p></a>
				</div>
			</div>
		</div>

		<div class="col s6">
		    <a href="#"><img class="responsive-img" src="css/images/header_people.jpg"></a>
		</div>
	</div>
    @endif
@endforeach