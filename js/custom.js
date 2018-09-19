$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '8286401205', //php variable inputed by users
        limit: 12, 
        resolution: 'standard_resolution',
        accessToken: '8286401205.1677ed0.ddb59e662eb349db8a471ade8feb661f', //not important
        sortBy: 'most-recent', 
        template: '<label><b>Tags</b>: {{model.tags}}</label><br/><label>Liked by <b>{{model.likes.count}}</b> people</label>'
            });

    userFeed.run();



});