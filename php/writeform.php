<div class="center">
    <form action="/php/writeprocess.php" method="post">
        <input type="text" class="title" name="title" placeholder="INPUT TITLE">
        <textarea name="description"></textarea>
        <script>
            CKEDITOR.replace( 'description',
{
width:  '1000px',
height: '500px'
});
        </script>
<input type="submit" class="submit" value="작성">
    </form>

</div>
