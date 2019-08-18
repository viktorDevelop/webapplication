<div class="col-md-8">
					<div class="content-text">

						<?foreach($articles as $item):?>
						<div class="blog_item">
							<div class="row">
								<div class="col-md-12">
									<h3><a href="<?=URL?>post/<?=$item['title_url'];?>" ><?=$item['title'];?></a></h3>
								</div>
								<div class="col-md-4">
									<a href="<?=URL?>post/<?=$item['title_url'];?>"  >
										<img src="http://www.hdpaperz.com/wallpaper/original/canada-winter-moraine-lake-alberta-hd-high-511002.jpg" alt="alt"></a>
								</div>
								<div class="col-md-8">
									<p><?=$item['preview'];?></p>
								</div>
							</div>
						</div>
					 
						 <?endforeach;?>
					</div>
				</div>