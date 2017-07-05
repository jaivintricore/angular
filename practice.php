<!doctype html>
<html ng-app>
   
   <head>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
   </head>
   
   <body>
      <div>
         <label>Name:</label>
         <input type = "text" ng-model = "myname" placeholder = "Enter a name here">
         <hr />
         
         <h1>Hello {{myname}}!</h1>
      </div>
      
   </body>
</html>
