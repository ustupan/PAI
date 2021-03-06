<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__) . '/head.html') ?>
<?php include(dirname(__DIR__) . '/navbar.html') ?>


<body>



<div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Register</h2>
                <p>Please enter your data</p>
            </div>
            <form id="Register" action="?page=register" method="POST">

                <?php if(isset($message)): ?>
                    <?php foreach($message as $item): ?>
                        <div><?= $item ?></div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="form-group">
                    <input name="login" type="login" class="form-control" id="inputUsername" placeholder="login" required/>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="email" required/>
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="password" required/>
                </div>
                <div class="form-group">
                    <input name="password_confirmation" type="password" class="form-control" id="inputPassword" placeholder="password confirmation" required/>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-outline-success btn-lg">Sing in</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>