<!DOCTYPE html>
<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ecommerce</title>

  <!--Bootstrap Files-->
  <link href = "css/bootstrap.min.css" rel = "stylesheet">
  <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src = "js/bootstrap.js"></script>



  <!--Other Files-->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


  <!--My Loading Scripts-->



  <!--My External Scripts-->

  <link href = "css/Styles.css" rel = "stylesheet">

</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html" style="color:#3399CC;">eCommerce branding</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Contact us</a></li>
        <li><a href="/index.html">Categories</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
        <form class = "navbar-form" role = "search">
          <div class = "form-group">
            <input type = "text" class = "form-control" placeholder = "Search">

          </div
          <span class = "input-group-btn">
            <button class = "btn btn-default" type="submit">Search</button>
          </span>

        </form>
      </li>

        <li class="dropdown" id="menuLogin">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login <span class = "caret"></span></a>
          <div class="dropdown-menu" style="padding:17px;">
            <form class="form" id="formLogin">
              <input name="username" class = "form-control" id="username" type="text" placeholder="Username" style="margin-bottom:5px;">
              <input name="password" class = "form-control" id="password" type="password" placeholder="Password"><br>
              <button type="button" id="btnLogin" class="btn btn-default">Login</button>
            </form>
          </div>
        </li>

        <li class="dropdown" id="menuBasket">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navBasket"><span class="glyphicon glyphicon-shopping-cart"></span> My basket <span id = "basketno">(0)</span></a>
          <div class="dropdown-menu" style="padding:17px; width:500px;">
            <form class="form-inline" id="formBasket">

              <div class = "form-group" id = "prodI" style = "margin-bottom:5px; margin-left:5px;">
                <div class = "row">
                    <img src="http://placehold.it/75x75" alt="" class = "img-rounded"></img>
                    <label for="prodName1">Product</label>
                    <a class = "form-control-static" href="" id=prodName1>ProductName</a>
                    <label for="prodQuan1">Quantity</label>
                    <input type = "text" class = "form-control" id="prodQuan1" style = "width:40px;" value = "1">
                    <button type="button" id="btnUpdate1" class="btn btn-default">Update</button>
                    <button type="button" id="btnRemove1" class="btn btn-default">Remove</button>
                </div>
              </div>
              <li class = "divider"></li>

              <button type="button" id="btnBuy" class="btn btn-default">Buy</button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

  <div class="jumbotron">
    <h1>Our eCommerce Website</h1>
	<div class="row">
    <div class="col-sm-4">&nbsp;</div>
    <div class="col-sm-8"><p class="text-right">Phasellus aliquet mauris blandit elit interdum, sit amet fringilla elit porttitor. Duis tristique fringilla sapien, ut sagittis nisl laoreet nec. Praesent in mauris sed nulla eleifend congue non et libero. Ut maximus et dolor nec sollicitudin. Donec interdum aliquam massa nec sollicitudin. Nunc fringilla quis ligula ut volutpat. Aliquam nunc tortor, suscipit eget urna vitae, mollis maximus quam.</p></div>
  </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class = "panel panel-default" role = "tablist" aria-multiselectable = "true" id = "accord">
        <div class = "panel-heading">
          <h2>Catagories</h2>
        </div>

        <div class="panel-group" id="accordionTwo">

          <div class="panel panel-default">
            <div class="panel-body">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTwo" href="#collapse1">Catagory 1 <span class = "caret"></span</a>
              </h4>
            </div>
            <div class="panel-collapse collapse " id="collapse1">
              <ul class = "list-group">
                <li class = "list-group-item"><a href="#">subCat1</a></li>
                <li class = "list-group-item"><a href="#">subCat2</a></li>
                <li class = "list-group-item"><a href="#">subCat3</a></li>
                <li class = "list-group-item"><a href="#">subCat4</a></li>
              </ul>
            </div>
          </div>

          <div class="panel panel-default" style = "margin-bottom:0px;">
            <div class="panel-body">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionTwo" href="#collapse2">Catagory 2 <span class = "caret"></span></a>
              </h4>
            </div>
            <div class="panel-collapse collapse" id="collapse2">
              <ul class = "list-group">
                <li class = "list-group-item"><a href="#">subCat1</a></li>
                <li class = "list-group-item"><a href="#">subCat2</a></li>
                <li class = "list-group-item"><a href="#">subCat3</a></li>
                <li class = "list-group-item"><a href="#">subCat4</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class = "panel panel-default">
        <div class = "panel-heading">
            <h2>Offers <span class = "label label-info">New!</span></h2>
        </div>
        <table class="table">
          <tr>
            <td>
            <div class ="row" id = "offerI">
              <div class = "col-md-3">
              </br>
                <img src="http://placehold.it/100x100" alt="" class = "img-rounded"></img>
              </div>
              <div class = "col-md-5">
                <a href="#">
                  <h4>Product Name</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque purus eros, aliquam.</p>
                </a>
              </div>
              <div class = "col-md-2">
                <h4>Price</h4>
                <p>£19.99<small></br> RRP £50.00</small></p>
              </div>
              <div class = "col-md-2">
              </br>
                <button class = "btn btn-default">View</button>
            </div>
          </div>
        </td>
        </tr>
        <tr>
          <td>
          <div class ="row" id = "offerI">
            <div class = "col-md-3">
            </br>
            <img src="http://placehold.it/100x100" alt="" class = "img-rounded"></img>
          </div>
          <div class = "col-md-5">
            <a href="#">
              <h4>Product Name</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque purus eros, aliquam.</p>
            </a>
          </div>
          <div class = "col-md-2">
            <h4>Price</h4>
            <p>£19.99<small></br> RRP £50.00</small></p>
              </div>
              <div class = "col-md-2">
              </br>
              <button class = "btn btn-default">View</button>
            </div>
          </div>
        </td>
        </tr>
        </table>
      </div>
    </div>

    <div class="col-md-3">
      <div class = "panel panel-default">
        <div class = "panel-heading">
          <h2>Recomended</h2>
        </div>
        <table class = "table table-default">
          <tr>
            <td>
              <div class = "row">
                <div class = "col-md-5">
                  <img src="http://placehold.it/90x90" alt="" class = "img-rounded"></img>
                </div>
                <div class = "col-md-7">
                  <a href="#">
                    <h5>Example Prod</h5>
                    <p> £19.99</p>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class = "row">
                <div class = "col-md-5">
                  <img src="http://placehold.it/90x90" alt="" class = "img-rounded"></img>
                </div>
                <div class = "col-md-7">
                  <a href="#">
                    <h5>Example Prod</h5>
                    <p> £19.99</p>
                  </a>
                </div>
              </div>
            </td>
          </tr>
        </table>

      </div>
    </div>

  </div>
</div>
<footer class="text-center"><hr>
    © MyeCommerceSite 2015 &nbsp; | &nbsp;
    <a href="/index.html">Terms &amp; Conditions</a> &nbsp; | &nbsp;
    <a href="/index.html">Privacy Policy</a> &nbsp; | &nbsp;
    <a href="/index.html">Cookie Policy</a> &nbsp; | &nbsp;
    <a href="/index.html">Help</a>
  </br>
</footer>

<script type="text/javascript">
$('.dropdown-menu')find('form').click(function(e) {
  e.stopPropagation();
  windows.alert("running");
});
</script>

</body></html>
