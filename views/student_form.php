<!DOCTYPE html>
<html>
<head>
    <title>Student Form & List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 800px;
            margin: 30px auto;
        }
        .card {
            background: #fff;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            color: #444;
        }
        input[type="text"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }
        button {
            background: #27ae60;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #219150;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        a.view-btn {
            text-decoration: none;
            background: #2980b9;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            transition: 0.3s;
        }
        a.view-btn:hover {
            background: #1f6391;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <!-- Form Card -->
        <div class="card">
            <h2>➕ Add New Student</h2>
            <form method="post" action="<?php echo site_url('student/save'); ?>">
                <div>
                    <label>Name:</label>
                    <input type="text" name="name" required>
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" required>
                </div>
                <button type="submit">Save Student</button>
            </form>
        </div>

        <!-- List Card -->
        <div class="card">
            <h2>📋 All Students</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php if(!empty($students)) : ?>
                    <?php foreach ($students as $s): ?>
                    <tr>
                        <td><?php echo $s->id; ?></td>
                        <td><?php echo $s->name; ?></td>
                        <td><?php echo $s->email; ?></td>
                        <td>
                            <a class="view-btn" href="<?php echo site_url('student/view/'.$s->id); ?>">View</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="4">No students found</td></tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>