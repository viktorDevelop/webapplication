 <?defined('_access')?>
<main>
	<div class="container d-flex justify-content-center flex-wrap">
		 <div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">форма добавления статьи в категорию <?=$cat?></h3>
			  </div>
			  <div class="panel-body">
			     	<div class="d-flex flex-column">
			     		 <?var_dump($catInfo)?>
			     		 <form action="<?=URL?>/admin/post/delete" method = "POST">
							 <div class="form-group">
							   	 <div class="custom-control custom-radio">
									  <input type="radio" value="[<?=$catInfo['idpost']?>,<?=$catInfo['catid']?>]"  name="delpublic" class="custom-control-input">
									  <label class="custom-control-label" for="customRadio1">убрать из публикации в данной категории</label>
									</div>
									<div class="custom-control custom-radio">
									  <input type="radio"  name="delposttable" class="custom-control-input">
									  <label class="custom-control-label" for="customRadio2">удалить статью навсегда</label>
									</div>
							  </div>

							    
							   <div class="form-group">
							     
							   <input type="submit" class="btn btn-primary" name="postdel" value="удалить" >
							  </div>
  							</form>		
						</form>
			     	</div>
			  </div>
		</div>
	</div>
</main>

  