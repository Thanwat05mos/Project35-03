@extends('layouts.masterbackend')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>เพิ่มประเภทสินค้า</strong></div>
            <form action="" method="post">
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">ชื่อประเภทสินค้า</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                </div>
                <div class="mt-3">
                    <input type="submit" class="btn btn-primary" value="บันทึก">
                    <a href="{{route('p.index')}}" class="btn btn-danger">กลับหน้าแรก</a>
                </div>
                <div class="mt-4">

                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
