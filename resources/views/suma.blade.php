
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de 2 números</title>
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 2rem 2.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            min-width: 320px;
        }
        h2 {
            text-align: center;
            color: #6366f1;
            margin-bottom: 1.5rem;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        label {
            font-weight: 500;
            color: #374151;
        }
        input[type="number"] {
            padding: 0.5rem;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.2s;
        }
        input[type="number"]:focus {
            border-color: #6366f1;
        }
        button {
            background: #6366f1;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #4338ca;
        }
        .resultado {
            margin-top: 1.5rem;
            text-align: center;
            font-size: 1.2rem;
            color: #10b981;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sumar dos números</h2>
        <form action="/suma" method="POST">
            @csrf <!-- Token de seguridad para formularios en Laravel -->
            <label for="numero1">Número 1:</label>
            <input type="number" id="numero1" name="numero1" required>
            <label for="numero2">Número 2:</label>
            <input type="number" id="numero2" name="numero2" required>
            <button type="submit">Sumar</button>
        </form>
    </div>
    <br>
 @if (isset($res))
    Resultado de la suma es: {{ $res }}
@endif
</body>
</html>