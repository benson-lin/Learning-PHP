<!DOCTYPE html>
<html>
    <head>
        <title>Test CRUD</title>
        <script src="{{ URL::asset('plugin/jquery-3.1.1/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('plugin/bootstrap-3.3.0/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('plugin/bootstrap-3.3.0/bootstrap.min.css') }}">

        <script type="text/javascript">
            
            $(function(){

                $("#testInsert").click(function(){

                    $.ajax({
                         url:'/testInsert',
                         dataType:'json',
                         success: function(data){
                           $('#content').text(JSON.stringify(data));
                                  
                         }
                    });
                });

              $("#testUpdate").click(function(){

                    $.ajax({
                         url:'/testUpdate',
                         dataType:'json',
                         success: function(data){
                           $('#content').text(JSON.stringify(data));
                                  
                         }
                    });
                });

              $("#testDelete").click(function(){

                    $.ajax({
                         url:'/testDelete',
                         dataType:'json',
                         success: function(data){
                           $('#content').text(JSON.stringify(data));
                                  
                         }
                    });
                });
                $("#testSelectAll").click(function(){

                    $.ajax({
                         url:'/testSelectAll',
                         dataType:'json',
                         success: function(data){
                           $('#content').text(JSON.stringify(data));
                                  
                         }
                    });
                });

                $("#testSelectOne").click(function(){

                    $.ajax({
                         url:'/testSelectOne',
                         dataType:'json',
                         success: function(data){
                           $('#content').text(JSON.stringify(data));
                                  
                         }
                    });
                });

                $("#testSelectOneColumn").click(function(){

                    $.ajax({
                         url:'/testSelectOneColumn',
                         dataType:'json',
                         success: function(data){
                           $('#content').text(JSON.stringify(data));
                                  
                         }
                    });
                });


                $("#testCount").click(function(){

                    $.ajax({
                         url:'/testCount',
                         dataType:'json',
                         success: function(data){
                           $('#content').text(JSON.stringify(data));
                                  
                         }
                    });
                });
                 $("#testMax").click(function(){

                    $.ajax({
                         url:'/testMax',
                         dataType:'json',
                         success: function(data){
                           $('#content').text(JSON.stringify(data));
                                  
                         }
                    });
                });

                  $("#testAvg").click(function(){

                    $.ajax({
                         url:'/testAvg',
                         dataType:'json',
                         success: function(data){
                           $('#content').text(JSON.stringify(data));
                                  
                         }
                    });
                });

            });
        </script>


    </head>
    <body>

    <div class="btn-group">
      <button type="button" class="btn btn-default" id="testInsert">testInsert</button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-default" id="testUpdate">testUpdate</button>
    </div>

    <div class="btn-group">
      <button type="button" class="btn btn-default" id="testDelete">testDelete</button>
    </div>


     <div class="btn-group">
      <button type="button" class="btn btn-default" id="testCount">testCount</button>
    </div>

    <div class="btn-group">
      <button type="button" class="btn btn-default" id="testMax">testMax</button>
    </div>

    <div class="btn-group">
      <button type="button" class="btn btn-default" id="testAvg">testAvg</button>
    </div>

    <div class="panel panel-default">
      <div class="panel-body" id="content">
      </div>
    </div>

    <br>


    <div class="btn-group"  >
      <button type="button" class="btn btn-default" id="testSelectAll">testSelectAll</button>
    </div>

    <div class="btn-group">
      <button type="button" class="btn btn-default" id="testSelectOne">testSelectOne</button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-default" id="testSelectOneColumn">testSelectOneColumn</button>
    </div>
</html>
