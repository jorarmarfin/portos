@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ver posts</div>

                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> Nombre </th>
                                <th> Opciones </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $item)
                            <tr >
                                <td> {{ $item->nombre }} </td>
                                <td> <a href="{{ route('post.edit',$item->id) }}">Edit</a>
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
@endsection
