@extends ('layout.main')
 
@section ('title','Daftar Harga')

@section('container')
  <div class="container">
      <div class="row">
        <div class="col-10">
          <h1 class="mt-3">Harga sayur</h1>


          <table class="table">
              <thead clas="thead-dark">
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">1</th>       
                        <td>Rika</td>
                        <td>5</td>
                        <td>5000</td>
                        <td>Kangkung</td>
                        <td>
                         <a href="" class="badge badge-success">edit</a>
                         <a href="" class="badge badge-danger">delete</a>
                     </td>
                    </tr>
              </tbody>
              <tbody>
                  <tr>
                      <th scope="row">2</th>       
                        <td>Dika</td>
                        <td>3</td>
                        <td>4000</td>
                        <td>Wortel</td>
                        <td>
                         <a href="" class="badge badge-success">edit</a>
                         <a href="" class="badge badge-danger">delete</a>
                     </td>
                    </tr>
              </tbody>
              <tbody>
                  <tr>
                      <th scope="row">3</th>       
                        <td>Tina</td>
                        <td>2</td>
                        <td>10000</td>
                        <td>Brokoli</td>
                        <td>
                         <a href="" class="badge badge-success">edit</a>
                         <a href="" class="badge badge-danger">delete</a>
                     </td>
                    </tr>
              </tbody>
              <tbody>
                  <tr>
                      <th scope="row">4</th>       
                        <td>Lita</td>
                        <td>6</td>
                        <td>5500</td>
                        <td>Terong</td>
                        <td>
                         <a href="" class="badge badge-success">edit</a>
                         <a href="" class="badge badge-danger">delete</a>
                     </td>
                    </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  @endsection
