<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <script src="{{ URL::asset('plugin/jquery-3.1.1/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('plugin/bootstrap-3.3.0/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('plugin/bootstrap-3.3.0/bootstrap.min.css') }}">

        <script type="text/javascript">
            
            $(function(){
                $("#loginButton").click(function(){

                    $.ajax({
                         url:'/login',
                         type:'post',
                         data:{
                            username:$('#username').val(),
                            password:$('#password').val()
                         },
                         success: function(data){
                            console.log(data);
                            if(data.code==200){
                                window.location.href="/admin";
                            }else{
                                window.location.href="/login";
                            }
                           
                                  
                         }
                    });
                });

            });


        </script>


    </head>
    <body>
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal">
                <div class="form-group">
                  <!--   <label for="firstname" class="col-sm-2 control-label">名字</label> -->
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="username" id="username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <input type="password" class="form-control" placeholder="password" id="password">
                    </div>
                </div>
                <input type='button' class="btn btn-default" id="loginButton" value='Submit'>
              </form>
            </div>

             </div>
        </div>

    </body>
</html>
