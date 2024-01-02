<?php require_once('../Controllers/Controller.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="View/style.css">
    <link rel="stylesheet" type="text/css" href="Controllers/Controllers.php">

</head>

<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form method="POST">
            <input type="hidden" name="operador" value="<?= $operador ?>">
            <input type="hidden" name="n1" value="<?= $n1 ?>">
            <div class="card-body">
                <table>
                    <tr>
                        <td colspan="4">
                            <input type="text" class="form-control" rows="3" readonly="readonly" name="resultado"
                                value="<?= $res ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="numero" value="7" class="btn btn-outline-primary">7</button>
                        </td>
                        <td><button type="submit" name="numero" value="8" class="btn btn-outline-primary">8</button>
                        </td>
                        <td><button type="submit" name="numero" value="9" class="btn btn-outline-primary">9</button>
                        </td>
                        <td><button type="submit" name="oper" value="/" class="btn btn-outline-primary">/</button></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="numero" value="4" class="btn btn-outline-primary">4</button>
                        </td>
                        <td><button type="submit" name="numero" value="5" class="btn btn-outline-primary">5</button>
                        </td>
                        <td><button type="submit" name="numero" value="6" class="btn btn-outline-primary">6</button>
                        </td>
                        <td><button type="submit" name="oper" value="*" class="btn btn-outline-primary">*</button></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="numero" value="1" class="btn btn-outline-primary">1</button>
                        </td>
                        <td><button type="submit" name="numero" value="2" class="btn btn-outline-primary">2</button>
                        </td>
                        <td><button type="submit" name="numero" value="3" class="btn btn-outline-primary">3</button>
                        </td>
                        <td><button type="submit" name="oper" value="+" class="btn btn-outline-primary">+</button></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="numero" value="0" class="btn btn-outline-primary">0</button>
                        </td>
                        <td><button type="submit" name="oper" value="=" class="btn btn-outline-primary">=</button></td>
                        <td><button type="submit" name="oper" value="-" class="btn btn-outline-primary">-</button></td>
                        <td><button type="submit" name="clear" class="btn btn-outline-primary">c</button></td>
                    </tr>
                </table>
            </div>
        </form>
        
    </div>


</body>
</html>
