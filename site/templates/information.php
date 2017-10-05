<?php snippet('header') ?>
<?php snippet('navigation') ?>
  <main class="main">     
	<?php if(!empty($page->text())): ?>
		<?php echo $page->text()->kirbytext() ?> 
	<?php endif; ?>
	
	
    <?php foreach($page->children()->visible() as $info): ?>
        <div class="information__block flex flex__wrap flex__center">
          <figure class="full__height half__width flex flex__center">
            <img src="<?php echo $info->image($info->infoimage())->url() ?>" alt="<?php echo $info->title()->html() ?> image">
          </figure>
          <div class="half__width text__block flex flex__center infotje">
            <div>
              <?php e(strlen($info->icon()) > 0, '<img src="'.$info->url().'/'.$info->icon().'">') ?>
            </div>
            <div>
              <header class="flex info__header">
                <h2><?php echo $info->title()->html() ?></h2>
              </header>
              <div class="intro">
                <?php echo $info->text()->kirbytext() ?>
                <?php if ($info->document()) : ?>
                  <a href="<?php echo $info->document()->url() ?>" target="_blank" class="download__btn">
                    <span class="download__icon"></span> 
                    <?php //echo $info->title()->html() ?>
                  </a>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      </figure>
    <?php endforeach ?>
  </main>
<?php snippet('footer') ?>
