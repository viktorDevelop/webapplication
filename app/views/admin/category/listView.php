 
<main>
	<div class="container d-flex justify-content-start flex-wrap">
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th>#</th>
		      <th>название категории</th>
		      <th>действия</th>
		       <th>колличество статей</th>
		        
		    </tr>
		  </thead>
		  <tbody>

		  	<?foreach($category as $item):?>
		    <tr>
		      <th scope="row"></th>
		      <td><?=$item['title'];?></td>
		      <td>
		      		<div class="dropdown  mr-1">
						  <button class="btn btn-secondary dropdown-toggle"
						          type="button" id="dropdownMenu1" data-toggle="dropdown"
						          aria-haspopup="true" aria-expanded="false">
						    действия
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
						  	<a class="dropdown-item" 
					href="<?=URL;?>admin/post/post-List-by/?cat=<?=$item['title_url'];?>&id=<?=$item['id'];?>">список статей</a>

					  		<a class="dropdown-item"
					 href="<?=URL;?>admin/post/add-post-inCat/?cat=<?=$item['title_url'];?>&id=<?=$item['id']?>">добавить статью</a>
					  		 
						    <a class="dropdown-item" 
					href="<?=URL;?>admin/category/edit-view/?cat=<?=$item['title_url'];?>">редактировать категорию</a>
						    <a class="dropdown-item" 
					href="<?=URL;?>admin/category/delete/?id=<?=$item['id']?>">удалить</a>
					  	</div>
					</div>

					 
		      </td>

		     <td class="countArticle"><?=$item['artcount'];?></td>
		     
		    </tr>
		     <?endforeach;?>
		  </tbody> 
		</table>
	</div>
</main>
 

	 