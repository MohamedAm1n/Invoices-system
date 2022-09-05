@if(session()->has('message'))
    <div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
    class="alert alert-success align-middle text-center" >
		<strong>{{session('message')}}</strong>  
</div>
    @endif
<div class="card">

    	@error('section_name')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
							
@enderror
                    

					
    	@error('description')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror


    	@error('product_name')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror


					
    	@error('product_description')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror


@error('section_id')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror


@error('invoice_number')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror
@error('invoice_date')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror
@error('due_date')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror
@error('amount_collection')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror
@error('amount_commission')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror
@error('discount')
		<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show"
			class="alert alert-danger align-middle text-center" >
			<button aria-label="Close" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span></button>
			<strong>{{ $message }}</strong>
		</div>	
					
@enderror





































</div>		