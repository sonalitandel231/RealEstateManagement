<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style type="text/css">
    body 
    {
        background-color: purple;
    }
    #home
    {
        float: right;
    }
</style>>
<body>
    <div id ="home">
        <a href="index.php"><font color="white"><button>HOME</button></font></a>
    </div>
<center>
<section id="landlogin">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Agent Login</h1>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form method="post" action="landlord.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Agent Username:</label>
                                        <input type="text" class="form-control" required="required" name="username" placeholder="Agent Username">
                                    </div>
                                </div>
                                <br />
                                <br />
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Agent Password:</label>
                                        <input type="password" class="form-control" required="required" name="password" placeholder="Agent Password">
                                    </div>
                                    <br />
                                    <br />
                                    <div class="form-group">
                                     <center>   <button type="submit" name="login" class="btn btn-primary btn-lg">LOGIN</button></center>
                                    </div>
                                </div>
                                
                            </div>
                  
                        </form>
                    </div><!--/.col-sm-6-->
                    
                        
                        
            
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->
</center>
</body>
</html>>
