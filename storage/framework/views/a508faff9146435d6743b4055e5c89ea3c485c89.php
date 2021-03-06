<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Seven Koncept</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="profile">Profile </a></li>
          <li class="active"><a href="users">View List </a></li>
        </ul>
        
    
      
        <ul class="nav navbar-nav navbar-right">
          <?php if(Session::has('user')): ?>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo e(Session::get('user')['name']); ?>

            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
            <?php else: ?>
            <li><a href="/login">Login</a></li>
            <li><a href="/sign_up">Sign Up</a></li>
            <?php endif; ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <?php /**PATH C:\xampp\htdocs\Laravel 8\Seven-Koncepts\resources\views/header.blade.php ENDPATH**/ ?>