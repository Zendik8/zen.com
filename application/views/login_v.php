<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Авторизація</h3>
                </div>
                <div class="panel-body">
                    <form method="post" action="<?=base_url('');?>login_c/login" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Ім'я" name="first_name" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Пароль" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Запам'ятати мене
                                </label>
                            </div>
                            <input class="btn btn-info btn-block" type="submit" name="enter" value="Ввійти">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>