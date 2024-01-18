<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="container mt-2">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Employee</h6>
         </div>
         <div class="card-body">
            <form  method="POST" action="{{route('employee.update',$data->id)}}" >
               @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
               @csrf								
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label class="form-label  text-dark" >Name:</label>
                  <input type="text" class="form-control" id="exampleFirstName"
                        name="name"  value="{{$data->name}}">
                     @error('name')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="col-sm-6">
                  <label class="form-label  text-dark" >Email:</label>
                  <input type="email" class="form-control" id="exampleLastName"
                         name="email"   value="{{$data->email}}">
                     @error('email')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label class="form-label  text-dark" >Department:</label>
                  <select name="department" class="form-control" required>
                  <option value="HR" <?php if ($data->department === 'HR') echo 'selected'; ?>>HR</option>
                   <option value="IT" <?php if ($data->department === 'IT') echo 'selected'; ?>>IT</option>
                   <option value="Sales" <?php if ($data->department === 'Sales') echo 'selected'; ?>>Sales</option>
                   <option value="Marketing" <?php if ($data->department === 'Marketing') echo 'selected'; ?>>Marketing</option>
                   <option value="Development" <?php if ($data->department === 'Development') echo 'selected'; ?>>Development</option>

                                        </select>
                     @error('department')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="col-sm-6">
                  <label class="form-label text-dark" >Designation:</label>
                  <input type="text" class="form-control" id="exampleLastName"
                         name="designation"   value="{{$data->designation}}">
                     @error('designation')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label class="form-label text-dark" >Mobile:</label>
                  <input type="text" class="form-control" id="exampleLastName"
                       name="mobile"  value="{{$data->mobile}}">
                     @error('mobile')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>

               </div>

               <div class="text-center">	
                  <button class="btn btn-primary rounded-pill" type="submit">Update</button>
                  <a href="{{url('/dashboard')}}" class="btn btn-primary rounded-pill">Back</a>
               </div>
            </form>
         </div>
      </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
