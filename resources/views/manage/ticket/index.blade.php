@extends('global.main')

@section('add_css')
@endsection


@section('content')
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#">首頁</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">維修單</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>維修單列表</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> 維修單列表
    <small>Ticket List</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light">
            <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="btn green">
                        新增消息 <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover" id="table_list">
            <thead>
            <tr>
                <th class="table-checkbox">
                    <input type="checkbox" class="group-checkable" name="ids[]" data-set="#table_list .checkboxes"/>
                </th>
                <th style="width:40%;">
                    客戶名稱
                </th>                       
                <th>
                    類別名稱
                </th>
                <th>
                    機型
                </th>
                <th>
                    發布日期
                </th>
                <th>
                    動作
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $one)
            <tr class="odd gradeX">
                <td>
                    <input type="checkbox" class="checkboxes ids" name="ids[]" value="{{$one->id}}"/>
                </td>
                <td>
                    <a href="#">{{ $news_one->title }}</a>
                </td>
                <td>
                    {{ $news_one->column }}
                </td>
                <td>
                    {{ $news_one->author }}
                </td>
                <td>
                    {{ $news_one->created_at }}
                </td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        動作 <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a class="btn_news_edit" uid="{{$news_one->id}}" href="{{ action('Manage\Platform\NewsController@edit',['id' => $news_one->id]) }}">
                                <i class="fa fa-pencil"></i>
                                編輯 </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a class="btn_news_delete" uid="{{$news_one->id}}" href="javascript:;">
                                <i class="fa fa-trash-o"></i>
                                刪除 </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection

@section('add_js')
@endsection