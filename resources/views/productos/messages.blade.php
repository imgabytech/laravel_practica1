
@if (count($errors) >=1)
	
    <div class="col-4 alert alert-danger">    	
        <ul>
            @foreach ($errors->all() as $mensajes)
                <li>{{ $mensajes }}</li>
            @endforeach
        </ul>
    </div>

@endif