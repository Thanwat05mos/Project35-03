@extends('layouts.masterbackend')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>เพิ่มสินค้า</strong></div>
            <form action="" method="post">
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">ชื่อสินค้า</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price" class=" form-control-label">ราคาสินค้า</label>
                        <input type="text" id="price" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="detail" class=" form-control-label">รายละเอียดสินค้า</label>
                        <input type="text" id="detail" name="detail" class="form-control">
                    </div>


                    <div class="form-group">
                        <label class=" form-control-label">ประเภทสินค้า</label>
                        <select data-placeholder="เลือกประเภทสินค้า" class="standardSelect form-control" tabindex="1">
                            <option value="1">ขนม</option>
                            <option value="2">เครื่องดื่ม</option>
                            <option value="3">อาหารสำเร็จรูป</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="form-control-label">รูปภาพ</label>
                    <input type="file" id="image" name="image" class="form-control">
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
