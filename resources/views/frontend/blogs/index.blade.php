@extends('layouts.frontend')
@section('page_title', 'المقالات')

@section('content')


    <!-- ***** articles-categories-section Start ***** -->

    <section class="section-style articles-categories-section categories-section ">

        <div class="container">

            <div class="articles-categories-container categories-container ">

                <div class="duplicated-box box-lg">

                    <div class="box-header">

                        <div class="header-title ">

                            الأقسام الرئيسية

                        </div>

                    </div>
                    <div class="box-body box-padding">

                        <div class="body-type articles-categories-items categories-items single-items">

                            <div
                                class="row row-cols-xl-5  row-cols-md-3 row-cols-sm-2  row-cols-1 justify-content-center align-items-start">

                                @foreach ($categories as $category)
                                    <div class="category-wrap">

                                        <a class="category-link" href="{{ route('frontend.blogs.category',$category->id) }}">


                                            <div class="main-content">

                                                <span class="icon">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                        viewBox="0 0 19.272 15">
                                                        <path id="folder-open"
                                                            d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                            transform="translate(0 -32)" />
                                                    </svg>


                                                </span>
                                                <span class="text">{{ $category->name }}</span>


                                            </div>

                                        </a>

                                    </div>
                                @endforeach
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.......</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>

                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>


                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>
                                <div class="category-wrap">

                                    <a class="category-link" href="article-category.html">


                                        <div class="main-content">

                                            <span class="icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.272" height="15"
                                                    viewBox="0 0 19.272 15">
                                                    <path id="folder-open"
                                                        d="M4.949,37.357H16.071V35.75a1.608,1.608,0,0,0-1.607-1.607H9.107L6.964,32H1.607A1.607,1.607,0,0,0,0,33.607v11l3.031-6.064A2.135,2.135,0,0,1,4.949,37.357Zm13.235,1.071H4.949a1.067,1.067,0,0,0-.958.593L0,47H14.97a1.072,1.072,0,0,0,.958-.592l3.214-6.429A1.052,1.052,0,0,0,18.184,38.429Z"
                                                        transform="translate(0 -32)" />
                                                </svg>


                                            </span>
                                            <span class="text">.........</span>


                                        </div>

                                    </a>

                                </div>



                            </div>

                        </div>

                    </div>

                </div>

                <div class="bootstarp-pagination">

                    <nav aria-label="">
                        <ul class="pagination">

                            <li class="page-item active" aria-current="page"><a class="page-link " href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">100</a></li>

                        </ul>
                    </nav>

                </div>

            </div>

        </div>

    </section>

    <!-- ***** articles-categories-section End ***** -->



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @can('blog_create')
                    <div style="margin-bottom: 10px;" class="row">
                        <div class="col-lg-12">
                            <a class="btn btn-success" href="{{ route('frontend.blogs.create') }}">
                                {{ trans('global.add') }} {{ trans('cruds.blog.title_singular') }}
                            </a>
                            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                                {{ trans('global.app_csvImport') }}
                            </button>
                            @include('csvImport.modal', [
                                'model' => 'Blog',
                                'route' => 'admin.blogs.parseCsvImport',
                            ])
                        </div>
                    </div>
                @endcan
                <div class="card">
                    <div class="card-header">
                        {{ trans('cruds.blog.title_singular') }} {{ trans('global.list') }}
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class=" table table-bordered table-striped table-hover datatable datatable-Blog">
                                <thead>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.blog.fields.id') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.blog.fields.title') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.blog.fields.writing_date') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.blog.fields.visits') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.blog.fields.writer') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.blog.fields.category') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.blog.fields.approved') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.blog.fields.files') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.blog.fields.images') }}
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <input class="search" type="text"
                                                placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <input class="search" type="text"
                                                placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <input class="search" type="text"
                                                placeholder="{{ trans('global.search') }}">
                                        </td>
                                        <td>
                                            <select class="search">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach ($people as $key => $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="search">
                                                <option value>{{ trans('global.all') }}</option>
                                                @foreach ($categories as $key => $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $key => $blog)
                                        <tr data-entry-id="{{ $blog->id }}">
                                            <td>
                                                {{ $blog->id ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blog->title ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blog->writing_date ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blog->visits ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blog->writer->name ?? '' }}
                                            </td>
                                            <td>
                                                {{ $blog->category->name ?? '' }}
                                            </td>
                                            <td>
                                                <span style="display:none">{{ $blog->approved ?? '' }}</span>
                                                <input type="checkbox" disabled="disabled"
                                                    {{ $blog->approved ? 'checked' : '' }}>
                                            </td>
                                            <td>
                                                @foreach ($blog->files as $key => $media)
                                                    <a href="{{ $media->getUrl() }}" target="_blank">
                                                        {{ trans('global.view_file') }}
                                                    </a>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($blog->images as $key => $media)
                                                    <a href="{{ $media->getUrl() }}" target="_blank"
                                                        style="display: inline-block">
                                                        <img src="{{ $media->getUrl('thumb') }}">
                                                    </a>
                                                @endforeach
                                            </td>
                                            <td>
                                                @can('blog_show')
                                                    <a class="btn btn-xs btn-primary"
                                                        href="{{ route('frontend.blogs.show', $blog->id) }}">
                                                        {{ trans('global.view') }}
                                                    </a>
                                                @endcan

                                                @can('blog_edit')
                                                    <a class="btn btn-xs btn-info"
                                                        href="{{ route('frontend.blogs.edit', $blog->id) }}">
                                                        {{ trans('global.edit') }}
                                                    </a>
                                                @endcan

                                                @can('blog_delete')
                                                    <form action="{{ route('frontend.blogs.destroy', $blog->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                                        style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger"
                                                            value="{{ trans('global.delete') }}">
                                                    </form>
                                                @endcan

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('blog_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('frontend.blogs.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                alert('{{ trans('global.datatables.zero_selected') }}')

                return
                }

                if (confirm('{{ trans('global.areYouSure') }}')) {
                $.ajax({
                headers: {'x-csrf-token': _token},
                method: 'POST',
                url: config.url,
                data: { ids: ids, _method: 'DELETE' }})
                .done(function () { location.reload() })
                }
                }
                }
                dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-Blog:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

            let visibleColumnsIndexes = null;
            $('.datatable thead').on('input', '.search', function() {
                let strict = $(this).attr('strict') || false
                let value = strict && this.value ? "^" + this.value + "$" : this.value

                let index = $(this).parent().index()
                if (visibleColumnsIndexes !== null) {
                    index = visibleColumnsIndexes[index]
                }

                table
                    .column(index)
                    .search(value, strict)
                    .draw()
            });
            table.on('column-visibility.dt', function(e, settings, column, state) {
                visibleColumnsIndexes = []
                table.columns(":visible").every(function(colIdx) {
                    visibleColumnsIndexes.push(colIdx);
                });
            })
        })
    </script>
@endsection
