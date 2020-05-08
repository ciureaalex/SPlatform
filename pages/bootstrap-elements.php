<?php
$pgtitle="Bootstrap elements";
$pgtype="website";
$pgdescription="An example of bootstrap elements";
$pglocale="en_US";
$content="
<div class='col-lg-8'>
<div class='card'>
<div class='card-header'>
Bootstrap Elements
</div>
  <div class='card-body'>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class='jumbotron'>
<h1 class='display-4'>Hello, world!</h1>
<p class='lead'>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
<hr class='my-4'>
<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
<p class='lead'>
  <a class='btn btn-primary btn-lg' href='#' role='button'>Learn more</a>
</p>
</div>

                <div class='page-header'>
                    <h1>Buttons</h1>
                </div>
                <p>
                    <button type='button' class='btn btn-lg btn-default'>Default</button>
                    <button type='button' class='btn btn-lg btn-primary'>Primary</button>
                    <button type='button' class='btn btn-lg btn-success'>Success</button>
                    <button type='button' class='btn btn-lg btn-info'>Info</button>
                    <button type='button' class='btn btn-lg btn-warning'>Warning</button>
                    <button type='button' class='btn btn-lg btn-danger'>Danger</button>
                    <button type='button' class='btn btn-lg btn-link'>Link</button>
                </p>
                <p>
                    <button type='button' class='btn btn-default'>Default</button>
                    <button type='button' class='btn btn-primary'>Primary</button>
                    <button type='button' class='btn btn-success'>Success</button>
                    <button type='button' class='btn btn-info'>Info</button>
                    <button type='button' class='btn btn-warning'>Warning</button>
                    <button type='button' class='btn btn-danger'>Danger</button>
                    <button type='button' class='btn btn-link'>Link</button>
                </p>
                <p>
                    <button type='button' class='btn btn-sm btn-default'>Default</button>
                    <button type='button' class='btn btn-sm btn-primary'>Primary</button>
                    <button type='button' class='btn btn-sm btn-success'>Success</button>
                    <button type='button' class='btn btn-sm btn-info'>Info</button>
                    <button type='button' class='btn btn-sm btn-warning'>Warning</button>
                    <button type='button' class='btn btn-sm btn-danger'>Danger</button>
                    <button type='button' class='btn btn-sm btn-link'>Link</button>
                </p>
                <p>
                    <button type='button' class='btn btn-xs btn-default'>Default</button>
                    <button type='button' class='btn btn-xs btn-primary'>Primary</button>
                    <button type='button' class='btn btn-xs btn-success'>Success</button>
                    <button type='button' class='btn btn-xs btn-info'>Info</button>
                    <button type='button' class='btn btn-xs btn-warning'>Warning</button>
                    <button type='button' class='btn btn-xs btn-danger'>Danger</button>
                    <button type='button' class='btn btn-xs btn-link'>Link</button>
                </p>

                <div class='page-header'>
                    <h1>Thumbnails</h1>
                </div>
                <img class='img-thumbnail' src='http://placehold.it/400x400' alt=''>

           
                <div class='page-header'>
                    <h1>Navbars</h1>
                </div>

                <nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <a class='navbar-brand' href='#'>Navbar</a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav mr-auto'>
      <li class='nav-item active'>
        <a class='nav-link' href='#'>Home <span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='#'>Link</a>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          Dropdown
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='#'>Action</a>
          <a class='dropdown-item' href='#'>Another action</a>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='#'>Something else here</a>
        </div>
      </li>
      <li class='nav-item'>
        <a class='nav-link disabled' href='#'>Disabled</a>
      </li>
    </ul>
    <form class='form-inline my-2 my-lg-0'>
      <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
      <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
    </form>
  </div>
</nav>

<br>

<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
<a class='navbar-brand' href='#'>Navbar</a>
<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
  <span class='navbar-toggler-icon'></span>
</button>

<div class='collapse navbar-collapse' id='navbarSupportedContent'>
  <ul class='navbar-nav mr-auto'>
    <li class='nav-item active'>
      <a class='nav-link' href='#'>Home <span class='sr-only'>(current)</span></a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='#'>Link</a>
    </li>
    <li class='nav-item dropdown'>
      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        Dropdown
      </a>
      <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
        <a class='dropdown-item' href='#'>Action</a>
        <a class='dropdown-item' href='#'>Another action</a>
        <div class='dropdown-divider'></div>
        <a class='dropdown-item' href='#'>Something else here</a>
      </div>
    </li>
    <li class='nav-item'>
      <a class='nav-link disabled' href='#'>Disabled</a>
    </li>
  </ul>
  <form class='form-inline my-2 my-lg-0'>
    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
  </form>
</div>
</nav>

<br>

<nav class='navbar navbar-expand-lg navbar-dark bg-primary'>
<a class='navbar-brand' href='#'>Navbar</a>
<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
  <span class='navbar-toggler-icon'></span>
</button>

<div class='collapse navbar-collapse' id='navbarSupportedContent'>
  <ul class='navbar-nav mr-auto'>
    <li class='nav-item active'>
      <a class='nav-link' href='#'>Home <span class='sr-only'>(current)</span></a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='#'>Link</a>
    </li>
    <li class='nav-item dropdown'>
      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        Dropdown
      </a>
      <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
        <a class='dropdown-item' href='#'>Action</a>
        <a class='dropdown-item' href='#'>Another action</a>
        <div class='dropdown-divider'></div>
        <a class='dropdown-item' href='#'>Something else here</a>
      </div>
    </li>
    <li class='nav-item'>
      <a class='nav-link disabled' href='#'>Disabled</a>
    </li>
  </ul>
  <form class='form-inline my-2 my-lg-0'>
    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
  </form>
</div>
</nav>

<br>

<nav class='navbar navbar-expand-lg navbar-light' style='background-color: #e3f2fd;'>
<a class='navbar-brand' href='#'>Navbar</a>
<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
  <span class='navbar-toggler-icon'></span>
</button>

<div class='collapse navbar-collapse' id='navbarSupportedContent'>
  <ul class='navbar-nav mr-auto'>
    <li class='nav-item active'>
      <a class='nav-link' href='#'>Home <span class='sr-only'>(current)</span></a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='#'>Link</a>
    </li>
    <li class='nav-item dropdown'>
      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        Dropdown
      </a>
      <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
        <a class='dropdown-item' href='#'>Action</a>
        <a class='dropdown-item' href='#'>Another action</a>
        <div class='dropdown-divider'></div>
        <a class='dropdown-item' href='#'>Something else here</a>
      </div>
    </li>
    <li class='nav-item'>
      <a class='nav-link disabled' href='#'>Disabled</a>
    </li>
  </ul>
  <form class='form-inline my-2 my-lg-0'>
    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
  </form>
</div>
</nav>

<br>



                
                

                <div class='page-header'>
                    <h1>Alerts</h1>
                </div>
                <div class='alert alert-primary' role='alert'>
  A simple primary alert with <a href='#' class='alert-link'>an example link</a>. Give it a click if you like.
</div>
<div class='alert alert-secondary' role='alert'>
  A simple secondary alert with <a href='#' class='alert-link'>an example link</a>. Give it a click if you like.
</div>
<div class='alert alert-success' role='alert'>
  A simple success alert with <a href='#' class='alert-link'>an example link</a>. Give it a click if you like.
</div>
<div class='alert alert-danger' role='alert'>
  A simple danger alert with <a href='#' class='alert-link'>an example link</a>. Give it a click if you like.
</div>
<div class='alert alert-warning' role='alert'>
  A simple warning alert with <a href='#' class='alert-link'>an example link</a>. Give it a click if you like.
</div>
<div class='alert alert-info' role='alert'>
  A simple info alert with <a href='#' class='alert-link'>an example link</a>. Give it a click if you like.
</div>
<div class='alert alert-light' role='alert'>
  A simple light alert with <a href='#' class='alert-link'>an example link</a>. Give it a click if you like.
</div>
<div class='alert alert-dark' role='alert'>
  A simple dark alert with <a href='#' class='alert-link'>an example link</a>. Give it a click if you like.
</div>

                <div class='page-header'>
                    <h1>Progress bars</h1>
                </div>
                <div class='progress'>
                    <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: 60%;'><span class='sr-only'>60% Complete</span>
                    </div>
                </div><br>
                <div class='progress' style='height:10px'>
                <div class='progress-bar' style='width:40%;height:10px'></div>
              </div>
              <br>
              <div class='progress' style='height:20px'>
                <div class='progress-bar' style='width:50%;height:20px'></div>
              </div>
              <br>
              <div class='progress' style='height:30px'>
                <div class='progress-bar' style='width:60%;height:30px'></div>
              </div>
                <br>
                <div class='progress'>
                <div class='progress-bar' style='width:10%'></div>
              </div><br>
            
              <!-- Green -->
              <div class='progress'>
                <div class='progress-bar bg-success' style='width:20%'></div>
              </div><br>
            
              <!-- Turquoise -->
              <div class='progress'>
                <div class='progress-bar bg-info' style='width:30%'></div>
              </div><br>
            
              <!-- Orange -->
              <div class='progress'>
                 <div class='progress-bar bg-warning' style='width:40%'></div>
              </div><br>
            
              <!-- Red -->
              <div class='progress'>
                <div class='progress-bar bg-danger' style='width:50%'></div>
              </div><br>
            
              <!-- White -->
              <div class='progress border'>
                <div class='progress-bar bg-white' style='width:60%'></div>
              </div><br>
            
              <!-- Grey -->
              <div class='progress'>
                <div class='progress-bar bg-secondary' style='width:70%'></div>
              </div><br>
            
              <!-- Light Grey -->
              <div class='progress border'>
                <div class='progress-bar bg-light' style='width:80%'></div>
              </div><br>
            
              <!-- Dark Grey -->
              <div class='progress'>
                <div class='progress-bar bg-dark' style='width:90%'></div>
              </div>
              <br>
              <div class='progress'>
              <div class='progress-bar progress-bar-striped' style='width:30%'></div>
            </div>
            <br>
            <div class='progress'>
              <div class='progress-bar bg-success progress-bar-striped' style='width:40%'></div>
            </div>
            <br>
            <div class='progress'>
              <div class='progress-bar bg-info progress-bar-striped' style='width:50%'></div>
            </div>
            <br>
            <div class='progress'>
              <div class='progress-bar bg-warning progress-bar-striped' style='width:60%'></div>
            </div>
            <br>
            <div class='progress'>
              <div class='progress-bar bg-danger progress-bar-striped' style='width:70%'></div>
            </div>
            <br>
            <div class='progress'>
            <div class='progress-bar progress-bar-striped progress-bar-animated' style='width: 40%'></div>
            </div>
            <br>
            <div class='progress'>
  <div class='progress-bar bg-success' style='width:40%'>
    Free Space
  </div>
  <div class='progress-bar bg-warning' style='width:10%'>
    Warning
  </div>
  <div class='progress-bar bg-danger' style='width:20%'>
    Danger
  </div>
</div>
<br>

                <div class='page-header'>
                    <h1>List groups</h1>
                </div>
                <div class='row'>
                    <div class='col-sm-4'>
                        <ul class='list-group'>
                            <li class='list-group-item'>Cras justo odio</li>
                            <li class='list-group-item'>Dapibus ac facilisis in</li>
                            <li class='list-group-item'>Morbi leo risus</li>
                            <li class='list-group-item'>Porta ac consectetur ac</li>
                            <li class='list-group-item'>Vestibulum at eros</li>
                        </ul>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class='col-sm-4'>
                        <div class='list-group'>
                            <a href='#' class='list-group-item active'>Cras justo odio</a>
                            <a href='#' class='list-group-item'>Dapibus ac facilisis in</a>
                            <a href='#' class='list-group-item'>Morbi leo risus</a>
                            <a href='#' class='list-group-item'>Porta ac consectetur ac</a>
                            <a href='#' class='list-group-item'>Vestibulum at eros</a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class='col-sm-4'>
                        <div class='list-group'>
                            <a href='#' class='list-group-item active'>
                                <h4 class='list-group-item-heading'>List group item heading</h4>
                                <p class='list-group-item-text'>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            </a>
                            <a href='#' class='list-group-item'>
                                <h4 class='list-group-item-heading'>List group item heading</h4>
                                <p class='list-group-item-text'>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            </a>
                            <a href='#' class='list-group-item'>
                                <h4 class='list-group-item-heading'>List group item heading</h4>
                                <p class='list-group-item-text'>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            </a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>

                <div class='page-header'>
                    <h1>Cards</h1>
                </div>
                

                <div class='card'>
                <div class='card-header'>Header</div>
                <div class='card-body'>Content</div> 
                <div class='card-footer'>Footer</div>
                </div>       
                
                <br>

                <div class='card'>
                <div class='card-body'>
                  <h4 class='card-title'>Card title</h4>
                  <p class='card-text'>Some example text. Some example text.</p>
                  <a href='#' class='card-link'>Card link</a>
                  <a href='#' class='card-link'>Another link</a>
                </div>
              </div>

</div>
</div>
</div><!-- COL-LG-8 -->
";
?>