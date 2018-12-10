<!-- Saytin meqaleler hissesi ucun sablon div -->
    <div class="blogCard card horizontal hoverable z-depth-2">
      <a href=<?php echo('?url=meqale&id='.$blog['ID']); ?> class="col s4 postImgWrapper"  style="background: url(img/<?php echo($blog['art_pic']); ?>);"></a>
        <div class="col s8">
          <div class="card-stacked">
            <div class="card-content">
              <a href=<?php echo('?url=meqale&id='.$blog['ID']); ?>><p class="blogTitle"><?php echo($blog['art_title']); ?></p></a>
              <p class="truncate"><?php echo($blog['art_text']); ?></p>
            </div>
            <div class="card-action">
              <a class="etrafli" href=<?php echo('?url=meqale&id='.$blog['ID']); ?>>Ətraflı...</a>
            </div>
          </div>
        </div>
      </div>