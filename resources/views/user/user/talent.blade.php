<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('img/logounp.png') }}"/>
        <title>Talent UNP</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: #F1F6F5;">
          <div class="container">
            <div class="d-flex justify-content-between py-3">
              <div class="h4">List Talent</div>
              <div>
                  <a href="{{ route('user_home') }}" class="btn btn-primary">Back</a>
              </div>
          </div>
        <div class="container p-2">
            <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">Nama Kategori</th>             
                    <th scope="col">Nama Talent</th>
                    <th scope="col">Action</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>         
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td> 
                        <td> <a href="{{ route('admin_user_edit', $item->id ) }}" button type="button" class="btn btn-primary">EDIT</a>
                            <a href="{{ route('admin_user_delete', $item->id ) }}" button type="button" class="btn btn-danger" onclick="return confirm('are u sure?')">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        
        

      

      
      <div class="container">
              <hr style="height: 10px; background-color: black;">
              <h5>Copyright &copy; Talent UNP</h5>
              <br>
      </div>
</div>
</div>
    

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
            integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
            crossorigin="anonymous"></script>
    </body>
</html>