<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .detail {
            margin: 15px 0;
            font-size: 16px;
        }
        .detail strong {
            display: inline-block;
            width: 80px;
            color: #555;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background: #3498db;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }
        a:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🎓 Student Details</h2>

        <?php if ($student): ?>
            <div class="detail"><strong>ID:</strong> <?php echo $student->id; ?></div>
            <div class="detail"><strong>Name:</strong> <?php echo $student->name; ?></div>
            <div class="detail"><strong>Email:</strong> <?php echo $student->email; ?></div>
        <?php else: ?>
            <p style="color:red; text-align:center;">❌ Student not found!</p>
        <?php endif; ?>

        <div style="text-align:center;">
            <a href="<?php echo site_url('student'); ?>">⬅ Back to List</a>
        </div>
    </div>
</body>
</html>