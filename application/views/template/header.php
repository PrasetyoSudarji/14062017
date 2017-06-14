<!DOCTYPE html>
<html lang="en">
  <head>
	<title>WebGIS PEP</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap-modified.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/login_modal.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap-datepicker.min.css">
	<!--<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap-container.css">-->
    <!-- jQuery library -->
    <script src="<?=base_url()?>assets/bootstrap/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/act.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap-datepicker.min.js"></script>
    <script src="<?=base_url()?>assets/dataTable/media/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/dataTable/media/js/dataTables.bootstrap.min.js"></script> 
    <!-- Other Library -->  
    <link rel="stylesheet" href="<?=base_url()?>assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dataTable/media/css/dataTables.bootstrap.min.css">
    <link rel="shortcut icon" href="<?=base_url()?>assets/icon.png">    
    
    <!-- library map --> 
    <link rel="stylesheet" href="<?=base_url()?>assets/./resources/ol.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/resources/horsey.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/resources/ol3-search-layer.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/./resources/ol3-layerswitcher.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/./resources/qgis2web.css">

  </head>
  <body >
<div class="container" style="background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow:         0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 0px;">

      <div class="container">
      <div class="row ">
        <div class="col-md-1">
            <a href="<?=base_url()?>">
              <img src="<?=base_url()?>assets/logo-ptm-ep-vertikal.jpg" width="70px" style="margin-bottom:10px; "/>
              
            </a>
            
        </div>
        <div class="col-md-5">
          <h3>Online Production PGDP-PEP</h3>
        </div>
      </div>
    </div>
    </div>

<!-- For AJAX -->
<script language='javascript'>
  function submenu_next(id_menu) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('submenu');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    
    
    var url="<?=base_url()?>index.php/submenu/submenuNext?id_menu="+id_menu;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }
  
  function submenu_prev(id_menu) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('submenu');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    
    
    var url="<?=base_url()?>index.php/submenu/submenuPrev?id_menu="+id_menu;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }

  function tab_liquid(id_tab) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('produksi');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    
    
    var url="<?=base_url()?>index.php/data/tab_liquid?id_tab="+id_tab;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }

  function tab_gas(id_tab) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('produksi');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    
    
    var url="<?=base_url()?>index.php/data/tab_gas?id_tab="+id_tab;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }

  function tab_presstemp(id_tab) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('produksi');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    
    
    var url="<?=base_url()?>index.php/data/tab_presstemp?id_tab="+id_tab;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }

  function tab_sas(id_tab) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('produksi');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    
    
    var url="<?=base_url()?>index.php/data/tab_sas?id_tab="+id_tab;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }

  function delete_data_pt(id) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('listsumur');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    
    
    var url="<?=base_url()?>index.php/data/delete_data_pt?id="+id;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }

  function delete_data_gas(id) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('listsumur');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    
    
    var url="<?=base_url()?>index.php/data/delete_data_gas?id="+id;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }

  function delete_data_liquid(id) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('listsumur');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    
    
    var url="<?=base_url()?>index.php/data/delete_data_liquid?id="+id;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }

  function delete_data_sas(id) {
    var ajaxRequest;
  
    try {
      ajaxRequest = new XMLHttpRequest(); //Opera 8.0+, Firefox, Safari
    } catch(e) {
      //Untuk IE
      try {
        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } catch(e) {
        try {
          ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
          alert("Gagal karena browser anda tidak mendukung ajax");
          return false;
        }
      }
    }

    ajaxRequest.onreadystatechange = function() {
      if (ajaxRequest.readyState == 4) {
        var ajaxTampil = document.getElementById('listsas');
        ajaxTampil.innerHTML = ajaxRequest.responseText;
      }
    }
    var url="<?=base_url()?>index.php/data/delete_data_sas?id="+id;
    
    ajaxRequest.open("GET",url,true);
    ajaxRequest.send(null);
  }

  $(document).ready(function() {
    $('#list').DataTable();
  } );
 
</script>
  