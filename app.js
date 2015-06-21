angular.module('WordCounterDemo', [])
    .filter('wordCounter', function () {
        return function (value) {
            if (value && typeof value === 'string') {
                return value.trim().split(/\s+/).length;
            } else {
                return 0;
            }
        };
    })
    .controller('DemoCtrl', function ($scope) {
        $scope.notesNode = {
            text: ''
        };
    });
