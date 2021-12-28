@extends('layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?=$title?></h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 ">
                    <button type="submit" class="btn btn-primary float-right">Thêm mới</button>
                    <!-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol> -->
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 200px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                        <td><?= date('d-m-Y', strtotime($record[$config['field']])) ?></td>
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
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection