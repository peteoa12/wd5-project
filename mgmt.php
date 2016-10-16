<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="assets/css/main.min.css" rel="stylesheet">

    <!-- Source Code Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:300,400" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Logo/Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Upload</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Log out</a></li>
                    <li><a href="#">Register</a></li>
                    <form class="navbar-form navbar-left">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div><!-- end container fluid -->
    <div class="container">
        <div class="row">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Sign in</button>
            </div>
          </div>
        </form>
        </div><!-- end row -->
        <div class="row">
            <nav aria-label="Page navigation">
              <ul class="pagination pull-right">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div><!-- end row -->
    </div><!-- end container -->
    <div id="grid-view" class="wrapper">
        <div class="product-container">

            <a href="#modular" class="product product--hover product-one">
                <figure>
                    <h2>Modular</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-two">
                <figure>
                    <h2>Semi-Modular</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-three">
                <figure>
                    <h2>Little Phatty</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-four">
                <figure>
                    <h2>mini-moog</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-five">
                <figure>
                    <h2>minitaur</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-six">
                <figure>
                    <h2>sub phatty</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-seven">
                <figure>
                    <h2>theremin</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-eight">
                <figure>
                    <h2>taurus</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-nine">
                <figure>
                    <h2>500 series</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-ten">
                <figure>
                    <h2>fooger</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-eleven">
                <figure>
                    <h2>mini-fooger</h2>
                </figure>
            </a>
            <a href="#modular" class="product product--hover product-twelve">
                <figure>
                    <h2>controllers</h2>
                </figure>
            </a>
        </div>
        <!-- END PRODUCT CONTAINER -->
    <hr>
    </div>
    <!-- end susy wrapper -->
    <footer class="footer">
        <div class="footer-container">
            <p>Copyrite Time Suck 2016 &#169; </br>
            <span id="clock">10/10/16</span></p>
        </div>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
   <!--  <script src="assets/js/dropdown.js"></script> -->
    <script type="assets/js/main.js"></script>
</body>

</html>