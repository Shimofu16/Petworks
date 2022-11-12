@extends('Petworks.admin.index')
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">


                <div class="card-body">
                    <div class="row">
                        <div class="col border-end">

                            <form action="{{ route('admin.confirm.show', ['id' => $id]) }}" method="post">
                                @csrf

                                {{-- PET --}}
                                <div class="row">
                                    <hr class="horizontal dark mt-0">
                                    <h5 class="text-center text-bold text-success mt-0">Pet Information</h5>
                                    <hr class="horizontal dark mt-0">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="complaint">Chief
                                            Complaint:</label>
                                        <input type="text" class="form-control" name="complaint" id="complaint"
                                            placeholder="Cheif Complaint">
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col-md-6">
                                        <label for="weight">Body Weight:</label>
                                        <input type="number" class="form-control" name="weight" id="weight"
                                            placeholder="Body Weight">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="diet">Diet:</label>
                                        <input type="text" class="form-control" name="diet" id="diet"
                                            placeholder="Diet">
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col-md-6">
                                        <label for="hr">HR:</label>
                                        <input type="number" class="form-control" name="hr" id="hr"
                                            placeholder="HR">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="rr">RR:</label>
                                        <input type="number" class="form-control" name="rr" id="rr"
                                            placeholder="RR">
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col-md-3">
                                        <label for="temperature">Temperature:</label>
                                        <input type="number" class="form-control" name="temperature" id="temperature"
                                            placeholder="Temperature">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="color">Color:</label>
                                        <input type="text" class="form-control" name="color" id="color"
                                            placeholder="Color">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="next_visit">Next Visit:</label>
                                        <input type="date" class="form-control" name="next_visit" id="next_visit"
                                            placeholder="Next ">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="doctor">Doctor:</label>
                                        <select class="form-select" aria-label="Default select example" name="doctor_id"
                                            id="doctor_id">
                                            <option selected>--- Selecet Doctor ---</option>
                                            @foreach ($doctors as $doctor)
                                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="comment" class="col-form-label">Comment:</label>
                                        <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="product">Category:</label>
                                        <select class="form-select" aria-label="Default select example" name="product"
                                            id="product_id">
                                            <option selected>--- Selecet category ---</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product">Products:</label>
                                        <select class="form-select" aria-label="Default select example" name="product"
                                            id="product_id">
                                            <option selected>--- Selecet product ---</option>
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->product_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>




                            </form>

                        </div>

                        {{-- RECEIPT --}}
                        <div class="col">

                            <div class="row">
                                <hr class="horizontal dark mt-0">
                                <h5 class="text-center text-bold text-success mt-0">Receipt</h5>
                                <hr class="horizontal dark mt-0">
                            </div>

                            <table class="table align-items-center mb-0" id="confirm">

                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Product
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
