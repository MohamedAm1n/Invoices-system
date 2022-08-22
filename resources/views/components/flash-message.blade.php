{{-- @if(session()->has('message'))
    <div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
        class="fixed top-0 left-1/2 transform-translate-x-1/2
    alert alert-outline-success text-black px-48 py-3">
        <p>
            {{session('message')}}
        </p>
    </div>
    @endif --}}

@if(session()->has('message'))
    <div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
           class="alert alert-success" >
	<strong>{{session('message')}}</strong>  
</div>
    @endif
<div class="card">

    	@error('section_name')
		<div  class=" alert alert-solid-danger mg-b-0" role="alert">
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
							
@enderror
                    
</div>
<div class="card">
					
    	@error('description')
		<div  class="alert alert-solid-danger mg-b-0" role="alert">
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror

</div>		