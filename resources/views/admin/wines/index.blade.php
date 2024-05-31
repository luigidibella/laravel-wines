@extends('layouts.admin')

@section('content')

    <div class="container my-3">
        <h1>Lista vini</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-capitalize">winery</th>
                    <th scope="col" class="text-capitalize">wine</th>
                    <th scope="col" class="text-capitalize">average</th>
                    <th scope="col" class="text-capitalize">reviews</th>
                    <th scope="col" class="text-capitalize">location</th>
                    <th scope="col" class="text-capitalize">aromas</th>
                    <th scope="col" class="text-capitalize">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wines as $wine)
                    <tr>
                        <td>{{ $wine->winery }}</td>
                        <td>{{ $wine->wine }}</td>
                        <td>{{ $wine->average }}</td>
                        <td>{{ $wine->reviews }}</td>
                        <td>{{ $wine->location }}</td>
                        <td>
                            @forelse ($wine->aromas as $aroma)
                                <a href="{{ route('admin.aromaWines' , $aroma) }}"><span class="badge text-bg-primary">{{ $aroma->name }}</span></a>
                            @empty
                                ---
                            @endforelse
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.wines.edit', $wine->id) }}">
                                    <div class="btn btn-warning me-2"><i class="fa-solid fa-pen-to-square"></i></div>
                                </a>
                                <form class="d-inline" action="{{ route('admin.wines.destroy', $wine->id) }}" method="POST"
                                    onsubmit="return confirm('Sei sicuro di vole eliminare \'{{ $wine->wine }}\'?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $wines->links('pagination::bootstrap-5') }} --}}
    </div>
@endsection
