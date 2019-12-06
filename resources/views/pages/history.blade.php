@extends('layouts.app')
@section('content')
<div class="container-fluid app-body">
	<h3>Recent Post Sent To Buffer

	@if($user->plansubs())
		@if($user->plansubs()['plan']->slug == 'proplusagencym' OR $user->plansubs()['plan']->slug == 'proplusagencyy' )
			<a href="https://bufferapp.com/oauth2/authorize?client_id={{env('BUFFER_CLIENT_ID')}}&redirect_uri={{env('BUFFER_REDIRECT')}}&response_type=code" class="btn btn-primary pull-right">Add Buffer Account</a>
		@endif
	@endif

	</h3>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text </th> <th>Time</th> </tr> 
				</thead>
                @forelse($bufferPostings as $data) 
                <tbody>
                
                <tr><th> {{$data->account_service}}</th><th> {{$data->type}}</th><th> {{$data->name}}</th><th> {{$data->post_text}}</th><th> {{$data->created_at}}</th></tr>
                @empty
               
                </tbody>
                @endforelse
                <tfoot>
                </tfoot>
			
			</table>
		</div>
	</div>
</div>
@endsection
