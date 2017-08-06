<div class="container top" style="background:#000;" >
<nav class="navbar navbar-inverse ">

      <ul class="nav navbar-nav">
	  <?php
			if ($_SESSION['login'] == null){
				echo "<li class=";if($link=='home'){echo 'active';}echo "><a href='".base_url()."'><i class='fa fa-home' aria-hidden='true'></i> Home </a></li>";
			}else{
				echo "<li class=";if($link=='home'){echo 'active';}echo "><a href='".base_url()."index.php/menu'><i class='fa fa-home' aria-hidden='true'></i> Home </a></li>";
        echo "<li class='dropdown'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#''><span class='fa fa-book'></span> 
               Laporan <span class='caret'></span></a>
                <ul class='dropdown-menu'>
                  <li class=";if($link=='laporan_total'){echo 'active';}echo "><a href='".base_url()."index.php/menu/laporan_total'><i class='fa fa-book' aria-hidden='true'></i> Daily Production</a></li>
                  <li class=";if($link=='laporan_sumur'){echo 'active';}echo "><a href='".base_url()."index.php/menu/laporan_sumur'><i class='fa fa-book' aria-hidden='true'></i> Daily Production (well) </a></li>
                </ul>
              </li>";
        echo "<li class='dropdown'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#''><span class='fa fa-edit'></span> 
               Data <span class='caret'></span></a>
                <ul class='dropdown-menu'>
                  <li class=";if($link=='input_data'){echo 'active';}echo "><a href='".base_url()."index.php/data'><i class='fa fa-edit' aria-hidden='true'></i> Input Data </a></li>
                  <li class=";if($link=='view_data'){echo 'active';}echo "><a href='".base_url()."index.php/menu/view_data/produksi_liquid'><i class='fa fa-search' aria-hidden='true'></i> View Data </a></li>
                  <li class=";if($link=='edit_data'){echo 'active';}echo "><a href='".base_url()."index.php/menu/edit_data'><i class='fa fa-edit' aria-hidden='true'></i> Edit Data </a></li>
                  <li class=";if($link=='change_sumur'){echo 'active';}echo "><a href='".base_url()."index.php/menu/change_sumur'><i class='fa fa-edit' aria-hidden='true'></i> Change Sumur Stats</a></li>
                  <li class=";if($link=='grafik'){echo 'active';}echo "><a href='".base_url()."index.php/menu/grafik'><i class='fa fa-search' aria-hidden='true'></i> Grafik </a></li>
                </ul>
              </li>";
			}
	  ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php
        if ($_SESSION['login'] == null){
          echo '<li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
        }else{
           ?>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php $result = $this->Model->getNameUser($_SESSION['login']);
                foreach($result->result_array() as $queryuser){
                echo $queryuser['name'];
              }
              ?>
               </a>
                <ul class="dropdown-menu">
                  <li><a href="<?=base_url()?>index.php/Logout" onclick="return confirm('Yakin akan keluar dari sistem?')"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            
          <?php
          }
        ?>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="loginmodal-container">
              <h1>Login to Your Account</h1><br>
              <form method="POST" action="<?=base_url()?>index.php/Login">
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
              </form>
            </div>
          </div>
        </div>
      </ul>

  
</nav>
</div>
    

<div class="container" style="background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2);">
    <div class="row">