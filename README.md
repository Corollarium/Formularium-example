# Formularium-example

A simple pure PHP app showing how to use [Formularium](https://github.com/Corollarium/Formularium).

## How to run

- clone repo locally
- run `composer install`
- run `php -S localhost:8080`
- open http://localhost:8080 in your browser

## About

This is a minimum simple example of how to use Formularium, using plain PHP without any PHP frameworks. It uses [Bootstrap](https://getbootstrap.com/) for styling. It only uses the browser validation. We do not validate the `aaaaa` field with a pattern on purpose so you can submit and see the backend validation too.

- [index.php](https://github.com/Corollarium/Formularium-example/blob/master/index.php): Renders a form.
- [model.php](https://github.com/Corollarium/Formularium-example/blob/master/model.php): The object model, with all its fields.
- [post.php](https://github.com/Corollarium/Formularium-example/blob/master/post.php): The post form action. Only validates and renders the output.
- [Datatype_aaaaa.php](https://github.com/Corollarium/Formularium-example/blob/master/Datatype_aaaaa.php): A custom datatype. In this case it is a field that requires you to 
type 'aaaaa'. This shows how you can create a new datatypem and in this case it extends the `string` datatype.
- [Renderable_aaaaa.php](https://github.com/Corollarium/Formularium-example/blob/master/Renderable_aaaaa.php): A custom renderer for the datatype. It inherits from `Renderable_string`, and just adds styling to show how to customize a field. Note that we only implement this for the HTML frontend: the Bootstrap frontend still handles the styling automatically. 
