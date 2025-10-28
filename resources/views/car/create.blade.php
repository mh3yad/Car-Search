<x-app-layout title="New Car">
    <div class="container-small">
        <h1 class="car-details-page-title">Add new car</h1>
        <form
                action=""
                method="POST"
                enctype="multipart/form-data"
                class="card add-new-car-form"
        >
            <div class="form-content">
                <div class="form-details">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Maker</label>
                                <select id="makerSelect" name="maker_id">
                                    <option value="#" disabled selected>Select</option>
                                    @foreach($makers as $maker)
                                        <option value="{{$maker->id}}">{{$maker->name}}</option>
                                    @endforeach
                                </select>
                                <p class="error-message">This field is required</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Model</label>
                                <select id="modelSelect" name="model_id">
                                    <option value="#" disabled selected>Select</option>
                                    @foreach($models as $model)
                                        <option value="{{$model->id}}" data-parent="{{$model->maker_id}}">{{$model->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Year</label>
                                <select name="year">
                                    @for($i=1950;$i<date('Y');$i++)
                                        <option name="year">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Car Type</label>
                        <div class="row">
                            @foreach($types as $type)
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="car_type" value="{{$type->id}}" />
                                        {{$type->name}}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" placeholder="Price" name="price"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Vin Code</label>
                                <input placeholder="Vin Code" name="vin"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Mileage (ml)</label>
                                <input placeholder="Mileage" name="mileage" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Fuel Type</label>
                        <div class="row">
                            @foreach($fuel as $type)
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="fuel_type" value="{{$type->id}}" />
                                        {{$type->name}}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Governorate</label>
                                <select id="stateSelect" name="governorate">
                                    <option value="#" disabled selected>Select</option>
                                    @foreach($governorates as $governorate)
                                        <option value="{{$governorate->id}}">{{$governorate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>City</label>
                                <select  id="citySelect" name="city">
                                    <option value="#" disabled selected>Select</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}" data-parent="{{$city->governorate_id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Address</label>
                                <input placeholder="Address" name="address"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Phone</label>
                                <input placeholder="Phone" name="phone"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                @foreach($features as $feature)
                                    <label class="checkbox">
                                        <input
                                                type="checkbox"
                                                name="air_conditioning"
                                                value="1"
                                        />
                                        {{$feature}}
                                    </label>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Detailed Description</label>
                        <textarea rows="10" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="checkbox">
                            <input type="checkbox" name="published" />
                            Published
                        </label>
                    </div>
                </div>
                <div class="form-images">
                    <div class="form-image-upload">
                        <div class="upload-placeholder">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    style="width: 48px"
                            >
                                <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                />
                            </svg>
                        </div>
                        <input id="carFormImageUpload" type="file" multiple />
                    </div>
                    <div id="imagePreviews" class="car-form-images"></div>
                </div>
            </div>
            <div class="p-medium" style="width: 100%">
                <div class="flex justify-end gap-1">
                    <button type="button" class="btn btn-default">Reset</button>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>