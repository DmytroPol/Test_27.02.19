<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<table class="table table-hover table_quest" border="2">
    <thead>
    <tr>
        <th>������� </th>
        <th>����������</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1) ������� ������� � ��������</td>
        <td><button class="btn btn-success" id="task_1">�������� ���������</button></td>

    </tr>
    <tr>
        <td>2) ������� � ������, �������� ������ <br>
            ������� �:<input type="number" id="orderNumber">
            <br><span></span>
        </td>
        <td><button class="btn btn-success" id="task_2">�������� ���������</button></td>

    </tr>
    <tr>
        <td>3) ����� ������, ��� ������, ����, ����������, ��� ���������
            ������� �� ������� �������� ����� ��� ���������� ������ >2 � id ��������� 10 ��� 12</td>
        <td><button class="btn btn-success" id="task_3">�������� ���������</button></td>

    </tr>
    <tr>
        <td>4) ��� ������, ���������� ������, � ����� (price) �� ������� ������ (�������������)</td>
        <td><button class="btn btn-success" id="task_4">�������� ���������</button></td>

    </tr>

    </tbody>
</table>
<hr>





<div id="result"></div>
</body>
</html>