  
<main>
	<div class="container d-flex justify-content-center flex-wrap">
		 <div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">форма добавления статьи в категорию </h3>
			  </div>
			  <div class="panel-body">
			     	<div class="d-flex flex-column">
			     		<form action="<?=URL?>admin/post/add" method="POST">
							  <div class="form-group">
							     
							    <input type="text" class="form-control"   id="titleUrl" name="title" placeholder="title">
							  </div>

							  <div class="form-group">
								 <div class="input-group">
								  <div class="input-group-prepend">
								    <button class="btn btn-success"  id="buttranslit" type="button">транслит</button>
								    
								  </div>
								  <input type="text" class="form-control" id="inptranslit"  name="titleEn" placeholder="titleEn" >
								</div>
							</div>

							 <div class="form-group">
							   	<textarea name="full_text" placeholder="full_text"  class="form-control" cols="10" rows="5"></textarea>
							  </div>

							  <div class="form-group">
							   	<textarea name="preview" placeholder="preview"  class="form-control" cols="10" rows="5"></textarea>
							  </div>

							  <div class="form-group">
							     
							   <textarea name="keyword" placeholder="keyword" class="form-control" cols="10" rows="5"></textarea>
							  </div>

							  <div class="form-group">
							   	<textarea name="description" placeholder="description"  class="form-control" cols="10" rows="5"></textarea>
							  </div>

							  <div class="form-group">
							   	<input type="text"    name="id_category" value="<?=$catInfo['id'];?>" id="">
							  </div>

							  
							   <div class="form-group">
							     
							   <input type="submit" class="btn btn-primary" name="postAdd" value="добавить" >
							  </div>
  
						</form>
			     	</div>
			  </div>
		</div>
	</div>
</main>

  