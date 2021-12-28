@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- <div class="card"> -->
        <!-- <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- /.card-header -->
        <!-- <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cơ quan</th>
                            <th>Kí hiệu</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Ghi chú</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($records as $record)
                        <tr>
                            <td>{{$record->id}}</td>
                            <td>{{$record->co_quan}}</td>
                            <td>{{$record->ki_hieu}}</td>
                            <td>{{$record->dia_chi}}</td>
                            <td>{{$record->trang_thai}}</td>
                            <td>{{$record->ghi_chu}}</td>
                            <td>{{$record->created_at->format('d-m-Y')}}</td>
                            <td>{{$record->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> -->
        <!-- /.card-body -->
        <!-- </div> -->
        <!-- /.card -->
        <div class="card">
            <!-- <div class="card-header">
                <h3 class="card-title">Simple Full Width Table</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div> -->
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <!-- lặp để lấy tên trường trong database -->
                            <?php foreach ($configs as $config) { ?>
                                <th><?= $config['name'] ?></th>
                                <!-- <th style="width: 15%">Thao tác</th> -->
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- lặp để lấy dữ liệu trong database -->
                        <?php foreach ($records as $record) { ?>
                            <tr>
                                <?php foreach ($configs as $config) { ?>

                                    <!-- phân chia trường hợp hiển thị -->
                                    <?php switch ($config['type']) {
                                        case "text":
                                    ?>
                                            <td><?= $record[$config['field']] ?></td>
                                        <?php
                                            break;
                                        case "date":
                                        ?>
                                            <td><?= date_format($record[$config['field']], "d/m/Y") ?></td>
                                        <?php
                                            break;
                                        case "Info":
                                        ?>
                                            <td>
                                                <a class="btn btn-sm btn-primary">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                            </td>
                                        <?php
                                            break;
                                        case "Edit":
                                        ?>
                                            <td>
                                                <a class="btn btn-sm btn-success">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        <?php
                                            break;
                                        case "Delete":
                                        ?>
                                            <td>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                    <?php
                                            break;
                                    } ?>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <!-- căn giữa chuyển trang -->
                <br>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col-3">
                        {{$records->appends(request()->all())->links()}}
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div>
@endsection