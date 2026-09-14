<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Rental</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }

        .box {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: white;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background: #333;
            color: white;
            border: 0;
        }

        .result {
            background: #eee;
            padding: 15px;
            margin-top: 20px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="box">

    <h1>Vehicle Rental System</h1>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('vehicle.calculate') }}" method="POST">
        @csrf

        <label>Vehicle:</label>

        <select name="vehicle" required>
            <option value="">Select Vehicle</option>
            <option value="car">Car</option>
            <option value="motorcycle">Motorcycle</option>
            <option value="van">Van</option>
        </select>

        <label>Days:</label>

        <input type="number" name="days" min="1" required>

        <button type="submit">Calculate</button>
    </form>


    @if(isset($vehicle))

        <div class="result">

            <h2>Rental Result</h2>

            <p>Vehicle: {{ $vehicle->getName() }}</p>

            <p>Daily Rate:
                ₱{{ number_format($vehicle->getDailyRate(), 2) }}
            </p>

            <p>Days: {{ $days }}</p>

            <p>Base Rental:
                ₱{{ number_format($baseRental, 2) }}
            </p>

            <h3>
                Total:
                ₱{{ number_format($total, 2) }}
            </h3>

        </div>

    @endif

</div>

</body>
</html>