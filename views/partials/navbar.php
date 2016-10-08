<!--partial view for navbar-->
<!-- Navigation -->


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Kitchen Kingdom</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/ads/index">Items</a>
                </li>
                <li>
                    <?php if(!Auth::check()){ ?>
                        <a href="/users/signup">Sign Up</a>
                    <?php } ?>
                </li>
                <li>
                    <?php if(Auth::check()){?>
                        <a href="/ads/create">Sell Item</a>
                    <?php } ?>
                </li>
                <li>
                    <?php if(Auth::check()){ ?>
                      <a href="/users/profile">Profile</a>
                    <?php } ?>
                </li>
                <li>
                    <?php if(!Auth::check()){ ?>
                        <a href="/users/login">Login</a>
                    <?php }else { ?>
                        <a href="/users/logout">Logout</a>
                    <?php } ?>
                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>