@extends('layouts.doc')
@section('content')
    <section style="padding-top: 60px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add Post
                    </div>
                    <div class="card-body">
                        @if(Session::has('post-created'))
                        
                            <div class="alert alert-success" role ="alert">
                                {{Session::get('post-created')}}
                            </div>
                        
                        @endif
                        <form method="POST" action = "{{route('post.create')}}">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="name" class="form-label"> Name </label>
                                    <input type="text" name="name" class="form-control"  placeholder="Enter Your Name" required>
                                    <div class="invalid-text">
                                    Please enter a name in the textarea.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="dob" class="form-label"> DOB </label>
                                    <input type="date" name="dob" class="form-control" min = "01/01/1990" max = "01/01/2022">
                                </div>
                                <div class="mb-3">
                                <label  for="dzongkhag" class="form-label"> Dzongkhag </label>
                                <select name ="dzongkhag" class="form-select" aria-label="Default select example">
                                <option selected>Choose Your Dzongkhag </option>
                                <option value="Thimphu">Thimphu</option>
                                <option value="Paro">Paro</option>
                                <option value="Bumthang">Bumthang</option>
                                <option value="Zhemgang">Zhemgang</option>
                                <option value="Trongsa">Trongsa</option>
                                <option value="Chukha">Chukha</option>
                                <option value="Samtse">Samtse</option>
                                <option value="Gelephu">Gelephu</option></option>
                                <option value="Mongar">Mongar</option>
                                </select>
                                </div>
                                   
                                    <label for="designation" class="form-label"> Designation: </label>
                                    <select name = "designation" class="form-select" aria-label="Default select example">
                                    <option selected>Your Designation</option>
                                    <option value="title1">title1</option>
                                    <option value="title2">title2</option>
                                    <option value="title3">title3</option>
                                    </select>

                                    <div class="mb-3">
                                    <label for="age" class="form-label"> Age </label>
                                    <input type="integer" name="age" class="form-control"  placeholder="Enter your age">
                                    </div>

                                    <div class="mb-3">
                                    <label for="age" class="form-label"> Phone </label>
                                    <div class="input-group">
                                        <span class="input-group-text"> +975 </span>
                                         <input type="integer" name="phone" class="form-control"  placeholder="Enter 8 digits Contact Number">
                                    </div>
                                    </div>

                                    <div class="mb-3">
                                        <label  for = "maritalstatus" class="form-label"> Marital Status </label>
                                        <select name = "maritalstatus" class="form-select" aria-label="Default select example">
                                        <option selected>Single </option>
                                        <option value="Married">Married</option>
                                        <option value="Engaged">Engaged</option>
                                        <option value="Divorce">Divorce</option>
                                        </select>
                                    </div> 

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Add Post</button>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
