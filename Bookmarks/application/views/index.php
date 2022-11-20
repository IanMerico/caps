
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css');?>">
    <title>BookMarks</title>
</head>
<body>
<?php
    echo $this->session-> flashdata('error');
    echo $this->session-> flashdata('success');
    echo $this->session-> flashdata('validURL');
?>
    <div class="container">
        <h1>Add a Bookmark</h1>
        <form action="main/add" method="POST" >
            <p><Label>Name</Label><input type="text" name="name" class="idCon"></p>
            <p><Label>URL  </Label><input type="text" name="url" class="idCon"></p>
            <p><select name="type" id="select">
                <option value="">-- click me --</option>
                <option value="Favorites">Favorites</option>
                <option value="Others">Others</option>
            </select></p>
            <p><input type="submit" name="addbtn" value="Add"></p>
        </form>
    </div>
    <div class="bookmark">
        <table>
            <tr>
<?php
    if(count($value) == 0) {?>
      <h1>There is no table data.</h1>  
<?php   }  ?>
<?php if(count($value) != 0) { ?>
<?php   foreach($value[0] as $key => $val)   {?>
<?php   if($key != 'id' && $key != 'created_at'  && $key !='updated_at') {?>
            <th><?= $key ?></th>
            <?php   } ?>
<?php   } ?>
        <td>action</td>
        </tr>
            <tbody>
<?php foreach($value as $val) {?>
                <tr>
                    <td><?= $val['name'] ?></td>
                    <td><a href="#"><?= $val['url'] ?></a></td>
                    <td><?= $val['folder'] ?></td>
                    <form action="main/show_delete/<?= $val['id'] ?>" method ="POST">
                        <td>
                            <input type="hidden" name="action" value="del">
                            <input type="hidden" name="delete" value="<?= $val['id'] ?>">
                            <input type="submit" name="del" value="Delete">
                        </td>
                    </form>
                </tr>
            </tbody>
            <?php   } ?>
            <?php   } ?>
        </table>
    </div>
</body>
</html>