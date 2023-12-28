# WP PHP wkhtmltopdf Plugin

WP PHP wkhtmltopdf is a simple wrapper for Michael Härtl's PHP wkhtmltopdf library, designed to provide an easy integration for WordPress developers. This plugin allows developers who are either unable or unwilling to include the PHP wkhtmltopdf library directly in their theme or plugin to seamlessly utilize its functionality.

## Installation

1. Clone or download this repository into your WordPress plugin directory.

   ```bash
   git clone https://github.com/your-username/wp-php-wkhtmltopdf.git
   ```

1. Navigate to the plugin directory.

    ```bash
    cd wp-php-wkhtmltopdf
    ```

1. Run Composer to install dependencies.

    ```bash
    composer install
    ```

## Usage

Once the plugin is installed and dependencies are pulled in, you can use the `Pdf` class exactly as explained in the [PHP wkhtmltopdf documentation](https://github.com/mikehaertl/phpwkhtmltopdf).

### Example Usage:

```php
// Include autoloader if not already loaded
require_once 'vendor/autoload.php';

// Use the Pdf class
use WpPhpWkhtmltopdf\Pdf;

// Create a new Pdf instance
$pdf = new Pdf();

// Set options (if needed)
$pdf->setOptions(['--no-images', '--margin-top' => 10]);

// Add a page
$pdf->addPage('http://www.example.com');

// Save the PDF to a file
$pdf->saveAs('output.pdf');
```

## Notes

- Make sure to run `composer install` from within the plugin directory after installation to pull in the required dependencies.
- For detailed information on using the `Pdf` class, refer to the [PHP wkhtmltopdf documentation](https://github.com/mikehaertl/phpwkhtmltopdf).

## License

This plugin is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

