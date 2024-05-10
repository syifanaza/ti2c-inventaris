<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            background-color: #642B73;  
            background: #F9EFDB;  
            font-family: georgia;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 65vh;
        }
        header{
            background-color: #102C57;
            color: white;
            padding: 20px;
            font-size: 24px;
            text-align: center; 
        }
        h1 {
            color: #FFF;
            margin: 0;
            font-size: 24px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 130px;
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex-grow: 1;
            margin-top: 50px; 
        }
        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            margin-top: 40px;
        }
        .menu-item {
            margin: 0 20px;
        }
        a {
            text-decoration: none;
            padding: 15px 30px;
            background-color: #153448;
            color: #fff;
            border-radius: 25px;
            transition: background-color 0.3s;
            font-size: 18px;
            display: inline-block;
        }
        a:hover {
            background-color: #3C5B6F;
        }
        .decoration {
            color: #102C57;
            font-size: 20px;
            margin-top: 30px;
        }
        .welcome-text {
            font-size: 24px; 
            font-weight: bold; 
            margin-top: -80px; 
        }

    </style>
</head>
<body>
    <header>
        <h1>Inventaris Barang</h1>
    </header>
    <div class="container">
        <div class="decoration">
            <p class="welcome-text">Selamat datang di sistem manajemen inventaris.</p>
            <p>Silakan pilih salah satu menu di bawah ini:</p>
        </div>
        <div class="menu">
            <div class="menu-item"><a href="tambah.php">Tambah Barang</a></div>
            <div class="menu-item"><a href="hasil.php">Tampilkan Barang</a></div>
        </div>
    </div>
</body>
</html>
