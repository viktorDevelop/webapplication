 
 
 
<main>
	<div class="container d-flex justify-content-center flex-wrap">
		 <div class="panel panel-default">
			  <div class="panel-heading">
			  <h3 class="panel-title">форма добавления категории</h3>
			  </div>
			  <div class="panel-body">
			     	<div class="d-flex flex-column ">
			     		<form action="<?=URL?>admin/category/add/" method="POST">
								  <div class="form-group">
								     
								    <input type="text" required class="form-control" id="titleUrl" name="title" placeholder="title">
								  </div>

								  <div class="form-group">
									 <div class="input-group">
									  <div class="input-group-prepend">
									    <button class="btn btn-success" id="buttranslit"  type="button">транслит</button>
									  </div>
									  <input type="text" required class="form-control"  id="inptranslit" name="titleEn" placeholder="titleEn" >
									</div>
								</div>

							  <div class="form-group">
							     
							   <textarea name="keyword" placeholder="keyword" required  class="form-control" cols="10" rows="5"></textarea>
							  </div>

							  <div class="form-group">
							   	<textarea name="description" placeholder="description" required  class="form-control" cols="10" rows="5"></textarea>
							  </div>

							  <div class="form-group" >
							   	<select  class="custom-select" name="menu_note">
								   
								  <option value="1"  >верхнее меню</option>
								  <option value="0">правое меню</option>
								 
								</select>
							  </div>

							   <div class="form-group">
							     
							   <input type="submit" class="btn btn-primary" name="catAdd" value="добавить" >
							  </div>
  
							</form>
			     	</div>
			  </div>
		</div>
	</div>
</main>



 
 