@extends('layouts.masterbackend')
@section('content')
    <div class="row">

        <div class="col-lg-12 mt-5">
            <a href="{{ route('p.create') }}" class="btn btn-success">เพิ่มสินค้า</a>
            <div class="card mt-5">
                <div class="card-header">
                    <strong class="card-title">สินค้า</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">รหัสสินค้า</th>
                                <th scope="col">ชื่อ</th>
                                <th scope="col">ราคา</th>
                                <th scope="col">รายละเอียด</th>
                                <th scope="col">รูป</th>
                            </tr>
                        </thead>
                        <tbody>

                         <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                         </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
