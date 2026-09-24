
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vehicle Rental System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .container {
            width: 100%;
            max-width: 900px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
        }

        /* LEFT SIDE */
        .hero {
            padding: 55px 40px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo {
            width: 65px;
            height: 65px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 25px;
        }

        .hero h1 {
            font-size: 42px;
            line-height: 1.1;
            margin-bottom: 18px;
        }

        .hero h1 span {
            color: #93c5fd;
        }

        .hero p {
            color: #dbeafe;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .features {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #e0f2fe;
            font-size: 14px;
        }

        .feature-icon {
            width: 35px;
            height: 35px;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* RIGHT SIDE */
        .box {
            background: #ffffff;
            padding: 45px;
        }

        .box-header {
            margin-bottom: 30px;
        }

        .box-header h2 {
            color: #111827;
            font-size: 28px;
            margin-bottom: 8px;
        }

        .box-header p {
            color: #6b7280;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #374151;
            font-size: 14px;
            margin-bottom: 8px;
        }

        select,
        input {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #d1d5db;
            border-radius: 12px;
            background: #f9fafb;
            font-size: 15px;
            color: #111827;
            outline: none;
            transition: 0.3s;
        }

        select:focus,
        input:focus {
            border-color: #2563eb;
            background: white;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.25);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(37, 99, 235, 0.35);
        }

        button:active {
            transform: translateY(0);
        }

        /* ERROR */
        .error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #dc2626;
            padding: 12px 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        /* RESULT */
        .result {
            margin-top: 30px;
            padding: 22px;
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
        }

        .result-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 18px;
        }

        .result-title-icon {
            width: 40px;
            height: 40px;
            background: #dbeafe;
            color: #2563eb;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        .result h2 {
            font-size: 20px;
            color: #111827;
        }

        .details {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .detail {
            display: flex;
            justify-content: space-between;
            padding-bottom: 12px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 14px;
        }

        .detail:last-child {
            border-bottom: none;
        }

        .detail-label {
            color: #6b7280;
        }

        .detail-value {
            color: #111827;
            font-weight: 600;
        }

        .total {
            margin-top: 18px;
            padding: 18px;
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total span:first-child {
            color: #1e3a8a;
            font-weight: 600;
        }

        .total-amount {
            color: #1d4ed8;
            font-size: 24px;
            font-weight: 800;
        }

        .footer {
            text-align: center;
            color: #9ca3af;
            font-size: 12px;
            margin-top: 25px;
        }

        /* RESPONSIVE */
        @media (max-width: 750px) {
            body {
                padding: 15px;
            }

            .container {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 35px 30px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .box {
                padding: 30px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- LEFT SIDE -->
    <div class="hero">

        <div class="logo">
            🚗
        </div>

        <h1>
            Vehicle<br>
            <span>Rental System</span>
        </h1>

        <p>
            Find the right vehicle for your journey.
            Select a vehicle, choose your rental duration,
            and instantly calculate your rental cost.
        </p>

        <div class="features">

            <div class="feature">
                <div class="feature-icon">🚘</div>
                <span>Cars available for rent</span>
            </div>

            <div class="feature">
                <div class="feature-icon">🏍️</div>
                <span>Motorcycles for quick trips</span>
            </div>

            <div class="feature">
                <div class="feature-icon">🚐</div>
                <span>Vans for groups and families</span>
            </div>

        </div>

    </div>


    <!-- RIGHT SIDE -->
    <div class="box">

        <div class="box-header">
            <h2>Rent a Vehicle</h2>
            <p>Enter your rental information below.</p>
        </div>


        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif


        <form action="{{ route('vehicle.calculate') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="vehicle">
                    Select Vehicle
                </label>

                <select name="vehicle" id="vehicle" required>

                    <option value="">
                        Choose a vehicle
                    </option>

                    <option value="car">
                        🚗 Car
                    </option>

                    <option value="motorcycle">
                        🏍️ Motorcycle
                    </option>

                    <option value="van">
                        🚐 Van
                    </option>

                </select>

            </div>


            <div class="form-group">

                <label for="days">
                    Rental Duration
                </label>

                <input
                    type="number"
                    name="days"
                    id="days"
                    min="1"
                    placeholder="Enter number of days"
                    required
                >

            </div>


            <button type="submit">
                Calculate Rental Cost →
            </button>

        </form>


        @if(isset($vehicle))

            <div class="result">

                <div class="result-title">

                    <div class="result-title-icon">
                        ✓
                    </div>

                    <h2>Rental Summary</h2>

                </div>


                <div class="details">

                    <div class="detail">

                        <span class="detail-label">
                            Vehicle
                        </span>

                        <span class="detail-value">
                            {{ $vehicle->getName() }}
                        </span>

                    </div>


                    <div class="detail">

                        <span class="detail-label">
                            Daily Rate
                        </span>

                        <span class="detail-value">
                            ₱{{ number_format($vehicle->getDailyRate(), 2) }}
                        </span>

                    </div>


                    <div class="detail">

                        <span class="detail-label">
                            Rental Days
                        </span>

                        <span class="detail-value">
                            {{ $days }} day(s)
                        </span>

                    </div>


                    <div class="detail">

                        <span class="detail-label">
                            Base Rental
                        </span>

                        <span class="detail-value">
                            ₱{{ number_format($baseRental, 2) }}
                        </span>

                    </div>

                </div>


                <div class="total">

                    <span>
                        TOTAL RENTAL
                    </span>

                    <span class="total-amount">
                        ₱{{ number_format($total, 2) }}
                    </span>

                </div>

            </div>

        @endif


        <div class="footer">
            Vehicle Rental System • Laravel OOP Project
        </div>

    </div>

</div>

</body>
</html>
