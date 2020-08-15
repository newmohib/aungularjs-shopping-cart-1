
var app = angular.module("myApp",["ngRoute","ngStorage"]);

//  var base_url="http://localhost/others/angular_project/";

app.config(function($routeProvider) {
    $routeProvider.when("/", {
		title:"Home",
        templateUrl : "home.php",
		controller : "homeCtrl"
    }).when("/home", {
		title:"Home",
        templateUrl : "home.php",
        controller : "homeCtrl"
    }).when("/mobile", {
		title:"Mobile",
        templateUrl : "pages/mobile.php",
        controller : "mobileCtrl"
    }).when("/laptop", {
		title:"Laptop",
        templateUrl : "pages/laptop.php",
        controller : "laptopCtrl"
    }).when("/cart", {
		title:"Cart",
        templateUrl : "pages/cart.php",
        controller : "cartCtrl"
    }).when("/checkout", {
		title:"Customer Info",
        templateUrl : "pages/checkout.php",
        controller : "checkoutCtrl"
    }).when("/page4", {
		title:"page4",
        templateUrl : "pages/page4.html",
        controller : "page4Ctrl"
    }).when("/contact_us", {
		title:"Contact Us",
        templateUrl : "pages/contact_us.html",
        controller : "contactUsCtrl"
    }).otherwise({redirectTo:'/'});
});


app.run(['$rootScope','$localStorage', function($rootScope,$localStorage) {
	
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {
        
		$rootScope.title = current.$$route.title;
		$rootScope.base_url=base_url;
		
		if($localStorage.cart==null){
	      $localStorage.cart=[];
	      $localStorage.total=0;		  
	   }
		
		$rootScope.cart=$localStorage.cart; 
	    $rootScope.total=$localStorage.total;
	    $rootScope.count=$localStorage.cart.length;
		
		//==========addItem=========//
		$rootScope.addItem = function (item) {
           	 
		 var id=item.id;
		 var name=item.name;
		 var price=item.new_price;     
		
		var exists=false;
		
		$rootScope.total=0;
        
		angular.forEach($rootScope.cart,function(product,key){
						
			if(id==product.id){				
				exists=true;
				product.qty++;               				
			}
			
			$rootScope.total+=parseFloat(product.price)*parseFloat(product.qty);			    
			$localStorage.total=$rootScope.total;	
			
		});	
				
						
		if(!exists){		
		   var json={'id':id,'name':name,'price':price,'qty':1};	     
		   $rootScope.cart.push(json);		   
		   $rootScope.total+=parseFloat(price);
		   $localStorage.total=$rootScope.total;
		}
		
		$localStorage.cart=$rootScope.cart;
		$rootScope.count=$rootScope.cart.length;
		
		
		
		
    };//end addToCart
		
		
		
		
    });



}]);


app.controller("cartCtrl", function ($rootScope,$scope,$http,$localStorage) { 

    $rootScope.cart=$localStorage.cart; 
	$rootScope.total=$localStorage.total;
	$rootScope.count=$localStorage.cart.length;
	
	
	 $scope.qtyIn=function(item){
		 item.qty++;		
		 $localStorage.total+=parseFloat(item.price);
		 $rootScope.total=$localStorage.total;
	 }
		
	$scope.qtyOut=function(item){
		 	 
		 item.qty--;
		 
		 if(item.qty<=0){
			item.qty=1		   
		 }else{
			 
			 $localStorage.total-=parseFloat(item.price);
			 $rootScope.total=$localStorage.total;
		 }
		 		
	}
	
	
	
	$scope.deleteItem=function(item){
		
		var tmp=$rootScope.cart;
		$rootScope.cart=[];
		$rootScope.total=0;
		 
		 angular.forEach(tmp,function(product,key){
			 
			 if(item!=product.id){
				 var json={'id':product.id,'name':product.name,'price':product.price,'qty':product.qty};
				$rootScope.cart.push(json);				
				$rootScope.total+=parseFloat(product.price*product.qty);				
			 }
			 
			 
		 });
		 
		 $localStorage.cart=$rootScope.cart;
		 $localStorage.total=$rootScope.total;
		 $rootScope.count=$rootScope.cart.length;
	};//DeleteFromCart
	
	

});




//--------------Home---------------
app.controller("homeCtrl", function ($rootScope,$scope,$http,$localStorage) { 
    	
	  $http.get(base_url+"ws/products_json.php?category=1").then(function (response) {
	       
	   $scope.products =response.data;
     });
	 
		  
});


//----------mobile----------//
app.controller("mobileCtrl", function ($rootScope,$scope,$http,$localStorage) {  
  
    $http.get(base_url+"ws/products_json.php?category=2").then(function (response) {
	$scope.products =response.data;
});
	 

});//end mobile controller

//-------------Laptop----------------//
app.controller("laptopCtrl", function ($rootScope,$scope,$http,$localStorage) { 

     $http.get(base_url+"ws/products_json.php?category=3").then(function (response) {
	 $scope.products =response.data;
});
	
	
});

app.controller("checkoutCtrl", function ($rootScope,$scope,$http,$localStorage) { 

        $scope.user = {};     
        $scope.save = function(){ 
		
		      $http.post(base_url+"ws/process_checkout.php",$scope.user).then(function(order) { 
				  		  
				  
				  $http.post(base_url+"ws/process_order_details.php?order_id="+order.data.order_id,angular.toJson($rootScope.cart)).then(function(details) { 
				  $scope.message = "Successully Saved";				  
				  $scope.user.customer_name="";
				  $scope.user.shipping_address="";				  
				  $scope.user.remark="";
				  $localStorage.cart=[];
				  $localStorage.total=0;
				  		 
						  
		      });
				  			  
				  
				  
				  		  
		      }); //then end	
			  	 	 		  
        };//submitForm end		

});

app.controller("rootCtrl", function ($rootScope,$scope,$http) { 
 
});

app.controller('contactUsCtrl', function($scope) {  

 
    
});
