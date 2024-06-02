@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Autos</h1>
        <div class="table-responsive">
            @if(sizeof($cars) == 0)
                <h3 class="fst-italic">No offers yet!</h3>
            @else
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>License Plate</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Mileage</th>
                    <th>Seats</th>
                    <th>Doors</th>
                    <th>Production Year</th>
                    <th>Weight</th>
                    <th>Color</th>
                    <th>Image</th>
                    <th>Sold At</th>
                    <th>Views</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->license_plate }}</td>
                        <td>{{ $car->make }}</td>
                        <td>{{ $car->model }}</td>
                        <td>${{ number_format($car->price, 2) }}</td>
                        <td>{{ $car->mileage }}</td>
                        <td>{{ $car->seats }}</td>
                        <td>{{ $car->doors }}</td>
                        <td>{{ $car->production_year }}</td>
                        <td>{{ $car->weight }}</td>
                        <td>{{ $car->color }}</td>
                        <td>
                            @if($car->image)
                                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->make }} {{ $car->model }}" class="img-fluid" style="max-width: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $car->sold_at ? $car->sold_at->format('M d, Y') : 'Not Sold' }}</td>
                        <td>{{ $car->views }}</td>
                        <td>
                            @if(\Illuminate\Support\Facades\Auth::id() == $car->user_id)
                                <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this car?')">Delete</button>
                                </form>
                            @else
                                Not your offer!
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@endsection
