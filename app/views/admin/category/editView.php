
<main>
	<div class="container d-flex justify-content-center flex-wrap">
		 <div class="panel panel-default">
			  <div class="panel-heading">
			  <h3 class="panel-title">форма редактирования категории</h3>
			  </div>
			  <div class="panel-body">
			     	<div class="d-flex flex-column">
			     		<form action="<?=URL?>admin/category/edit/" method="POST">
								  <div class="form-group">
								     
								    <input type="text"  id="titleUrl" required class="form-control" name="title" placeholder="title" 
								    		value="<?=$category['title'];?>">

								     <input type="text" hidden=""  name="id" value="<?=$category['id'];?>">
								    		
								  </div>

								  <div class="form-group">
									 <div class="input-group">
									  <div class="input-group-prepend">
									    <button class="btn btn-success" id="buttranslit"  type="button">транслит</button>
									  </div>
									  <input type="text"  id="inptranslit" required value="<?=$category['title_url'];?>" class="form-control" name="titleEn" placeholder="titleEn" >
									</div>
								</div>

							  <div class="form-group">
							     
							   <textarea name="keyword" placeholder="keyword" required  class="form-control" cols="10" rows="5">
							   	<?=$category['keyword'];?>
							   </textarea>
							  </div>

							  <div class="form-group">
							   	<textarea name="description" required placeholder="description"  class="form-control" cols="10" rows="5">
							   			<?=$category['keyword'];?>
							   	</textarea>
							  </div>

							  <div class="form-group">
							  	<div>текущая положение:

							  								
							   	<select class="custom-select" name="menu_note">
							   		 
								     <?
		  							if($category['menu_note']==1)
		  								{?>
		  									<option selected value="1"  >верхнее меню</option>
											<option  value="0">правое меню</option>
		  									<?  }else{?> 
		  										<option  value="1"  >верхнее меню</option>
		  									 <option selected value="0">правое меню</option><?}?></div>
								  
								 
									  
							 
								 	 
								</select>
							  </div>

							   <div class="form-group">
							     
							   <input type="submit" class="btn btn-primary" name="catEdit" value="сохранить" >
							  </div>
  
							</form>
			     	</div>
			  </div>
		</div>
	</div>
</main>



 
 