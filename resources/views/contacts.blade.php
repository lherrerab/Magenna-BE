@extends('layout.dashboard')

@section('sidebar')
            			<li><a href="index">Dashboard <span class="sr-only">(current)</span></a></li>
            			<li class="active"><a href="#" ng-click="activateContacts()">Contacts</a></li>
            			<li><a href="agenda">Agenda</a></li>
            			<li><a href="notes">Notes</a></li>
@stop

@section('content')        		
        		
        		<div id="divContacts" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">        			
          			<h1 class="page-header">
          				Contacts          				
          			</h1>
          			
					<div class="table-responsive">
            			<table class="table table-condensed">
             				<thead>
             					<tr>
             						<th colspan="5">
             							<button title="Create new member" class="btn" data-toggle="modal" data-target="#modalCreate">
											<span class="glyphicon glyphicon-user"></span> New Member
										</button>
             						</th>
             					</tr>
                				<tr>
                  					<th>#</th>
                  					<th>Name</th>
                  					<th>Phone</th>
                  					<th>Email</th>
                  					<th>Favorite</th>
                				</tr>
              				</thead>
              				<tbody>
              					<tr>

              					</tr> 
              				</tbody>
            			</table>          			
        			</div>
        		</div>
  @stop