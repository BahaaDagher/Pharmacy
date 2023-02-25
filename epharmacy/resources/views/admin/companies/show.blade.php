@extends("admin.layout.master") ;
@section("title")
<h1> information of <strong>{{$company["name"]}}</strong></h1>
@endsection

@section("content")
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">information </strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th scope="col">id</th>
                        <td scope="row">{{$company["id"]}}</td>
                    </tr>
                    <tr>
                        <th scope="col">name</th>
                        <td scope="row">{{$company["name"]}}</td>
                    </tr>
                    <tr>
                        <th scope="col">drugs</th>
                        <td>
                            <ul style="list-style-position: inside;">
                                @foreach ($company->drugs as $drug)
                                <li><a href="{{route('drugs.show' , $drug->id)}}"> {{$drug->name ?? ""}} </a></li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form method="post" action="{{route('companies.destroy' , $company->id) }}">
                                @csrf
                                @method("delete")
                                <input class="btn btn-outline-danger" type="submit" value="Delete">
                            </form>
                            <a href="{{ route('companies.edit' ,$company['id'] ) }}" class="btn btn-outline-success">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
