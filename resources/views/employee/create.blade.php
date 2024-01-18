<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="container mt-2">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Employee</h6>
         </div>
         <div class="card-body">
            <form  method="POST" action="{{route('employee.store')}}" >
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
                  <input type="text" class="form-control" id="exampleFirstName"
                        placeholder="Name" name="name" value="{{old('name')}}" >
                     @error('name')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" id="exampleLastName"
                        placeholder="Email" name="email"  value="{{old('email')}}">
                     @error('email')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <select name="department" id="department" class="form-control">
                                    <option value="HR">Human Resources</option>
                                    <option value="IT">Information Technology</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Development">Development</option>
                             
                                </select>
                     @error('department')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" id="exampleLastName"
                        placeholder="Designation" name="designation"  value="{{old('designation')}}">
                     @error('designation')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control" id="exampleLastName"
                        placeholder="Mobile" name="mobile"  value="{{old('mobile')}}">
                     @error('mobile')
                     <span style="color:red">{{$message}}</span>
                     @enderror
                  </div>
               </div>

               <div class="text-center">	
                  <button class="btn btn-primary rounded-pill" type="submit">Add</button>
                  <a href="{{url('/dashboard')}}" class="btn btn-primary rounded-pill">Back</a>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
</div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
