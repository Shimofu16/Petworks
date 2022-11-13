<div class="card-body">
    <div class="row">
        <div class="col border-end">
            @switch($currentStep)
                @case(1)
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
                                placeholder="Cheif Complaint" wire:model='complaint'>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col-md-6">
                            <label for="weight">Body Weight:</label>
                            <input type="number" class="form-control" name="weight" id="weight" placeholder="Body Weight">
                        </div>
                        <div class="col-md-6">
                            <label for="diet">Diet:</label>
                            <input type="text" class="form-control" name="diet" id="diet" placeholder="Diet">
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col-md-6">
                            <label for="hr">HR:</label>
                            <input type="number" class="form-control" name="hr" id="hr" placeholder="HR">
                        </div>
                        <div class="col-md-6">
                            <label for="rr">RR:</label>
                            <input type="number" class="form-control" name="rr" id="rr" placeholder="RR">
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
                            <input type="text" class="form-control" name="color" id="color" placeholder="Color">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="next_visit">Next Visit:</label>
                            <input type="date" class="form-control" name="next_visit" id="next_visit" placeholder="Next ">
                        </div>
                        <div class="col-md-6">
                            <label for="doctor">Doctor:</label>
                            <select class="form-select" aria-label="Default select example" name="doctor_id" id="doctor_id">
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
                        <div class="col">
                            <label for="comment" class="col-form-label">Comment:</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment"></textarea>
                        </div>
                    </div>
                @break

                @case(2)
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="category_id">Category:</label>
                            <select class="form-select" aria-label="Default select example" name="category_id" id="category_id"
                                wire:model='category_id'>
                                <option selected>--- Selecet category ---</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="productId">Products:</label>
                            <select class="form-select" aria-label="Default select example" name="product" id="productId"
                                wire:model='productId'>
                                <option value="">--- Selecet Product ---</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->product_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @break

                @default
            @endswitch

            <div class="d-flex justify-content-between  align-items-center">
                @if ($currentStep == 1)
                    <div></div>
                @endif
                @if ($currentStep != 1)
                    <button type="button" class="btn btn-secondary" wire:click="back()">Back</button>
                @endif
                @if ($currentStep != $totalSteps)
                    <button type="button" class="btn btn-primary" wire:click="next()">Next</button>
                @endif
                @if ($currentStep == $totalSteps)
                    <button type="submit" class="btn btn-success" wire:click="submit()">Submit</button>
                @endif
            </div>
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($selected_products as $product)
                        <tr>
                            <td>{{ $product->product->product_name }}</td>
                            <td>{{ $product->product->price }}</td>
                            <td>
                                <div class="d-flex flex-column align-items-center w-25">
                                    <button class="btn btn-sm btn-primary px-2 my-0" wire:click='increase({{ $product->product_id }})'><i class="fa fa-arrow-up " aria-hidden="true"></i></button>
                                    <span class="bordered"> {{ $product->quantity }}</span>
                                    <button class="btn btn-sm btn-primary px-2 my-0" wire:click='decrease({{ $product->product_id }})'><i class="fa fa-arrow-down" aria-hidden="true"></i></button>
                                </div>
                               
                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">
                            <div class="d-flex justify-content-end me-3">
                                <span>Total: {{ number_format($total, 2) }}</span>
                            </div>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
