@extends('layouts.default')

@section('content')
<div class="section-header">
    <h1>Data Article Type</h1>
    <div class="section-header-breadcrumb">
        <button class="btn btn-primary" data-toggle="modal" data-target="#new_article_type" type="button">+ New Type</button>
    </div>
</div>
<div class="card">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card-header">
            <h4>List Article Type</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="table_article_type" class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 0 ?>
                        @forelse ($items as $item)
                            <?php $nomor += 1 ?>
                            <tr>
                                <td>{{ $nomor }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ date('d-M-Y h:i:s', strtotime($item->created_at)) }}</td>
                                <td>{{ date('d-M-Y h:i:s', strtotime($item->updated_at)) }}</td>
                                <td>
                                    <a href="{{ route('article-type.edit', $item->slug) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('article-type.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm confirmation" id="confirmation">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center p-5">
                                    Data Tidak Tersedia
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
        </div>
    </div>
</div>

@endsection

@push('before-script')
    <!-- Modal Tambah Kategori Artikel -->
    <div class="modal fade" id="new_article_type" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create New Article Type</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <form action="{{ route('article-type.store') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="name">Type Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" name="submit" id="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                </div>
            </div>

        </div>
    </div>
@endpush