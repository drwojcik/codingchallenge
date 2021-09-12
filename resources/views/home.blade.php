<html>
    <body>
        <h1>Olá, {{ $name }}, para testar o código siga os requisitos:</h1>
<ul>
	<li>Framework Lumen(Laravel)</li>
	<li>PHP >= 7.3</li>
    <li>OpenSSL PHP Extension</li>
    <li>PDO PHP Extension (MySQL foi usado)</li>
    <li>Mbstring PHP Extension</li>
</ul>
        <ul>
        	<li>clonar o projeto do repositorio github</li>
        	<li>no diretório rodar o comando composer install</li>
        	<li><pre>php -S localhost:8000 -t public</pre></li>
        	<li>usar o metodo post para mandar a requisição conforme abaixo</li>
        </ul>

       <h2>POSTMAN:</h2>
        <pre>
        	curl --location --request POST 'http://localhost:8000/ranking' \
			--header 'Content-Type: application/x-www-form-urlencoded' \
			--data-urlencode 'movement_id=1'
        </pre>
    </body>
</html>