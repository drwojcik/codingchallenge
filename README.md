# CodingChallenge

End Point REST que retorna recordes de levantamento de peso

_Olá, para testar o código siga os requisitos:_

	
- Framework Lumen(Laravel)
	
- PHP >= 7.3
    
- OpenSSL PHP Extension
    
- PDO PHP Extension (MySQL foi usado)

- Mbstring PHP Extension

        	
1. clonar o projeto do repositorio git
        	
2. no diretório rodar o comando composer install
        	
3. `php -S localhost:8000 -t public`
        	
4. usar o metodo post para mandar a requisição conforme abaixo

5. Usar o campo movement_id que é o id do movement para recuperar qual movement deseja no data do postman.

     **POSTMAN:**
       	
```
curl --location --request POST 'http://localhost:8000/ranking' \
			--header 'Content-Type: application/x-www-form-urlencoded' \
			--data-urlencode 'movement_id=1'
```

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
