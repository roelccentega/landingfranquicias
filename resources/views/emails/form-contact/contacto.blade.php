<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento de Correo</title>
</head>
<body>

<p><strong>Latir Perú </strong></p>
{{--<p>Este formulario fue enviado desde: <em>{{ $data['url'] }}</em></p>--}}
<ul>
    <li>
        Nombre: {{ $data['name'] }}
    </li>
    <li>
        Email: {{ $data['email'] }}
    </li>

    <li>
        Teléfono: {{ $data['phone'] }}
    </li>
    <li>
        Asunto: {{ $data['subject'] }}
    </li>
    <li>
        Mensaje: {{ $data['message'] }}
    </li>


</ul>
<p><b>URL de destino:</b> <a href="{{$data['url']}}">{{$data['url']}}</a></p>

</body>
</html>
