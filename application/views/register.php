<div class="container">
    <div class="row">        
            <div class="col-md-10 offset-lg-1">
                
                <div class="register col-md-12">
                <h1>Register</h1>
                    <?php echo form_open_multipart('users/add_user'); ?>
                    <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <div class="form-group row">
                            <div class="col-md-6">
                                                                
                                <label for="firstName">First Name</label>
                                
                                <input class="form-control" id="firstName" name="firstName" type="text" aria-describedby="basic-addon1"  placeholder="First Name" value="<?php echo set_value('firstName'); ?>"/>
                            </div>
                            <div class="col-md-6">
                            <label for="lastName">Last Name</label>
                                <input class="form-control" id="lastName" name="lastName" type="text" aria-describedby="basic-addon1"  placeholder="Last Name" value="<?php echo set_value('lastName'); ?>"/>
                                
                            </div>                            
                        </div>                    
                        <div class="form-group row">
                            <div class="col-md-6">
                            <label for="login">Login Name</label>
                                <input class="form-control" id="login" name="login" type="text" aria-describedby="basic-addon1"  placeholder="Username" value="<?php echo set_value('login'); ?>"/>
                            </div>
                            <div class="col-md-6">
                            <label for="email">Email Address</label>
                                <input class="form-control" id="email" name="email" type="text" aria-describedby="basic-addon1"  placeholder="Email Address" value="<?php echo set_value('email'); ?>"/>
                            </div>                            
                        </div>                    
                        <div class="form-group row">
                            <div class="col-md-6">
                            <label for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password" aria-describedby="basic-addon1"  placeholder="Password"/>
                            </div>
                            <div class="col-md-6">
                            <label for="passwordVerify">Verify Password</label>
                                <input class="form-control" id="passwordVerify" name="passwordVerify" type="password" aria-describedby="basic-addon1"  placeholder="Verify Password"/>
                            </div>                            
                        </div>                    
                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                <div class="form-check">                    
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name='remember'>                            
                                    <small>Accept Terms and Conditions</small>    
                                </div>                            
                                                         
                            </div>                            
                        </div>                    
                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="bio">Bio</label>
                                <textarea class="form-control" id="bio" name="bio" type="text" aria-describedby="basic-addon1"  placeholder="Write Some information about you" cols="20" rows="5" value="<?php echo set_value('bio'); ?>"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-secondary btn-block">Register</button>
                        </div>
                        <div class="col-md-6">
                        <button type="reset" class="btn btn-outline-secondary btn-block">Clear</button>
                        </div>  
                    </div>
                    </form>
                </div> <!-- login-form -->
            </div> <!-- form col-md-4 -->    
    </div> <!-- row -->
</div> <!-- container -->