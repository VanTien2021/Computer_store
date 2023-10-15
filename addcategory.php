<form autocomplete="off" action="<?php echo BASE_URL?>index.php?url=category/insertcategory" method="POST">
    <?php
    if(isset($msg)){
        echo '<span style="color:blue;font-weight:bold;">' .$msg.'</span>';
    }
    ?>
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text " required="1" name="title"></td>

        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text " required="1" name="descrip"></td>

        </tr>
        <tr>
            <td><input type="submit" name="addcategory " value="Insert"></td>
        </tr>

    </table>
</form>