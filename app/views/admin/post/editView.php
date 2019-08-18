 
<main>
	<div class="container d-flex justify-content-center flex-wrap">
		 <div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">форма редактирования статьи</h3>
			  </div>
			  <div class="panel-body">
			     	<div class="d-flex flex-column">
			     		<form action="<?=URL?>admin/post/edite/" method ="POST">
							  <div class="form-group">
							     <lable >заголовок</lable>
							    <input type="text" name="title"   id="titleUrl" class="form-control" 
							    value="<?=$post['title']?>" placeholder="title">
							  </div>

							  <div class="form-group">
							  	<lable >URL</lable>
								 <div class="input-group">

								  <div class="input-group-prepend">
								    <button class="btn btn-success"  id="buttranslit" type="button">транслит</button>
								  </div>
								  <input type="text" class="form-control" id="inptranslit" name="titleEn"
									value="<?=$post['title_url']?>"
								 	 placeholder="titleEn" >
								</div>
							</div>

							 <div class="form-group">
							 		<lable >статья </lable>
							   	<textarea name="full_text" placeholder="full_text"  class="form-control" cols="10" rows="5">
							   		<?=$post['full_text'];?>
							   		
							   	</textarea>
							  </div>

							   <div class="form-group">
							  	<lable >краткий текст </lable>
							   	<textarea name="preview" placeholder="preview"  class="form-control" cols="10" rows="5">
							   		<?=$post['preview'];?>
							   	</textarea>
							  </div>

							  <div class="form-group">
							     <lable >ключевые слова </lable>
							   <textarea name="keyword" placeholder="keyword" class="form-control" cols="10" rows="5">
							   	<?=$post['keyword'];?>
							   </textarea>
							  </div>
	 
							  <div class="form-group">

							  	<lable >описание </lable>
							   	<textarea name="description" placeholder="description"  class="form-control" cols="10" rows="5">
							   		<?=$post['description'];?>
							   	</textarea>
							  </div>
			 
							  <input type="text"  hidden  name="idcat" value="<?=$catInfo['idcat']?>">
							   <input type="text"  hidden  name="cat" value="<?=$catInfo['cat']?>">
							   <input type="text" hidden  name="idPost" value="<?=$post['id'];?>">

							  
							   <div class="form-group">
							     
							   <input type="submit" class="btn btn-primary" name="postEdit" value="сохранить" >
							  </div>
  
						</form>
			     	</div>
			  </div>
		</div>
	</div>
</main>

  