<!-- resources/views/contato.blade.php -->
<html>
<head>
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Formulário de Contato</h1>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="POST" action="{{ route('contato.enviar') }}">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" required></textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
