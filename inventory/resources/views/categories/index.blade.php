
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<section class="intro">
    <div class="bg-image h-100" style="background-color: #f5f7fa;">
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card">
                <div class="card-body p-0">
                  <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                    <h1 class="pull-right"><a href='/categories/create' class='btn btn-info' role='button'>Create new row</a></h1>
                    <table class="table table-striped mb-0">
                      <thead style="background-color: #ffffff;">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Category</th>
                          <th scope="col"></th>
                          <th scope=""></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categories as $category)
                        <tr>
                          <th scope="row">{{ $category->id }}</th>
                          <td>{{ $category->category }}</td>
                          <td><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                          <td>
                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                            {!! Form::close() !!}
                          </td>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>