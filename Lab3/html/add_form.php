<form>
    <label for="id">ID</label>
    <input type="text" name="id" id="id_p">
    <label for="name_p">NAME</label>
    <input type="text" name="name" id="name_p">
    <label for="email_p">ID</label>
    <input type="text" name="email" id="email_p">
    <button type="submit" class="btn btn-primary">SAVE</button>
    <button type="reset" class="btn btn-danger">CANCLE</button>
    

</form>

<script>
    $(function(){
        $("form").submit();
            e.preventDefault();

            let fm=$(this);
            $.ajax({
                url:"/add_member.php",
                method:"POST",
                data: fm.serialize(),
                sucess:function(res){
                    if (res == 'error')
                        alert("Can't insert data.")
                    else
                        $("#tb_member").load("/listItem.php")
                }
            });
    });
</script>