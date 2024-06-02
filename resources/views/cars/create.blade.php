@extends('layouts.app')
@section('content')
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <div id="first-form">
            <div>
                <label for="license_plate">Kenteken: </label>
                <br>
                <div class="d-inline-flex m-2 border border-2 border-black rounded-3">
                    <p class="pt-4 p-1 m-0 rounded-start dodgerblue">NL</p>
                    <input class="bg-warning rounded-end border-0 text-decoration-none focus-ring-none no-focus"  type="text" name="license_plate" id="license_plate">
                </div>
            </div>
            <div id="continue-button">
                <button type="button" onclick="showSecondForm()">Continue</button>
            </div>
        </div>
        <div id="second-form" style="display:none;">
            <div>
                <label for="make">Merk: </label>
                <input type="text" name="make" id="make">
            </div>
            <div>
                <label for="model">Model: </label>
                <input type="text" name="model" id="model">
            </div>
            <div>
                <label for="price">Prijs: </label>
                <input type="number" name="price" id="price">
            </div>
            <div>
                <label for="mileage">Kilometers gereden: </label>
                <input type="number" name="mileage" id="mileage">
            </div>
            <div>
                <label for="seats">Aantal stoelen: </label>
                <input type="number" name="seats" id="seats">
            </div>
            <div>
                <label for="doors">Aantal deuren: </label>
                <input type="number" name="doors" id="doors">
            </div>
            <div>
                <label for="production_year">Productie jaar: </label>
                <input type="number" name="production_year" id="production_year">
            </div>
            <div>
                <label for="color">Kleur: </label>
                <input type="text" name="color" id="color">
            </div>
            <div>
                <input type="submit" value="Create Car">
            </div>
        </div>
    </form>
@endsection
<script>
    function showSecondForm() {
        document.getElementById('continue-button').style.display = 'none';
        document.getElementById('second-form').style.display = 'block';
    }
</script>
