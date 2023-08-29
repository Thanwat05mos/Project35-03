@extends('layouts.masterbackend')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>เพิ่มประเภทสินค้า</strong></div>
            <form method="post" action="{{ url('admin/type/updete/'.$category->category_id) }}">
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">ชื่อประเภทสินค้า</label>
                        <input value="{{$category->name}}" type="text" id="name" name="name" class="form-control">
                    </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                    <a href="{{ route('t.index') }}" class="btn btn-danger">กลับหน้าแรก</a>
                </div>
            </div>
            </form>


        </div>
    </div>
</div>
@endsection
