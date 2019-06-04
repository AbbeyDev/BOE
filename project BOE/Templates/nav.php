    <!--Navbar start-->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="myNavbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a href="" class="navbar-brand"><h3 class="site-title">BestOptionEdu.com.ng</h3></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="navbar navbar-nav navbar-right" id="list">
            <li <?php if($title == "Home") echo 'class="active"' ?>><a href="">Home</a></li>
            <li class="dropdown" <?php if($title == "About") echo 'class="active"' ?>><a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">About IJMB</a></li>
                <li class="divider"></li>
                <li class="list"><a href="#">REQUIREMENTS</a></li>
                <li class="divider"></li>
                <li class="list"><a href="#">FEES</a></li>
                <li class="divider"></li>
                <li class="list"><a href="#">GRADING AND SUBJECT COMBINATION</a></li>
              </ul>
            </li>
            <li class="dropdown" <?php if($title == "Registration") echo 'class="active"' ?>><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registration<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="list"><a href="#">HOW TO APPLY</a></li>
                <li class="divider"></li>
                <li class="list"><a href="#">CONFIRM PAYMENT</a></li>
                <li class="divider"></li>
                <li class="list"><a href="#">LOG IN</a></li>
              </ul>
            <li <?php if($title == "Contact") echo 'class="active"' ?>><a href="">Contact</a></li>
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="list"><a href="#">FAQ</a></li>
                <li class="divider"></li>
                <li class="list"><a href="#">ABOUT US</a></li>
                <li class="divider"></li>
                <li class="list"><a href="#">UNIVERSITIES</a></li>
              </ul>
            <li <?php if($title == "News/Blog") echo 'class="active"' ?>><a href="">News/Blog</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
        <!--Navbar ends-->