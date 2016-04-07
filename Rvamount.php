<!DOCTYPE html>
<html ng-app='app'>
<head>
<link rel="stylesheet" type="text/css" href="./vendor/bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
<style>
    .color-pink{
    background: indigo;
    font-size:20px;
    color:white;
    border-radius: 0;
    border-color: transparent;
}
</style>


</head>
<body style="background:skyblue" ng-controller='mainCtrl'>
    <div style="margin:20px">
        <center>        
                <form name='amtForm' action="update.php" method="post">
                    <div style="margin:20px">
                    USN:
                    <input type="text" name="USN" placeholder=" Enter USN">
                    <br><br>
                    No. of subjects:
                    <select ng-model='noSub' name="sub" >                
                        <option value="0" ng-selected="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>                           
                    </select>

                    <h1 ng-hide='!showAmt'>Amount payable:<bold>{{noSub * 400}}</bold></h1>

                    DD Number
                    <input type="number" name="Account"></input>

                    <br/>

                    <div style="margin:20px">
                        <button ng-click='back()' class="btn btn-default color-pink" name="select" value="back">
                            back
                        </button>
                        <button type="submit" ng-disabled='amtForm.$input' class="btn btn-default color-pink">NEXT</button>                    
                </form>
        </center>
    </div>    
    <script type="text/javascript" src='./vendor/angular/angular.min.js'></script> 
    <script type="text/javascript">
        var app = angular.module("app",[]);
        app.controller("mainCtrl"
            ,function($scope, $window, $location){
                $scope.back = function () {
                    $window.history.back();
                }
                $scope.showAmt = true
                $scope.noSub = 0;
                $scope.totlAmt = 0;
                (function(){
                    $scope.totlAmt = ($scope.noSub * 400).toString();
                })($scope.noSub)
            });
    </script> 
    <script type="text/javascript">
        function next () {
            location.path
        }
    </script> 
</body>
</html>

