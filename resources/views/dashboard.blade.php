<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="container mt-4">


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Employee Details
                <a href="{{ route('employee.create') }}" class="btn btn-primary float-right">Add employees</a>
        
                </h4>
            </div>
            <div class="card-body">
            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session('success') }}
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
              </div>
              @endif
              @if(session('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session('error') }}
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
              </div>
              @endif
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Employee Name</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>E-Mail</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $employee)
                  <td>{{ $loop->iteration }}</td> 
                  <td>{{$employee->name}}</td>
                  <td>{{$employee->department}}</td>
                  <td>{{$employee->designation}}</td>
                  <td>{{$employee->email}}</td>
                  <td>{{$employee->mobile}}</td>
                  <td>
                   <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                   <a href="{{ route('employee.delete',$employee->id) }}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                  </tr>
                  @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>