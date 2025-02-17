@extends('admin.newlayout.layout', ['breadcom'=>['Courses','Categories','Filters',$filter->filter,'Tags']])
@section('title')
    {{ trans('admin.filter_tags') }}
@endsection
@section('page')
    <div class="card">
        <div class="card-body">
            <div class="tabs">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#list" data-toggle="tab"> {{ trans('admin.filter_tags') }} </a></li>
                    <li class="nav-item"><a class="nav-link" href="#newitem" data-toggle="tab"> {{ trans('admin.new_tag') }} </a></li>
                </ul>
                <div class="tab-content">
                    <div id="list" class="tab-pane active">
                        <table class="table table-bordered table-striped mb-none" id="datatable-details">
                            <thead>
                            <tr>
                                <th>{{ trans('admin.th_title') }}</th>
                                <th class="text-center" width="100">{{ trans('admin.th_controls') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lists as $list)
                                <tr>
                                    <td>{{ $list->tag }}</td>
                                    <td class="text-center">
                                        <a href="/admin/content/category/filter/tag/{{ $id }}/edit/{{ $list->id }}#edit" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="#" data-href="/admin/content/category/filter/tag/delete/{{ $list->id }}" title="Delete" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="newitem" class="tab-pane ">
                        <form method="post" action="/admin/content/category/filter/tag/store/new" class="form-horizontal form-bordered">
                            <input type="hidden" name="filter_id" value="{{ $id }}">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">{{ trans('admin.tag_title') }}</label>
                                <div class="col-md-6">
                                    <input type="text" name="tag" value="" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">{{ trans('admin.sort') }}</label>
                                <div class="col-md-6">
                                    <input type="number" name="sort" class="spinner-input form-control" maxlength="3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6">
                                    <button class="btn btn-primary" type="submit">{{ trans('admin.save_changes') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


