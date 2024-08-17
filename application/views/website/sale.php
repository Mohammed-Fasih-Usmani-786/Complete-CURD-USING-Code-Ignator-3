<table border="5">
    <?php foreach ($data as $v) { ?>
            <tr>
                    <td>
                        <?php echo $v->cat_opt ?>
                    </td>
                    <td>
                        <?php echo $v->name ?>
                    </td>
                    <td>
                        <?php echo $v->row_id ?>
                    </td> 
                    <td>
                        <img src="<?php echo base_url('_mypro/') . $v->img1 ?>" alt="" height="200" width="200">
                    </td>
                    <td>
                        <img src="<?php echo base_url('_mypro/') . $v->img2 ?>" alt="" height="200" width="200">
                    </td>  
                    <td>
                        <img src="<?php echo base_url('_mypro/') . $v->img3 ?>" alt="" height="200" width="200">
                    </td>          
                </tr>
                <?php } ?>
</table>
    