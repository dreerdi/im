<tr>
    <td><?php echo $i;?></td>
    <td><?php echo $key['name_product'];?></td>
    <td><?php echo $key['price'];?></td>
    <td>
    	<div class="row">
    		<div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
    			<<?php echo (($key['count'] == 1) ? 'b' : 'a'); ?> href="index.php?dispatch=basket&count_basket=1&flug=up_count&number_basket=<?php echo $key['№'];?>" class=""><i class="glyphicon glyphicon-minus"></i></<?php echo (($key['count'] == 1) ? 'b' : 'a'); ?>>
			</div>
			<div class="col-lg-4 col-md-5 col-sm-5 col-xs-5">
    			<span class="vertical-center"><?php echo $key['count'];?></span>
    		</div>
    		<div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
    			<a href="index.php?dispatch=basket&count_basket=1&flug=down_count&number_basket=<?php echo $key['№'];?>"><i class="glyphicon glyphicon-plus"></i></a>
    		</div>
    	</div>
    </td>
    <td><?php echo $key['total'];?></td>
    <td><a href="index.php?dispatch=basket&count_basket=1&flug=delete_product_basket&number_basket=<?php echo $key['№'];?>" class="btn btn-danger">Удалить товар</a></td>
</tr>