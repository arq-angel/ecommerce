@extends("admin.layouts.master")

@section("content")
    <section class="section">
        <div class="section-header">
            <h1>Slider </h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Slider</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route("admin.slider.update", $slider->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label>Preview</label>
                                    <br>
                                    <img width="200" src="{{ asset($slider->banner) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="">Banner</label>
                                    <input name="banner" type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input name="type" id="type" type="text" class="form-control" value="{{ $slider->type}}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" id="title" type="text" class="form-control" value="{{ $slider->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="starting-price">Starting Price</label>
                                    <input name="starting_price" id="starting-price" type="text" class="form-control" value="{{ $slider->starting_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="button-url">Button Url</label>
                                    <input name="btn_url" id="button-url" type="text" class="form-control" value="{{ $slider->btn_url }}">
                                </div>
                                <div class="form-group">
                                    <label for="serial">Serial</label>
                                    <input name="serial" id="serial" type="text" class="form-control" value="{{ $slider->serial }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputState" >Status</label>
                                    <select name="status" id="inputState" class="form-control">
                                        <option {{ $slider->status === 1 ? 'selected' : '' }} value="1" selected>Active</option>
                                        <option {{ $slider->status === 0 ? 'selected' : '' }} value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
