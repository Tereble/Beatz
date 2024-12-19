<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3 border-bottom">
                    <h5 class="mb-0">Admin Login</h5>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        
                        <div class="row mb-3">
                            <label for="input37" class="col-sm-3 col-form-label">Email Address</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input38" class="col-sm-3 col-form-label"> Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control"  name="password" placeholder=" Password">
                            </div>
                        </div>
                        
                      
                        
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-white px-4" >Submit</button>
                                  
                                </div>
                            </div>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
