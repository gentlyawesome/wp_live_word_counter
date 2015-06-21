<div ng-app="WordCounterDemo" ng-controller="DemoCtrl" >
    <h3>Word Counter </h3>
    <textarea id="notesContent" type="text" class="form-control" rows="10" ng-model="notesNode.text" ng-trim="false" maxlength="5000"></textarea>
    <span class="wordCount"> Word Count: {{notesNode.text|wordCounter}}</span>
</div>
