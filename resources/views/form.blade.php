<form method = "Post" action ="/unicode"> 
    <div>
        <input type="text" name = "username" placecholder = "Nhập tên"/>
        <input type="hidden" name = "_method" value = "POST"/>
        <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    </div>
    <button type = "submit"> submit</button>
</form>