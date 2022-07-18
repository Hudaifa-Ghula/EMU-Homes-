<form action="uploadpic" enctype="multipart/form-data" method="POST">
@csrf
    <input type="file" name="image">
      <input type="file" name="pic2">
      <input type="file" name="pic3">
      <input type="file" name="pic4">
      <input type="file" name="pic5">
    <input type="submit">
    </form>
