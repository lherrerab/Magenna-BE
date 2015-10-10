myApp = angular.module('myAgenda',[]);

myApp.controller('loginController', function($scope,$http)
{
	
	$scope.checkCredentials = function()
	{
		if($scope.validateFields() == true){
			$http({
				method: 'POST',
				url: 'http://localhost/AgendaBackend/myAgenda.php',
				headers: {'Content-Type': 'application/json'},
				params: {service:'login','username':$scope.username,'password':$scope.password}
			}).success(function(data, status, headers, config) {
				console.log(data.username.validation);
			}).error(function(data, status, headers, config) {
				// called asynchronously if an error occurs
				// or server returns response with an error status.
			});
		}
	}
	
	$scope.validateFields = function()
	{
		return true;
	}
	
});

myApp.controller('dashboardController', function($scope,$http)
{
	
	$scope.activateContacts = function()
	{
		$('#divDashboard').hide();//modal('hide');
		$('#divAgenda').hide();//modal('hide');
		$('#divNotes').hide();//modal('hide');
		$('#divContacts').show();//modal('show');
		
		$scope.getContacts();
	}
	
	$scope.addContact = function()
	{
		$http({
			method: 'POST',
			url: 'http://localhost/AgendaBackend/myAgenda.php',
			headers: {'Content-Type': 'application/json'},
			params: {service:'newContact', name :$scope.name, phone: $scope.phone, email: $scope.email}
		}).success(function(data, status, headers, config) {			
			console.log(data.data);
			$('#modalCreate').modal('hide');
			$scope.formCreate.$setPristine();			
		}).error(function(data, status, headers, config) {
			// called asynchronously if an error occurs
			// or server returns response with an error status.
		});	
	}
	
	$scope.getContacts = function()
	{
		$http({
			method: 'POST',
			url: 'http://localhost/AgendaBackend/myAgenda.php',
			headers: {'Content-Type': 'application/json'},
			params: {service:'allContants','username':$scope.username}
		}).success(function(data, status, headers, config) {
			//$scope.contacts = data.data;
		}).error(function(data, status, headers, config) {
			// called asynchronously if an error occurs
			// or server returns response with an error status.
		});
	}
	
	$scope.formatTime = function(utcDate) { return moment(utcDate).format("MMddYYYY"); }
	
});
