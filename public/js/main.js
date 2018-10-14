// Adding new timelines

   //  var tall = document.getElementById('tall');
    
   //  var timelines = document.getElementById('timelines');

   //  tall.on('click', function(e){
   // e.preventDefault();
   //  timelines.innerHTML += '<div class="container-fluid"><div class="row"><div class="col-md-8"><div class="form-group my-2"><input type="text" class="form-control" name="timeline[]" placeholder="Timeline"/></div></div><div class="col-md-4"><div class="form-group my-2"><input type="date" class="form-control" name="date[]" placeholder="Date"/></div></div></div></div>';
   // // timelines.lastchild.innerHTML ='<input type="submit" value="Submit" class="btn btn-primary" />';
   //  });


    //Ajax functionalities
	//$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
	     

    ///SEARCH

    $('#search').on('keyup',function(){
    	//alert('Hello');
		$value=$(this).val();


		//$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
		var newform = $('.form-result');

		$.ajax({

		type : 'get',

		url : '/search',

		data:{'search':$value},
		complete:function  () {
			// body...
		
		//newform.append('<div class="panel-body"></div>');
		},
		success:function(data){

		
		newform.html(data);

		}

});



});

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
