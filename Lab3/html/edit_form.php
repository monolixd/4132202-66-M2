<?php
include "condb.php";

$id = $_GET['id'];
$sql = "SELECT * FROM tb_member WHERE id_member = '$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form>
    <label for="id_p">ID : </label>
    <input type="text" name="id" id="id_p" value="<?= $row['id_member'] ?>" readonly> <br>
    <label for="name_p">NAME : </label>
    <input type="text" name="name" id="name_p" value="<?= $row['member_name'] ?>"> <br>
    <label for="email_p">EMAIL : </label>
    <input type="text" name="email" id="email_p" value="<?= $row['member_email'] ?>"><br>
    <button type="submit" class="btn btn-primary">SAVE</button>
    <button type="reset" class="btn btn-danger">CANCLE</button>
</form>

<script>
    $(function() {
        $("form").submit(function(e) {
            e.preventDefault();

            let fm = $(this);
            $.ajax({
                url: "/edit_member.php",
                method: "POST",
                data: fm.serialize(),
                success: function(res) {
                    if (res == 'error')
                        alert("Can't insert data.")
                    else{
                        $("#tb_member").load("/listItem.php");
                        $('#staticBackdrop').modal('hide');

                    }
                }
            });
        });
    });
</script>