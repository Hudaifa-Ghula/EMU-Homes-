<x-layout>
    <br><br><br><br><br><br>

        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                    <div class="intro-body">
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
<h2>List a property</h2>
<x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form action="add" enctype="multipart/form-data" method="POST">
    @csrf
    <br>
    <input class="form-control form-control-lg form-control-a" type="text" name="title" placeholder="title">
    <br><input class="form-control form-control-lg form-control-a" max="4" type="number" name="bedrooms" placeholder="bedrooms">
    <br><input class="form-control form-control-lg form-control-a" max="4" type="number" name="bathrooms" placeholder="bathrooms">
    <br><textarea rows="5" class="form-control form-control-lg form-control-a" style="white-space: pre-wrap;" type="text" name="desc" placeholder="description"></textarea>
    <br><input class="form-control form-control-lg form-control-a" max="500000" type="number" name="price" placeholder="price">
    <br><select class="form-control form-control-lg form-control-a" name="area" >
        <option value="Baykal">Baykal</option>
        <option value="Canbulat">Canbulat</option>
        <option value="Çanakkale">Çanakkale</option>
        <option value="Emu Campus">Emu Campus</option>
        <option value="Dumlupınar">Dumlupınar</option>
        <option value="Kaliland">Kaliland</option>
        <option value="Karakol">Karakol</option>
        <option value="Maraş">Maraş</option>
        <option value="Namık Kemal">Namık Kemal</option>
        <option value="Palm Beach">Palm Beach</option>
        <option value="Sakarya">Sakarya</option>
        <option value="Saklıkent">Saklıkent</option>
        <option value="Salamis Road">Salamis Road</option>
        <option value="Suriçi">Suriçi</option>
        <option value="Tekant">Tekant</option>
        <option value="Tuzla">Tuzla</option>
        <option value="Yeniboğaziçi">Yeniboğaziçi</option>
      </select>
      <br><input class="form-control form-control-lg form-control-a" type="text" name="location" placeholder="location">
      <br><select class="form-control form-control-lg form-control-a" name="for">
          <option value="rent">Rent</option>
          <option value="sale">Sale</option>
          <option value="open">Open House</option>
      </select>

      <br><select class="form-control form-control-lg form-control-a" name="type">
        <option value="villa">Villa</option>
        <option value="dorm">Dorm</option>
        <option value="house">House</option>
        <option value="apartment">Apartment</option>
    </select> <br>
    Pictures (add minimum 1 picture):
    <br>
<br><input class="form-control form-control-lg form-control-a" type="file" accept="image/*" name="image">
<br><input type="file" accept="image/*" name="pic2"class= "form-control form-control-lg form-control-a" >
<br><input type="file" accept="image/*" name="pic3" class="form-control form-control-lg form-control-a">
<br><input type="file" accept="image/*" name="pic4" class="form-control form-control-lg form-control-a">
<br><input type="file" accept="image/*" name="pic5" class="form-control form-control-lg form-control-a">
    <br><input  class="btn btn-b" type="submit" value="Submit for approval">
</form>
</div></div></div></div></div></div></div></div>
</x-layout>
