<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular Student</title>
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #777;
            font-size: 16px;
            transition: 0.3s ease-in-out;
        }

        .form-group input {
            width: 100%;
            padding: 10px 10px 10px 40px;
            border: 2px solid transparent;
            border-radius: 25px;
            background: #f1f1f1;
            font-size: 16px;
            transition: 0.3s;
            color: #333;
        }

        .form-group input:focus {
            background: #fff;
            border-color: #3498db;
            outline: none;
        }

        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: -10px;
            left: 20px;
            font-size: 12px;
            color: #3498db;
        }

        .submit-btn {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }

        .submit-btn:hover {
            background: linear-gradient(135deg, #2980b9, #3498db);
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: -75%;
            left: -75%;
            width: 200%;
            height: 200%;
            background: linear-gradient(135deg, rgba(0, 168, 255, 0.5), rgba(0, 255, 214, 0.5));
            transform: rotate(45deg);
            z-index: -1;
            transition: 0.5s;
        }

        .form-container:hover::before {
            top: -50%;
            left: -50%;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Formular Student</h2>
        <form action="index.php" method="post">
            <div class="form-group">
                <input type="text" id="nume" name="nume" placeholder=" " required>
                <label for="nume">Nume</label>
            </div>
            <div class="form-group">
                <input type="text" id="prenume" name="prenume" placeholder=" " required>
                <label for="prenume">Prenume</label>
            </div>
            <div class="form-group">
                <input type="text" id="grupa" name="grupa" placeholder=" " required>
                <label for="grupa">Grupa</label>
            </div>
            <div class="form-group">
                <input type="number" id="media" name="media" step="0.01" min="1" max="10" placeholder=" " required>
                <label for="media">Media</label>
            </div>
            <div>
                <input type="submit" class="submit-btn" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>
