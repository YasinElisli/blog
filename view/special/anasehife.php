<!-- Axtaris bolmesi -->
<div class="searchBlog valign-wrapper">
  <div class="container">
    <div class="container">
      <div class="row ">
        <nav >
          <div class="nav-wrapper ">
            <form  method="get" action="">
              <div class="input-field ">
                <input name="search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Məqalə Axtarın...'" autocomplete="off" placeholder="Məqalə Axtarın..."  class="searchInp" id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Axtaris bolmesi end -->
<!-- Son elanlar bolmesi -->
<div class="lastBlog">
  <div class=" container">
    <div class="row">
      <div class="col s12">
        <blockquote class="headerBlq">Son Məqalələr</blockquote>
      </div>
    </div>
    <div class="row">
      <?php 
      foreach ($value as $blog) {
        echo '<div class="col s4 ">
        <div class="card hoverable">
        <div class="card-image postImgWrapper" style="background: url(img/'.$blog["art_pic"].')">
        <a  href=?url=meqale&id='.$blog["ID"].' class="card-title waves-effect waves-light btn truncate">'.$blog["art_cat"].'</a>
        </div>
        <div class="card-content">
        <p class="truncate">'.$blog["art_title"].'</p>
        </div>
        <div class="card-action">
        <a href=?url=meqale&id='.$blog["ID"].'  class="capWorld">Ətraflı</a>
        </div>
        </div>
        </div>';
      }

      ?>
    </div>
  </div>

  <!-- Son elanlar bolmesi end -->