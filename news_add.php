<?php
include("theme-header.php");
?>
        <form class="row" action="news_add_action.php" method="post" enctype="multipart/form-data">
            <input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر">
            <input class="col-12 col-md m-2" type="text" name="name" placeholder="عنوان">
            <input class="col-12 col-md m-2" type="text" name="ghymat" placeholder="قیمت ">
            <input class="col-12 col-md m-2" type="text" name="id" placeholder="ایدی">
            <input class="col-12 col-md m-2" type="submit" value="ذخیره">
        </form>
<?php
include("theme-footer.html");
?>