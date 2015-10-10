@extends('layout.dashboard')

@section('sidebar')
            			<li class="active"><a href="index">Dashboard <span class="sr-only">(current)</span></a></li>
            			<li><a href="contacts" ng-click="activateContacts()">Contacts</a></li>
            			<li><a href="agenda">Agenda</a></li>
            			<li><a href="notes">Notes</a></li>
@stop

@section('content')     

@stop