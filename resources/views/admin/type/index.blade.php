@extends('layouts.masterbackend')
@section('content')
    <div class="row">

        <div class="col-lg-12 mt-5">
            <a href="{{ route('t.create') }}" class="btn btn-success">เพิ่มประเภทสินค้า</a>
            <div class="card mt-5">
                <div class="card-header">
                    <strong class="card-title">ประเภทสินค้า</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ชื่อประเภท</th>
                                <th scope="col">วันที่บันทึกรายการ</th>
                                <th scope="col">วันที่อัพเดทรายการ</th>
                                <th scope="col">การจัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $category as $cat )
                            <tr>
                                <td>{{ $cat->category_id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->created_at }}</td>
                                <td>{{ $cat->updated_at }}</td>
                                <td>
                                    <a href="{{ url ('admin/type/edit/'.$cat->category_id)}}" class="btn btn-warning">แก้ไข</a>
                                    <a href="{{ url ('admin/type/delete/'.$cat->category_id)}}" class="btn btn-danger">ลบ</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
