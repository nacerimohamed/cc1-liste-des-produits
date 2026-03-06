<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Produits')</title>
    <style>
        /* ===== Global ===== */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f9;
            color: #1f2937;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #1e40af;
            font-size: 2em;
        }

        /* ===== Form ===== */
        form {
            max-width: 600px;
            margin: 0 auto 30px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        form:hover {
            box-shadow: 0 12px 25px rgba(0,0,0,0.12);
        }

        form label {
            display: block;
            margin-top: 12px;
            font-weight: 600;
            color: #374151;
        }

        form input[type="text"],
        form input[type="number"],
        form textarea,
        form select {
            width: 100%;
            padding: 10px 12px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            box-sizing: border-box;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        form input:focus,
        form textarea:focus,
        form select:focus {
            border-color: #2563eb;
            outline: none;
            box-shadow: 0 0 6px rgba(37, 99, 235, 0.3);
        }

        form button {
            margin-top: 18px;
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 7px;
            cursor: pointer;
            font-weight: bold;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        form button:hover {
            background-color: #1e3aa3;
            transform: translateY(-2px);
        }

        /* ===== Table ===== */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.05);
        }

        table th, table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        table th {
            background-color: #2563eb;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-size: 14px;
        }

        table tr:nth-child(even) {
            background-color: #f9fafb;
        }

        table tr:hover {
            background-color: #e0e7ff;
            transition: 0.2s;
        }

        /* ===== Buttons & Links ===== */
        a.button {
            display: inline-block;
            text-decoration: none;
            background-color: #10b981;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-right: 5px;
            transition: all 0.3s ease;
        }

        a.button:hover {
            background-color: #059669;
            transform: translateY(-2px);
        }

        button.delete-btn {
            background-color: #ef4444;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            transition: all 0.3s ease;
        }

        button.delete-btn:hover {
            background-color: #b91c1c;
            transform: translateY(-2px);
        }

        /* ===== Images ===== */
        img {
            border-radius: 6px;
            max-width: 80px;
            height: auto;
            transition: all 0.3s ease;
        }

        img:hover {
            transform: scale(1.05);
        }

        /* ===== Responsive ===== */
        @media(max-width:768px){
            table, form {
                width: 100%;
            }

            table th, table td {
                padding: 8px 10px;
                font-size: 13px;
            }

            form input, form select, form textarea {
                font-size: 13px;
            }

            form button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>