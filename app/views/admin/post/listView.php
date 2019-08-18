<main>
	<div class="container d-flex justify-content-start flex-wrap">
		<div class="col-md-12">
				<div class="row">
				 
<a class="btn btn-primary" href="<?=URL;?>admin/post/add-post-inCat/?cat=<?=$catInfo['cat'];?>&id=<?=$catInfo['id'];?>">add</a>
 
 		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>заголовок</th>
		      <th>alias</th>
		      <th></th>
		      <th></th>
		       
		    </tr>
		  </thead>
		  <tbody>
 	<?foreach ($postList as $key => $value):?>
		    <tr>
				<th><?=$value['id'];?></th>
				<th><?=$value['title'];?></th>
				<th><?=$value['title_url'];?></th>
				 
				<th><a class="btn btn-primary" 
href="<?=URL?>admin/post/edit-view/?aliaspost=<?=$value['title_url'];?>&
								idcat=<?=$catInfo['id']?>&
								cat=<?=$catInfo['cat']?>	

								">edit</a></th>
				 
				 <td>
				 	<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle"
						          type="button" id="dropdownMenu1" data-toggle="dropdown"
						          aria-haspopup="true" aria-expanded="false">
						    удаление
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
						     <form action="<?=URL?>admin/post/delete" method="POST">
						     	<input class="dropdown-item"  type="submit" name="delpublic" value="убрать из публикации в данной категории">
						     	<input type="text" hidden name="idcat" value="<?=$catInfo['id']?>">
						     	<input type="text" hidden name="idpost" value="<?=$value['id']?>">
						     	<input type="text" hidden name="cat" value="<?=$catInfo['cat']?>">

						     	<input  class="dropdown-item" type="submit" name="delpost" value="удалить статью навсегда">
						     </form>
						   
						  </div>
						</div>
				 </td>
		    </tr>
	 <?endforeach;?>	     
		  </tbody>
		</table>



		 
 

			</div>
				  
		</div>
	</div>
</main>


 